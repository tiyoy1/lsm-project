@php
    $contactSetting = $contactSetting ?? \App\Models\ContactSetting::query()->latest('id')->first();
    $whatsappNumber = preg_replace('/\D+/', '', (string) (($contactSetting?->whatsapp ?? '') ?: '6281809999180'));
@endphp

<style>
    .whatsapp-fab {
        position: fixed;
        right: 24px;
        width: 60px;
        height: 60px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: linear-gradient(135deg, #25d366, #128c7e, #1fd16a);
        background-size: 180% 180%;
        color: #ffffff;
        font-size: 1.9rem;
        box-shadow: 0 18px 32px rgba(18, 140, 126, 0.35);
        z-index: 999;
        transition: transform 0.25s ease, box-shadow 0.25s ease, filter 0.25s ease, background-position 0.35s ease;
        overflow: visible;
        isolation: isolate;
        text-decoration: none;
    }

    .whatsapp-fab svg {
        width: 1em;
        height: 1em;
        display: block;
        fill: currentColor;
    }

    .whatsapp-fab:hover {
        transform: translateY(-3px) scale(1.03);
        box-shadow: 0 22px 38px rgba(18, 140, 126, 0.45);
        color: #ffffff;
        filter: saturate(1.05);
        background-position: 100% 0%;
        animation: whatsappFabPulse 1.4s ease-in-out infinite;
    }

    .whatsapp-fab::before {
        content: "";
        position: absolute;
        inset: -6px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(37, 211, 102, 0.22), transparent 70%);
        opacity: 0;
        transform: scale(0.86);
        transition: opacity 0.25s ease, transform 0.25s ease;
        z-index: -1;
    }

    .whatsapp-fab:hover::before {
        opacity: 1;
        transform: scale(1.1);
    }

    .whatsapp-fab-tooltip {
        position: absolute;
        right: calc(100% + 14px);
        top: 50%;
        transform: translateY(-50%) translateX(8px);
        padding: 8px 12px;
        border-radius: 999px;
        background: rgba(8, 28, 25, 0.92);
        color: #ffffff;
        font-size: 0.8rem;
        font-weight: 700;
        line-height: 1;
        white-space: nowrap;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.22s ease, transform 0.22s ease;
    }

    .whatsapp-fab-tooltip::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 100%;
        transform: translateY(-50%);
        border-width: 7px 0 7px 8px;
        border-style: solid;
        border-color: transparent transparent transparent rgba(8, 28, 25, 0.92);
    }

    .whatsapp-fab:hover .whatsapp-fab-tooltip {
        opacity: 1;
        transform: translateY(-50%) translateX(0);
    }

    @keyframes whatsappFabPulse {
        0% {
            box-shadow: 0 18px 32px rgba(18, 140, 126, 0.35);
        }

        50% {
            box-shadow: 0 22px 42px rgba(18, 140, 126, 0.5);
        }

        100% {
            box-shadow: 0 18px 32px rgba(18, 140, 126, 0.35);
        }
    }

    @media (max-width: 480px) {
        .whatsapp-fab {
            right: 16px;
            bottom: 16px;
            width: 54px;
            height: 54px;
            font-size: 1.65rem;
        }

        .whatsapp-fab-tooltip {
            right: calc(100% + 10px);
            font-size: 0.72rem;
            padding: 7px 10px;
        }
    }
</style>

<a
    class="whatsapp-fab"
    href="https://wa.me/{{ $whatsappNumber }}"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Chat via WhatsApp"
    title="Chat via WhatsApp"
>
    <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false">
        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
    </svg>
    <span class="whatsapp-fab-tooltip">Hubungi kami!</span>
</a>
