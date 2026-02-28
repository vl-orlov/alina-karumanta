<!-- HEADER -->
<div class="main_header" id="main_header">
  <div class="header_wrap" id="header_wrap">
    <button type="button" class="burger_btn" id="burger_btn" aria-label="Меню" aria-expanded="false" aria-controls="header_nav">
        <span class="burger_line"></span>
        <span class="burger_line"></span>
        <span class="burger_line"></span>
    </button>
    <nav class="header_nav" id="header_nav">
        <a onclick="window.location.href='index.php?page=about'" class="nav_link" data-i18n="nav_about">об авторе</a>
        <a onclick="window.location.href='index.php?page=books'" class="nav_link" data-i18n="nav_books">книги</a>
        <a href="#contacts" class="nav_link" data-i18n="nav_contacts">контакты</a>
    </nav>
    <div class="lang_selector" id="lang_selector" aria-label="Выбор языка">
        <span class="lang_current" id="current_lang">Русский</span>
        <svg class="lang_arrow" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
  </div>
</div>
<div class="mobile_menu_backdrop" id="mobile_menu_backdrop" aria-hidden="true"></div>
<!-- HEADER END -->

<!-- HERO -->
<div class="hero_section" aria-label="Главный экран">
    <div class="hero_bg" style="background-image: url('img/hero_background.png');"></div>
    <div class="hero_overlay"></div>
    <div class="hero_content">
        <h1 class="hero_title">Alina Karumanta</h1>
        <p class="hero_tagline" data-i18n="hero_tagline">Где заканчивается карта — начинаются мои истории</p>
        <a onclick="window.location.href='index.php?page=books'" class="hero_btn" data-i18n="hero_btn_books">ОТКРЫТЬ КНИГИ</a>
    </div>
</div>
<!-- HERO END -->

<!-- FOOTER -->
<?php include "includes/footer.php"; ?>
<!-- FOOTER END -->

<script>
(function() {
  var header = document.getElementById('main_header');
  var burger = document.getElementById('burger_btn');
  var nav = document.getElementById('header_nav');
  var backdrop = document.getElementById('mobile_menu_backdrop');
  if (!header || !burger || !nav || !backdrop) return;

  function openMenu() {
    header.classList.add('menu_open');
    burger.classList.add('is_open');
    burger.setAttribute('aria-expanded', 'true');
    backdrop.classList.add('is_open');
    backdrop.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }
  function closeMenu() {
    header.classList.remove('menu_open');
    burger.classList.remove('is_open');
    burger.setAttribute('aria-expanded', 'false');
    backdrop.classList.remove('is_open');
    backdrop.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
  function toggleMenu() {
    if (header.classList.contains('menu_open')) closeMenu();
    else openMenu();
  }

  burger.addEventListener('click', toggleMenu);
  backdrop.addEventListener('click', closeMenu);
  nav.querySelectorAll('.nav_link').forEach(function(link) {
    link.addEventListener('click', closeMenu);
  });
})();
</script>