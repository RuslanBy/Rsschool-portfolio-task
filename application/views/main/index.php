<main class="main">
    <div class="container">
        <section class="hero-container" id="hero">
            <h1 data-i18n="hero-title">Alexa Rise</h1>
            <p class="hero-text" data-i18n="hero-text">Save sincere emotions, romantic feelings and happy moments of life together with professional photographer Alexa Rise</p>
            <button type="button" class="button-hire" data-i18n="hire">Hire me</button>
        </section>
        <section class="section section-skills-theme" id="skills">
            <div class="title">
                <h2 class="section-title" data-i18n="skills">Skills</h2>
            </div>
            <div class="skill-section">
                <div class="skills-cards skill-cards-color1">
                    <div class="skills-cards-pic">
                        <img src="./assets/svg/camera.svg" alt="Digital photography" class="skills-cards-thumb">
                    </div>
                    <h3 class="skills-cards-title" data-i18n="skill-title-1">
                        Digital photography
                    </h3>
                    <p class="skills-cards-desc" data-i18n="skill-text-1">High-quality photos in the studio and on the nature</p>
                </div>
                <div class="skills-cards skill-cards-color2">
                    <div class="skills-cards-pic">
                        <img src="./assets/svg/video.svg" alt="Video shooting" class="skills-cards-thumb">
                    </div>
                    <h3 class="skills-cards-title" data-i18n="skill-title-2">
                        Video shooting
                    </h3>
                    <p class="skills-cards-desc" data-i18n="skill-text-2">Capture your moments so that they always stay with you</p>
                </div>
                <div class="skills-cards skill-cards-color3">
                    <div class="skills-cards-pic">
                        <img src="./assets/svg/image.svg" alt="Retouch" class="skills-cards-thumb">
                    </div>
                    <h3 class="skills-cards-title" data-i18n="skill-title-3">
                        Retouch
                    </h3>
                    <p class="skills-cards-desc" data-i18n="skill-text-3">I strive to make photography surpass reality</p>
                </div>
                <div class="skills-cards skill-cards-color4">
                    <div class="skills-cards-pic">
                        <img src="./assets/svg/mic.svg" alt="Audio" class="skills-cards-thumb">
                    </div>
                    <h3 class="skills-cards-title" data-i18n="skill-title-4">
                        Audio
                    </h3>
                    <p class="skills-cards-desc" data-i18n="skill-text-4">Professional sounds recording for video, advertising, portfolio</p>
                </div>
            </div>
        </section>
        <section class="section section-portfolio-theme" id="portfolio">
            <div class="title">
                <h2 class="section-title" data-i18n="portfolio">Portfolio</h2>
            </div>
            <div class="portfolio-buttons">
                <button type="button" class="portfolio-button-click" data-season="winter" data-i18n="winter">Winter</button>
                <button type="button" class="portfolio-button-click" data-season="spring" data-i18n="spring">Spring</button>
                <button type="button" class="portfolio-button-click" data-season="summer" data-i18n="summer">Summer</button>
                <button type="button" class="portfolio-button-click portfolio-button-click-active" data-season="autumn" data-i18n="autumn">Autumn</button>
            </div>
            <div class="portfolio-img">
                <img src="./assets/img/autumn/1.jpg" alt="Portfolio image 1" class="portfolio-photo">
                <img src="./assets/img/autumn/2.jpg" alt="Portfolio image 2" class="portfolio-photo">
                <img src="./assets/img/autumn/3.jpg" alt="Portfolio image 3" class="portfolio-photo">
                <img src="./assets/img/autumn/4.jpg" alt="Portfolio image 4" class="portfolio-photo">
                <img src="./assets/img/autumn/5.jpg" alt="Portfolio image 5" class="portfolio-photo">
                <img src="./assets/img/autumn/6.jpg" alt="Portfolio image 6" class="portfolio-photo">
            </div>
        </section>
        <section class="section section-video-theme" id="video">
            <div class="title">
                <h2 class="section-title" data-i18n="video">Video</h2>
            </div>
            <div class="video-player">
                <button onclick=toggleVideo() class="video-button"><img src="./assets/svg/Play_hover.svg" alt="Video button"></button>
                <div class="player">
                    <video class="player__video viewer" poster="./assets/img/video-player.jpg" src="./assets/video/video.mp4" ></video>
                    <div class="player__controls">
                        <div class="progress">
                            <div class="progress__filled"></div>
                        </div>
                        <button class="player__button toggle" title="Toggle Play">►</button>
                        <input type="range" name="volume" class="player__slider" min="0" max="1" step="0.05" value="1">
                        <button class="player__button player__fullscreen">⧉</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-price-theme" id="price">
            <div class="title">
                <h2 class="section-title" data-i18n="price">Price</h2>
            </div>
            <div class="price-block">
                <div class="price-cards price-cards-color1">
                    <span class="span-price-name" data-i18n="price-name-1">Standard</span>
                    <span class="span-price-count">500 $</span>
                    <span class="span-price-desc" data-i18n="price-description-1-span-1">One location</span>
                    <span class="span-price-desc" data-i18n="price-description-1-span-2">120 photos in color</span>
                    <span class="span-price-desc" data-i18n="price-description-1-span-3">12 photos in retouch</span>
                    <span class="span-price-desc" data-i18n="price-description-1-span-4">Readiness 2-3 weeks</span>
                    <span class="span-price-desc" data-i18n="price-description-1-span-5">Make up, visage</span>
                    <button type="button" onclick="document.location='/contact'" class="price-button" data-i18n="order">Order shooting</button>
                </div>
                <div class="price-cards price-cards-color2">
                    <span class="span-price-name" data-i18n="price-name-2">Premium</span>
                    <span class="span-price-count">700 $</span>
                    <span class="span-price-desc" data-i18n="price-description-2-span-1">One or two locations</span>
                    <span class="span-price-desc" data-i18n="price-description-2-span-2">200 photos in colorr</span>
                    <span class="span-price-desc" data-i18n="price-description-2-span-3">20 photos in retouch</span>
                    <span class="span-price-desc" data-i18n="price-description-2-span-4">Readiness 1-2 weeks</span>
                    <span class="span-price-desc" data-i18n="price-description-2-span-5">Make up, visage</span>
                    <button type="button" onclick="document.location='/contact'" class="price-button" data-i18n="order">Order shooting</button>
                </div>
                <div class="price-cards price-cards-color3">
                    <span class="span-price-name" data-i18n="price-name-3">Gold</span>
                    <span class="span-price-count">1000 $</span>
                    <span class="span-price-desc" data-i18n="price-description-3-span-1">Three locations or more</span>
                    <span class="span-price-desc" data-i18n="price-description-3-span-2">300 photos in color</span>
                    <span class="span-price-desc" data-i18n="price-description-3-span-3">50 photos in retouch</span>
                    <span class="span-price-desc" data-i18n="price-description-3-span-4">Readiness 1 week</span>
                    <span class="span-price-desc" data-i18n="price-description-3-span-5">Make up, visage, hairstyle</span>
                    <button type="button" onclick="document.location='/contact'" class="price-button" data-i18n="order">Order shooting</button>
                </div>
            </div>
        </section>
    </div>
</main>
