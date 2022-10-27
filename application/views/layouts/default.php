<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./normalize.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="icon" href="assets/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <title>portfolio</title>
</head>
<body>
<header class="header-container container">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="/" class="logo-link">
                    <img src="/assets/svg/logo.svg" alt="logo" class="logo-pic">
                </a>
            </div>
            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="#skills" class="nav-link" data-i18n="skills">Skills</a></li>
                    <li class="nav-item"><a href="#portfolio" class="nav-link" data-i18n="portfolio">Portfolio</a></li>
                    <li class="nav-item"><a href="#video" class="nav-link" data-i18n="video">Video</a></li>
                    <li class="nav-item"><a href="#price" class="nav-link" data-i18n="price">Price</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link" data-i18n="contacts">Contacts</a></li>
                </ul>
            </nav>
            <div class="lang-switch">
                <button type="button" class="lang-switch-button" data-language="en" data-i18n="en">en</button>
                <a class="space-switch">/</a>
                <button type="button" class="lang-switch-button" data-language="ru" data-i18n="ru">ru</button>
            </div>
            <div class="mode">
                <button class="icon-mode"><img src="./assets/svg/mode.svg" alt="dark-light-mode"></button>
            </div>
            <div class="header-burger burger">
                <span class="burger-line burger-line-first"></span>
                <span class="burger-line burger-line-second"></span>
                <span class="burger-line burger-line-third"></span>
                <span class="burger-line burger-line-fourth"></span>
            </div>
        </div>
    </div>
</header>
<?php echo $content; ?>
<footer class="footer">
    <div class="container">
        <div class="footer-block">
            <div class="copywrite-block">
                <a class="copywrite"><img src="./assets/svg/copywrite.svg" alt="copywrite"></a>
                <a class="year">2022</a>
                <a class="github" href="https://github.com/RuslanBy">github</a>
            </div>
            <div class="rs-school">
                <a class="rs-school-link" href="https://rs.school/js-stage0/">Rolling Scopes School</a>
            </div>
            <div class="svg-links">
                <img src="./assets/svg/inst.svg" alt="inst" class="inst">
                <img src="./assets/svg/fb.svg" alt="facebook" class="facebook">
                <img src="./assets/svg/tw.svg" alt="twitter" class="twitter">
                <img src="./assets/svg/pinterest.png" alt="pinterest" class="pinterest">
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="./index.js"></script>
</body>
</html>