import { Swiper } from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

// Initialize Product Swiper
document.addEventListener('DOMContentLoaded', function() {

  const productSwiper = document.querySelector('[data-product-swiper]');

  if (productSwiper) {
    new Swiper(productSwiper, {
      modules: [Navigation],
      slidesPerView: 1,
      spaceBetween: 0,
      navigation: {
        nextEl: '.swiper-btn-product-next',
        prevEl: '.swiper-btn-product-prev',
      },
      speed: 400,
      effect: 'slide',
    });
  }
});
