 var mySwiper = new Swiper('.swiper-container', {
     direction: 'horizontal',
     setWrapperSize: true,
     loop: false,
     preloadImages: true,
     effect: 'fade',
     crossFade: true,
     pagination: {
         el: '.swiper-pagination',
         dynamicBullets: true,
     },
     navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
     },
     scrollbar: {
         el: '.swiper-scrollbar',
     },
 })
