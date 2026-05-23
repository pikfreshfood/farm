<style>
    .language-switcher {
        position: fixed;
        left: 1rem;
        bottom: 1rem;
        z-index: 80;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        border: 1px solid rgba(4, 83, 26, 0.16);
        border-radius: 0.75rem;
        background: rgba(255, 255, 255, 0.96);
        padding: 0.55rem 0.7rem;
        box-shadow: 0 18px 40px rgba(15, 23, 42, 0.16);
        color: #033d16;
        backdrop-filter: blur(12px);
    }

    .language-switcher svg {
        width: 1.05rem;
        height: 1.05rem;
        flex: 0 0 auto;
    }

    .language-switcher select {
        min-width: 9.5rem;
        border: 0;
        background: transparent;
        color: #033d16;
        font-size: 0.82rem;
        font-weight: 800;
        outline: none;
        cursor: pointer;
    }

    .language-switcher .goog-te-gadget,
    .language-switcher .goog-te-combo,
    .goog-te-banner-frame,
    iframe.skiptranslate {
        display: none !important;
    }

    body {
        top: 0 !important;
    }

    @media (max-width: 640px) {
        .language-switcher {
            left: 0.75rem;
            bottom: 0.75rem;
            max-width: calc(100vw - 1.5rem);
        }

        .language-switcher select {
            min-width: 7.75rem;
            font-size: 0.76rem;
        }
    }
</style>

<div id="google_translate_element" class="hidden"></div>

<label class="language-switcher" for="site-language-select">
    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 0 1 6.41 9m6.088 5.5A18.057 18.057 0 0 0 15 9m-7 11 4-9 4 9m-2.5-4h-3"/>
    </svg>
    <select id="site-language-select" aria-label="Change language">
        <option value="en">English</option>
        <option value="es">Spanish</option>
        <option value="fr">French</option>
        <option value="de">German</option>
        <option value="pt">Portuguese</option>
        <option value="ar">Arabic</option>
        <option value="zh-CN">Chinese</option>
        <option value="hi">Hindi</option>
        <option value="yo">Yoruba</option>
        <option value="ha">Hausa</option>
        <option value="ig">Igbo</option>
    </select>
</label>

<script>
    window.googleTranslateElementInit = function () {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,es,fr,de,pt,ar,zh-CN,hi,yo,ha,ig',
            autoDisplay: false
        }, 'google_translate_element');
    };

    document.addEventListener('DOMContentLoaded', () => {
        const select = document.getElementById('site-language-select');
        const preferredLanguage = localStorage.getItem('preferred_language') || 'en';

        if (!select) {
            return;
        }

        select.value = preferredLanguage;

        const setCookie = (name, value, days) => {
            const expires = new Date(Date.now() + days * 86400000).toUTCString();
            document.cookie = `${name}=${value};expires=${expires};path=/;SameSite=Lax`;
        };

        const clearCookie = (name) => {
            document.cookie = `${name}=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/`;
        };

        const applyLanguage = (language) => {
            localStorage.setItem('preferred_language', language);

            if (language === 'en') {
                clearCookie('googtrans');
                window.location.reload();
                return;
            }

            setCookie('googtrans', `/en/${language}`, 365);

            const googleSelect = document.querySelector('.goog-te-combo');
            if (googleSelect) {
                googleSelect.value = language;
                googleSelect.dispatchEvent(new Event('change'));
                return;
            }

            window.location.reload();
        };

        select.addEventListener('change', (event) => {
            applyLanguage(event.target.value);
        });
    });
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
