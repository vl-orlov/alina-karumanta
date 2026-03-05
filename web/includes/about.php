<!-- HEADER -->
<div class="main_header" id="main_header">
    <div class="header_wrap" id="header_wrap">
        <button type="button" class="burger_btn" id="burger_btn" aria-label="Меню" aria-expanded="false" aria-controls="header_nav">
            <span class="burger_line"></span>
            <span class="burger_line"></span>
            <span class="burger_line"></span>
        </button>
        <nav class="header_nav header_nav_green" id="header_nav">
            <a href="index.php?page=about" class="nav_link nav_link_white nav_link_active" data-i18n="nav_about">об авторе</a>
            <a href="index.php?page=books" class="nav_link nav_link_white" data-i18n="nav_books">Книги</a>
            <a href="index.php?page=about#contacts" class="nav_link nav_link_white" data-i18n="nav_contacts">Контакты</a>
        </nav>
        <a href="index.php" class="header_back_btn" aria-label="Назад">
            <svg class="header_back_icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            <span class="header_back_text" data-i18n="nav_back">Назад</span>
        </a>
        <div class="lang_selector" id="lang_selector" aria-label="Выбор языка">
            <span class="lang_current" id="current_lang">Русский</span>
            <svg class="lang_arrow" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</div>
<!-- HEADER END -->
<div class="mobile_menu_backdrop" id="mobile_menu_backdrop" aria-hidden="true"></div>

<!-- ABOUT -->
<div class="about_section" aria-label="Об авторе">
    <div class="about_bg"></div>
    <div class="about_leaves" style="background-image: url('img/leaves.png');" aria-hidden="true"></div>
    <div class="about_leaves2" style="background-image: url('img/leaves.png');" aria-hidden="true"></div>
    <div class="about_container">
        <div class="about_block about_block_1">
            <div class="about_text">
                <p class="about_p" data-i18n="about_p1">Каруманта — имя, полученное мною на церемонии Огня в колумбийских джунглях Путумайо.</p>
                <p class="about_p" data-i18n="about_p2">«Каруманта» означает «издалека». И правда — для этих земель я пришла издалека: с Уральских гор, где стоят густые леса, где горные реки поят холодной водой, где до сих пор дышат легенды моего народа.</p>
            </div>
            <div class="about_img_wrap about_img_right">
                <img src="img/about/karumanta1.jpeg" class="about_img">
            </div>
        </div>
        <div class="about_block about_block_2">
            <div class="about_img_wrap about_img_left">
                <img src="img/about/karumanta2.jpeg" class="about_img">
            </div>
            <div class="about_text">
                <p class="about_p" data-i18n="about_p3">С детства я мечтала путешествовать по далёким землям и писать книги. Я выросла в маленьком селе, где мир казался тесным, но стоило открыть книгу — и границы исчезали. Истории были моими проводниками, друзьями, дорогами в другие миры. Перевернув страницу, я отправлялась в путь без билетов, без границ.</p>
                <p class="about_p" data-i18n="about_p4">И однажды поняла: именно такие книги я хочу создавать сама — те, что уносят далеко, но возвращают человека чуть более живым, чем прежде.</p>
            </div>
        </div>

        <div class="about_block">
            <div class="about_text">
                <p class="about_p" data-i18n="about_p5">Когда-то, ещё ребёнком, я дала себе клятву: однажды отправлюсь в странствие по джунглям с одним рюкзаком за плечами. Но круговорот жизни закрутил меня, и эта клятва затерялась среди повседневности.</p>
                <p class="about_p" data-i18n="about_p6">Я жила, училась в Нью-Йорке, шла дорогами большого мира — и всё дальше уходила от той девочки, которая мечтала о диких тропах и далёких горизонтах.</p>
            </div>
            <div class="about_img_wrap">
                <img src="img/about/karumanta3.jpeg" class="about_extra_img">
            </div>
        </div>

        <p class="about_extra_text_bottom" data-i18n="about_p7">И всё же мечты умеют ждать. Они не исчезают — они становятся дорогой, которая однажды всё равно находит тебя.</p>
        <a href="#" class="about_extra_btn" target="_blank" rel="noopener">
            <span class="about_extra_btn_inner" data-i18n="about_btn_instagram">перейти в инстаграмм</span>
            <img src="img/icons/instagram_icon.png" alt="" class="about_extra_btn_icon" aria-hidden="true">
        </a>
    </div>

    <div class="about_feed">
        <div class="about_feed_vine" style="background-image: url('img/leaves.png');" aria-hidden="true"></div>
        <div class="about_feed_inner">
            <div class="about_feed_profile">
                <img src="img/about/karumanta1.png" alt="" class="about_feed_avatar" width="90" height="90">
                <div class="about_feed_info">
                    <span class="about_feed_handle" data-i18n="about_instagram_handle">@govorim_svobodno</span>
                    <p class="about_feed_bio" data-i18n="about_instagram_bio">моменты жизни, Латинская Америка — Россия.</p>
                </div>
            </div>
            <div class="about_feed_grid">
                <div class="about_feed_photo"><span class="about_feed_photo_label" data-i18n="about_photo_placeholder">ФОТО</span></div>
                <div class="about_feed_photo"><span class="about_feed_photo_label" data-i18n="about_photo_placeholder">ФОТО</span></div>
                <div class="about_feed_photo"><span class="about_feed_photo_label" data-i18n="about_photo_placeholder">ФОТО</span></div>
                <div class="about_feed_photo"><span class="about_feed_photo_label" data-i18n="about_photo_placeholder">ФОТО</span></div>
                <div class="about_feed_photo"><span class="about_feed_photo_label" data-i18n="about_photo_placeholder">ФОТО</span></div>
                <div class="about_feed_photo"><span class="about_feed_photo_label" data-i18n="about_photo_placeholder">ФОТО</span></div>
                <div class="about_feed_photo"><span class="about_feed_photo_label" data-i18n="about_photo_placeholder">ФОТО</span></div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT END -->

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
    header.classList.add('menu_open_green');
    burger.classList.add('is_open');
    backdrop.classList.add('is_open');
    document.body.style.overflow = 'hidden';
  }
  function closeMenu() {
    header.classList.remove('menu_open_green');
    burger.classList.remove('is_open');
    backdrop.classList.remove('is_open');
    document.body.style.overflow = '';
  }
  burger.addEventListener('click', function() { header.classList.contains('menu_open_green') ? closeMenu() : openMenu(); });
  backdrop.addEventListener('click', closeMenu);
  nav.querySelectorAll('.nav_link').forEach(function(link) { link.addEventListener('click', closeMenu); });
})();
</script>
