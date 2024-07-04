export const initSlider = () => {
    const item = document.querySelector('.main-item');
        let swiper;
        if (item) {
            swiper = new Swiper(item, {
                // autoplay: {
                //     delay: 3000
                // },
                speed: 3000,
                effect: "fade",
                // direction: 'vertical',
                
                spaceBetween: 15,
                slidesPerView: 1,
                equalHeight: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                  },
              });
        }
}


export const initReviewsSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.review-item');
        let swiper;
        // console.log('Подключился')
        if (item) {
            
            swiper = new Swiper(item, {
                loop: true,
                // autoplay: {
                //     delay: 3000
                // },
                speed: 3000,
                direction: 'horizontal',
                spaceBetween: 5,
                // equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".review-next",
                    prevEl: ".review-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    695: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    767: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween:10
                    }
                    }
            });
        }
    };

    itemSlider();
}


export const initGeneralSlider1 = () => {
    const generalSlider = document.querySelector('.popular-items-1');

    if (generalSlider) {

        const swiper = new Swiper(generalSlider, {
            slidesPerView: 2,
            spaceBetween: 15,
            navigation: {
                nextEl: '.next-popular-item',
                prevEl: '.prev-popular-item',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 15
                },
                460: {
                    slidesPerView: 1,
                    spaceBetween: 15
                },
                767: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                    
                },
                1023: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                   
                },
            }
        });
    }
}
export const initGeneralSlider2 = () => {
    const generalSlider = document.querySelector('.popular-items-2');

    if (generalSlider) {

        const swiper = new Swiper(generalSlider, {
            slidesPerView: 2,
            spaceBetween: 15,
            loop: true,
            navigation: {
                nextEl: '.next-popular-item',
                prevEl: '.prev-popular-item',
            },

            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 15
                },
                460: {
                    slidesPerView: 1,
                    spaceBetween: 15
                },
                767: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                    
                },
                1023: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                   
                },
            }
        });
    }
}
export const initGeneralSlider3 = () => {
    const generalSlider = document.querySelector('.popular-items-3');

    if (generalSlider) {

        const swiper = new Swiper(generalSlider, {
            slidesPerView: 2,
            spaceBetween: 15,
            navigation: {
                nextEl: '.next-popular-item',
                prevEl: '.prev-popular-item',
            },

            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 15
                },
                460: {
                    slidesPerView: 1,
                    spaceBetween: 15
                },
                767: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                    
                },
                1023: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                   
                },
            }
        });
    }
}

export const initCardItemSlider = function initCardItemSlider() {
 
    var swiper = new Swiper('.slider__thumb', {
      loop: true,
      spaceBetween: 16,
      direction: 'vertical',

      
      watchSlidesProgress: true,
      autoHeight: true,
      breakpoints: {
        320: {
          slidesPerView: 4,
          spaceBetween: 8,
          direction: 'horizontal',
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 16,
          direction: 'horizontal',
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 16
        },
        1920: {
          slidesPerView: 4,
          spaceBetween: 16
        }
      }
      
    }); 
  
    var swiper2 = new Swiper('.slider__slider', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      thumbs: {
  
        swiper: swiper
      }
    });
  
    var swiper3 = new Swiper('.recommendation', {
      spaceBetween: 16,
      slidesPerView: 2,
      breakpoints: {
        320: {
          slidesPerView: 1.5,
          spaceBetween: 8
        },
        768: {
          slidesPerView: 2.5,
          spaceBetween: 16
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 16
        },
        1920: {
          slidesPerView: 6,
          spaceBetween: 16
        }
      }
    });
  };