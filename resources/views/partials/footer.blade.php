@php
    $footerLogo = $logoUrl ?? asset('img/LOGO METLAND COLLEGE-02.png');
    $footerWhatsapp = isset($contactSetting) && filled($contactSetting?->whatsapp)
        ? $contactSetting->whatsapp
        : '+62-8180-9999-180';
    $footerNews = ($latestNews ?? collect())->take(2);
@endphp

<footer class="school-footer" id="school-footer">
    <div class="footer-shell">
        <div class="footer-brand">
            <div class="footer-brand-head">
                <img src="{{ $footerLogo }}" alt="Logo Metland College" class="footer-logo">
                <h3>METLAND COLLEGE</h3>
            </div>
            <p>The first step towards a brilliant career. Learn practically, develop creatively, and get ready to jump into the industry.</p>
        </div>

        <div class="footer-posts">
            <h4>Recent Posts</h4>
            <div class="footer-post-list">
                @forelse($footerNews as $item)
                    <article class="footer-post-item">
                        <img src="{{ $item->image_url }}" alt="{{ $item->localized_title }}" class="footer-post-thumb">
                        <div class="footer-post-content">
                            <a href="{{ route('news.show', $item->slug) }}">{{ \Illuminate\Support\Str::limit($item->localized_title, 76) }}</a>
                            <p class="footer-post-date">{{ ($item->published_at ?? $item->created_at)->translatedFormat('d M Y') }}</p>
                        </div>
                    </article>
                @empty
                    <article class="footer-post-item">
                        <img src="{{ asset('img/hero2.JPG') }}" alt="No News yet" class="footer-post-thumb">
                        <div class="footer-post-content">
                            <a href="{{ route('news.index') }}">No news has been published yet</a>
                            <p class="footer-post-date">Please check back later</p>
                        </div>
                    </article>
                @endforelse
            </div>
        </div>

        <div class="footer-links">
            <h4>Quick Links</h4>
            <a href="{{ route('Profile') }}">About</a>
            <a href="{{ route('LPK') }}">Career</a>
            <a href="{{ route('news.index') }}">News</a>
            <a href="#partnership">Partnership</a>
            <a href="#alumni-section">More</a>
        </div>

        <div class="footer-contact-map">
            <p>
                <i class="bi bi-envelope-fill" style="color: #1ca5a5; margin-right: 6px;"></i>
                <a href="mailto:admin@metlandcollege.net">admin@metlandcollege.net</a>
            </p>
            <p>
                <i class="bi bi-whatsapp" style="color: #1ca5a5; margin-right: 6px;"></i>
                {{ $footerWhatsapp }}
            </p>
            <p style="margin: 14px 0 12px;"><strong>Locations:</strong></p>
            <p style="margin-bottom: 8px;">
                <a href="https://maps.app.goo.gl/WkG3ifbvA4o52RkAA" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill" style="color: #1ca5a5; margin-right: 4px;"></i> <strong>SMK METLAND CILEUNGSI</strong><br>
                </a>
            </p>
            <p style="margin-bottom: 8px;">
                <a href="https://maps.app.goo.gl/aJr5nJd8Fe2ArL8s8" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill" style="color: #1ca5a5; margin-right: 4px;"></i> <strong>SMK METLAND CIBITUNG</strong><br>
                </a>
            </p>
            <p style="margin-bottom: 8px;">
                <a href="https://maps.app.goo.gl/eKSkxnsdNuP2UJbQ7" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill" style="color: #1ca5a5; margin-right: 4px;"></i> <strong>HOTEL METLAND SMARA KERTAJATI</strong><br>
                </a>
            </p>
            <p style="margin-bottom: 8px;">
                <a href="https://maps.app.goo.gl/v7NmD5Zn2b3m2zGM7" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill" style="color: #1ca5a5; margin-right: 4px;"></i> <strong>HORISON ULTIMA BEKASI</strong><br>
                </a>
            </p>
            <p style="margin-bottom: 16px;">
                <a href="https://maps.app.goo.gl/xAJFLvyfYEwFE5sQ7" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-geo-alt-fill" style="color: #1ca5a5; margin-right: 4px;"></i> <strong>SEVA SEMINYAK BADUNG BALI</strong><br>
                </a>
            </p>
            <div class="footer-socials">
                <a href="https://www.youtube.com/@MetlandAcademy" target="_blank" rel="noopener noreferrer" aria-label="YouTube Metland Academy">
                    <i class="bi bi-youtube"></i>
                </a>
                <a href="https://www.tiktok.com/@metlandcollege" target="_blank" rel="noopener noreferrer" aria-label="TikTok Metland College">
                    <i class="bi bi-tiktok"></i>
                </a>
                <a href="https://www.instagram.com/metland.college/" target="_blank" rel="noopener noreferrer" aria-label="Instagram Metland College">
                    <i class="bi bi-instagram"></i>
                </a>
            </div>
            <iframe
                class="footer-map-frame"
                title="Lokasi SMK Metland"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps?cid=4362342788863844499&hl=id&gl=ID&output=embed">
            </iframe>
        </div>
    </div>
</footer>
