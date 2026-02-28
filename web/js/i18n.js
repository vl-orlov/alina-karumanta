const supportedLangs = ['ru', 'en', 'es'];
const langLabels = { ru: 'Русский', en: 'English', es: 'Español' };

async function setLang(page, lang) {
  const currentLangEl = document.getElementById('current_lang');
  if (currentLangEl) {
    currentLangEl.textContent = langLabels[lang] || lang;
  }
  document.documentElement.lang = lang === 'en' ? 'en' : lang === 'es' ? 'es' : 'ru';
  localStorage.setItem('lang', lang);

  try {
    const url = `lang/${page}/${lang}.json`;
    const res = await fetch(url);

    if (!res.ok) {
      throw new Error(`Failed to load ${url}, status ${res.status}`);
    }

    const dict = await res.json();
    document.querySelectorAll('[data-i18n]').forEach(el => {
      const key = el.getAttribute('data-i18n');
      if (dict[key]) {
        el.textContent = dict[key];
      }
    });
    document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
      const key = el.getAttribute('data-i18n-placeholder');
      if (dict[key]) {
        el.setAttribute('placeholder', dict[key]);
      }
    });
    document.querySelectorAll('[data-i18n-html]').forEach(el => {
      const key = el.getAttribute('data-i18n-html');
      if (dict[key]) {
        el.innerHTML = dict[key];
      }
    });

  } catch (err) {
    console.error(`Language load error for ${lang}:`, err);
  }
}

function initLang(page = 'landing', defaultLang = 'ru') {
  const storedLang = localStorage.getItem('lang');
  const browserLang = (navigator.language || '').split('-')[0];

  const lang = storedLang && supportedLangs.includes(storedLang)
    ? storedLang
    : (supportedLangs.includes(browserLang) ? browserLang : defaultLang);

  setLang(page, lang);
}

function setupLangDropdown(page) {
  const selector = document.getElementById('lang_selector');
  if (!selector) return;

  let dropdown = document.getElementById('lang_dropdown');
  if (!dropdown) {
    dropdown = document.createElement('div');
    dropdown.id = 'lang_dropdown';
    dropdown.className = 'lang_dropdown';
    supportedLangs.forEach(lang => {
      const opt = document.createElement('button');
      opt.type = 'button';
      opt.className = 'lang_option';
      opt.dataset.lang = lang;
      opt.textContent = langLabels[lang];
      dropdown.appendChild(opt);
    });
    selector.style.position = 'relative';
    selector.appendChild(dropdown);
  }

  function closeDropdown() {
    selector.classList.remove('is_open');
    dropdown.classList.remove('is_open');
    document.removeEventListener('click', closeDropdown);
  }

  selector.addEventListener('click', function(e) {
    e.stopPropagation();
    var open = dropdown.classList.toggle('is_open');
    selector.classList.toggle('is_open', open);
    if (open) {
      requestAnimationFrame(() => document.addEventListener('click', closeDropdown));
    } else {
      closeDropdown();
    }
  });

  dropdown.querySelectorAll('.lang_option').forEach(function(opt) {
    opt.addEventListener('click', function(e) {
      e.stopPropagation();
      var lang = this.dataset.lang;
      setLang(page, lang);
      closeDropdown();
    });
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', function() {
    const page = document.body.dataset.i18nPage || 'landing';
    initLang(page, 'ru');
    setupLangDropdown(page);
  });
} else {
  const page = document.body.dataset.i18nPage || 'landing';
  initLang(page, 'ru');
  setupLangDropdown(page);
}
