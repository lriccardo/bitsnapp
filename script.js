 var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    setWrapperSize: true,
     loop: false,
     preloadImages: true,
     
 effect: 'fade',
     crossFade: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
        dynamicBullets: true,
        
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })