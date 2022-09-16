const i18Obj = {
  'en': {
    'skills': 'Skills',
    'portfolio': 'Portfolio',
    'video': 'Video',
    'price': 'Price',
    'contacts': 'Contacts',
    'hero-title': 'Alexa Rise',
    'hero-text': 'Save sincere emotions, romantic feelings and happy moments of life together with professional photographer Alexa Rise',
    'hire': 'Hire me',
    'skill-title-1': 'Digital photography',
    'skill-text-1': 'High-quality photos in the studio and on the nature',
    'skill-title-2': 'Video shooting',
    'skill-text-2': 'Capture your moments so that they always stay with you',
    'skill-title-3': 'Rotouch',
    'skill-text-3': 'I strive to make photography surpass reality',
    'skill-title-4': 'Audio',
    'skill-text-4': 'Professional sounds recording for video, advertising, portfolio',
    'winter': 'Winter',
    'spring': 'Spring',
    'summer': 'Summer',
    'autumn': 'Autumn',
    'price-name-1': 'Standard',
    'price-name-2': 'Premium',
    'price-name-3': 'Gold',
    'price-description-1-span-1': 'One location',
    'price-description-1-span-2': '120 photos in color',
    'price-description-1-span-3': '12 photos in retouch',
    'price-description-1-span-4': 'Readiness 2-3 weeks',
    'price-description-1-span-5': 'Make up, visage',
    'price-description-2-span-1': 'One or two locations',
    'price-description-2-span-2': '200 photos in color',
    'price-description-2-span-3': '20 photos in retouch',
    'price-description-2-span-4': 'Readiness 1-2 weeks',
    'price-description-2-span-5': 'Make up, visage',
    'price-description-3-span-1': 'Three locations or more',
    'price-description-3-span-2': '300 photos in color',
    'price-description-3-span-3': '50 photos in retouch',
    'price-description-3-span-4': 'Readiness 1 week',
    'price-description-3-span-5': 'Make up, visage, hairstyle',
    'order': 'Order shooting',
    'contact-me': 'Contact me',
    'send-message': 'Send message',
    'phone': 'Phone',
    'mail': 'E-mail',
    'message': 'Message',
  },
  'ru': {
    'skills': 'Навыки',
    'portfolio': 'Портфолио',
    'video': 'Видео',
    'price': 'Цены',
    'contacts': 'Контакты',
    'hero-title': 'Алекса Райс',
    'hero-text': 'Сохраните искренние эмоции, романтические переживания и счастливые моменты жизни вместе с профессиональным фотографом',
    'hire': 'Пригласить',
    'skill-title-1': 'Фотография',
    'skill-text-1': 'Высококачественные фото в студии и на природе',
    'skill-title-2': 'Видеосъемка',
    'skill-text-2': 'Запечатлите лучшие моменты, чтобы они всегда оставались с вами',
    'skill-title-3': 'Ретушь',
    'skill-text-3': 'Я стремлюсь к тому, чтобы фотография превосходила реальность',
    'skill-title-4': 'Звук',
    'skill-text-4': 'Профессиональная запись звука для видео, рекламы, портфолио',
    'winter': 'Зима',
    'spring': 'Весна',
    'summer': 'Лето',
    'autumn': 'Осень',
    'price-name-1': 'Стандарт',
    'price-name-2': 'Премиум',
    'price-name-3': 'Золотой',
    'price-description-1-span-1': 'Одна локация',
    'price-description-1-span-2': '120 цветных фото',
    'price-description-1-span-3': '12 отретушированных фото',
    'price-description-1-span-4': 'Готовность через 2-3 недели',
    'price-description-1-span-5': 'Макияж, визаж',
    'price-description-2-span-1': 'Одна-две локации',
    'price-description-2-span-2': '200 цветных фото',
    'price-description-2-span-3': '20 отретушированных фото',
    'price-description-2-span-4': 'Готовность через 1-2 недели',
    'price-description-2-span-5': 'Макияж, визаж',
    'price-description-3-span-1': 'Три локации и больше',
    'price-description-3-span-2': '300 цветных фото',
    'price-description-3-span-3': '50 отретушированных фото',
    'price-description-3-span-4': 'Готовность через 1 неделю',
    'price-description-3-span-5': 'Макияж, визаж, прическа',
    'order': 'Заказать съемку',
    'contact-me': 'Свяжитесь со мной',
    'send-message': 'Отправить',
    'phone': 'Телефон',
    'mail': 'Почта',
    'message': 'Сообщение',
  }
}


function selfRating(){
    console.log("Вёрстка валидная +10\nВёрстка семантическая +20\nВыполнены все требования css +12\nИнтерактивность, реализуемая через CSS +15\n"
    );
}

selfRating();


(function () {
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.nav');
    burger.addEventListener('click', () =>{
        menu.classList.toggle('nav_active');
        burger.classList.toggle('burger_active');
    });
}());
const burger = document.querySelector('.burger');
const menu = document.querySelector('.nav');
const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach((el) => el.addEventListener('click', closeMenu));
function closeMenu(event) {
    if (event.target.classList.contains('nav-link')) {
        menu.classList.remove('nav_active');
        burger.classList.remove('burger_active');
    }
}

const portfolioImages = document.querySelectorAll('.portfolio-photo')
const portfolioBtns = document.querySelector('.portfolio-buttons');
const portfolioBtn = document.querySelectorAll('.portfolio-button-click');
function changeImage(event) {
    if (event.target.classList.contains('portfolio-button-click')) {
      portfolioBtn.forEach(item => {
        item.classList.remove('portfolio-button-click-active');
      });
      event.target.classList.add('portfolio-button-click-active');

      let season = event.target.dataset.season;
      portfolioImages.forEach((img, index) => {
        img.src = `assets/img/${season}/${index + 1}.jpg`;
        img.alt = `${season}-photo`;
      })
    }
  }
  portfolioBtns.addEventListener('click', event => {
    changeImage(event);
});

const seasons = ['winter', 'spring', 'summer', 'autumn'];
function preloadSummerImages() {
  seasons.forEach((value, index) => {
    const img = new Image();
    img.src = `./assets/img/${value}/${index + 1}.jpg`;
  })
}
preloadSummerImages();


const buttonMode = document.querySelector('.icon-mode');
const lightDarkTheme = ['.section-portfolio-theme', '.price-cards-color1', 'body', '.price-cards-color2', '.price-cards-color3', '.skill-cards-color1', '.skill-cards-color2', '.skill-cards-color3', '.skill-cards-color4'];

buttonMode.addEventListener('click', switchTheme);
function switchTheme() {
  lightDarkTheme.forEach((item) => {
    let elem = document.querySelector(item);
    elem.classList.toggle('light-theme')
  });
}

let language = 'en';
const lang = document.querySelector('.lang-switch');

lang.addEventListener('click', (e) => {
    if (e.target.classList.contains('lang-switch-button')) {
        language = e.target.dataset.language;
        getTranslate(language);
    }
})

function getTranslate(lang = 'en') {
    document.querySelectorAll("[data-i18n]").forEach((el) => {
        if (i18Obj[lang].hasOwnProperty([el.dataset.i18n])) {
            let text = (el.placeholder) ? 'placeholder' : 'textContent';
            el[text] = i18Obj[lang][el.dataset.i18n];
        }
    });
    document.querySelectorAll('.lang-switch-button').forEach((el) => {
        (el.dataset.i18n === lang) ? el.classList.add('active') : el.classList.remove('active');
    })
}

const vidWrapper = document.querySelector('div.player');
const myVid = vidWrapper.querySelector('video.player__video');


const controlPlay = vidWrapper.querySelector('.player__button');
const controlVol = vidWrapper.querySelector('.player__slider[name="volume"]');
const controlFullScreen = vidWrapper.querySelector('.player__fullscreen');
const controlProgress = vidWrapper.querySelector('.progress');
const progressBar = vidWrapper.querySelector('.progress__filled');


var drag;
var grap;

myVid.addEventListener('click', toggleVideo);
controlPlay.addEventListener('click', toggleVideo);
controlVol.addEventListener('change', updateVol);
controlFullScreen.addEventListener('click', goFullScreen);
controlProgress.addEventListener('mouseover', function(){drag = true});
controlProgress.addEventListener('mouseout', function(){drag = false; grap = false});
controlProgress.addEventListener('mousedown', function(){grap = drag});
controlProgress.addEventListener('mouseup', function(){grap = false});
controlProgress.addEventListener('click', updateCurrentPos);
controlProgress.addEventListener('mousemove', function(e){ if(drag && grap){updateCurrentPos(e)}});
var progression;

function toggleVideo() {
  if (myVid.paused) {
    buttonPlay.classList.add('video-button-active');
    myVid.play();
    controlPlay.innerHTML = "❚ ❚";
    updateProgress();
    progression = window.setInterval(updateProgress, 200);
  } else {
    buttonPlay.classList.remove('video-button-active')
    myVid.pause();
    controlPlay.innerHTML = "►";
    clearInterval(progression);
  };
}
function updateVol(){
  var volume = this.value;
  myVid.volume = volume;
}
function goFullScreen(){
  console.dir(myVid);
  if(myVid.webkitSupportsFullscreen) myVid.webkitEnterFullScreen();
}
function forward(){
  var value = Number(this.dataset.skip);
  myVid.currentTime = myVid.currentTime + value;
}
function updateProgress() {
  var progress = myVid.currentTime / myVid.duration;
  progressBar.style.flexBasis = Math.floor(progress * 1000) / 10 + '%';
}
function updateCurrentPos(e){
  var newProgress = (e.clientX - vidWrapper.offsetLeft) / vidWrapper.clientWidth;
  progressBar.style.flexBasis = Math.floor(newProgress * 1000) / 10 + '%';
  myVid.currentTime = newProgress * myVid.duration;
}

const buttonPlay = document.querySelector('.video-button')
