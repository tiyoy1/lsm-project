// Google Translate Element initialization
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: false
    }, 'google_translate_element');
}

// Function to apply manual translations to elements with data-en and data-id
function applyManualTranslations(langCode) {
    document.querySelectorAll('[data-en][data-id]').forEach(function(el) {
        if (langCode === 'id') {
            el.innerHTML = el.getAttribute('data-id');
        } else {
            el.innerHTML = el.getAttribute('data-en');
        }
    });
}

// Function to programmatically switch languages using Google Translate combo box
function setLanguage(langCode) {
    localStorage.setItem('preferred_language', langCode);
    
    // Update active button state in navigation bar
    updateLangButtonActiveState(langCode);
    
    // Apply manual translations immediately
    applyManualTranslations(langCode);

    // Set Google Translate cookie
    // The format is /auto/lang or /pageLang/lang
    document.cookie = `googtrans=/en/${langCode}; path=/; domain=${window.location.hostname}`;
    document.cookie = `googtrans=/en/${langCode}; path=/`;

    // Try to use the combo box if available to avoid reload
    var select = document.querySelector('.goog-te-combo');
    if (select) {
        select.value = langCode;
        select.dispatchEvent(new Event('change', { bubbles: true, cancelable: true }));
        
        // If the combo box change didn't trigger translation, reload the page to apply the cookie
        setTimeout(function() {
            if (document.cookie.indexOf(`googtrans=/en/${langCode}`) !== -1) {
                window.location.reload();
            }
        }, 500);
    } else {
        window.location.reload();
    }
}

// Function to update visual active state of translation buttons
function updateLangButtonActiveState(langCode) {
    const idBtn = document.getElementById('lang-btn-id');
    const enBtn = document.getElementById('lang-btn-en');
    if (idBtn && enBtn) {
        if (langCode === 'id') {
            idBtn.classList.add('is-active');
            enBtn.classList.remove('is-active');
        } else {
            enBtn.classList.add('is-active');
            idBtn.classList.remove('is-active');
        }
    }

    // Update mobile language toggle buttons
    const mobileLangId = document.getElementById('mobile-lang-btn-id');
    const mobileLangEn = document.getElementById('mobile-lang-btn-en');
    if (mobileLangId && mobileLangEn) {
        if (langCode === 'id') {
            // Currently in Indonesian, show "Switch to English"
            mobileLangId.style.display = 'none';
            mobileLangEn.style.display = 'flex';
        } else {
            // Currently in English, show "Ganti ke Indonesia"
            mobileLangId.style.display = 'flex';
            mobileLangEn.style.display = 'none';
        }
    }
}

// Auto-run on document ready
document.addEventListener('DOMContentLoaded', function() {
    // Check if preferred language is set in localStorage
    const savedLang = localStorage.getItem('preferred_language') || 'en';
    
    // Set initial active button state
    updateLangButtonActiveState(savedLang);

    // Apply manual translations immediately on load
    applyManualTranslations(savedLang);

    // Inject CSS to hide Google Translate banner and widget widgets
    const style = document.createElement('style');
    style.innerHTML = `
        body {
            top: 0px !important;
        }
        .skiptranslate iframe, .goog-te-banner-frame {
            display: none !important;
            visibility: hidden !important;
        }
        .goog-tooltip, .goog-tooltip:hover {
            display: none !important;
            visibility: hidden !important;
        }
        .goog-text-highlight {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }
    `;
    document.head.appendChild(style);

    // Dynamic insertion of Google Translate script
    const script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
    document.body.appendChild(script);

    // Monitor for when Google Translate iframe or elements are injected to apply stored lang
    const checkExist = setInterval(function() {
        const select = document.querySelector('.goog-te-combo');
        if (select) {
            clearInterval(checkExist);
            if (savedLang !== 'en') {
                setLanguage(savedLang);
            }
        }
    }, 100);
    
    // Timeout checkExist after 10 seconds to prevent infinite loop if offline
    setTimeout(function() {
        clearInterval(checkExist);
    }, 10000);
});
