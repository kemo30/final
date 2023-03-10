if (document.querySelector('[data-aos]')) {
  AOS.init();
}


if (document.querySelector('.loading-div')) {
  const UIloadingDiv = document.querySelector('.loading-div');
  window.addEventListener('load', () => {
    setTimeout(() => {
      UIloadingDiv.remove();
    }, 2000);
  });
}

// handle header md
const UIlines = document.querySelector('.lines');
const UImainHeaderMdUlDiv = document.querySelector('.main-header-md-ul-div');

UIlines.addEventListener('click', e => {
  UIlines.classList.toggle('is-active');
  UImainHeaderMdUlDiv.classList.toggle('toggle-main-header-md-ul-div');
});
document.addEventListener('click', e => {
  if (e.target.classList.contains('main-header-md-ul-div')) {
    UIlines.classList.remove('is-active');
    UImainHeaderMdUlDiv.classList.remove('toggle-main-header-md-ul-div');
  }
});

// handle main sidebar drop links
const UIdropLinks = document.querySelectorAll('.drop-a');
for (let dropA of UIdropLinks) {
  dropA.addEventListener('click', e => {
    for (let n of UIdropLinks) {
      n.nextElementSibling.style.height = 0 + 'px';
      n.classList.remove('toggle-drop-a');
    }
    let calcHeight = 0;
    let calcParentHeight = 0;
    let calcGrandParentHeight = 0;
    for (let ele of dropA.nextElementSibling.children) {
      calcHeight += ele.children[0].offsetHeight;
    }

    if (dropA.nextElementSibling.offsetHeight === 0) {
      dropA.nextElementSibling.style.height = calcHeight + 'px';
      dropA.classList.add('toggle-drop-a');
      if (dropA.parentElement.parentElement.classList.contains('dropped-ul')) {
        for (let parentLi of dropA.parentElement.parentElement.children) {
          calcParentHeight += parentLi.children[0].offsetHeight;
        }
        // if the grand parent element has a dropped-ul class
        // then set the garnd parent height to the dropped ul plus the grand parent direct children height
        dropA.parentElement.parentElement.style.height = calcParentHeight + calcHeight + 'px';
        // dropA.parentElement.parentElement.parentElement.classList.add('toggle-drop-a');
        dropA.parentElement.parentElement.parentElement.children[0].classList.add('toggle-drop-a');
      }

      if (dropA.parentElement.parentElement.parentElement.parentElement.classList.contains('dropped-ul')) {
        for (let grandLi of dropA.parentElement.parentElement.parentElement.parentElement.children) {
          calcGrandParentHeight += grandLi.children[0].offsetHeight;
        }
        dropA.parentElement.parentElement.parentElement.parentElement.style.height = calcGrandParentHeight + calcHeight + 'px';
        dropA.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].classList.add('toggle-drop-a');
      }
    } else {
      dropA.nextElementSibling.style.height = 0 + 'px';
      dropA.classList.remove('toggle-drop-a');
      if (dropA.parentElement.parentElement.classList.contains('dropped-ul')) {
        // if the garnd element has a dropped-ul class
        // then set the grand parent height to its direct children height only
        for (let parentLi of dropA.parentElement.parentElement.children) {
          calcParentHeight += parentLi.children[0].offsetHeight;
        }
        dropA.parentElement.parentElement.style.height = calcParentHeight + 'px';
        dropA.parentElement.parentElement.parentElement.children[0].classList.add('toggle-drop-a');
      }

      if (dropA.parentElement.parentElement.parentElement.parentElement.classList.contains('dropped-ul')) {
        for (let grandLi of dropA.parentElement.parentElement.parentElement.parentElement.children) {
          calcGrandParentHeight += grandLi.children[0].offsetHeight;
        }
        dropA.parentElement.parentElement.parentElement.parentElement.style.height = calcGrandParentHeight + 'px';
        dropA.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].classList.add('toggle-drop-a');
      }
    }
    e.preventDefault();
  });
}



// handle scrolling
const UIheaderLg = document.querySelector('.header-lg');
const UIheaderMd = document.querySelector('.header-md');
window.addEventListener('scroll', () => {
  if (window.scrollY >= 200) {
    setTimeout(() => {
      UIheaderMd.classList.add('toggle-header-md');
      UIheaderLg.classList.add('toggle-header-lg');
    }, 200);
  } else {
    setTimeout(() => {
      UIheaderMd.classList.remove('toggle-header-md');
      UIheaderLg.classList.remove('toggle-header-lg');
    }, 200);
  }
});

// home main slider

var mainHomeSLider = new Swiper('.home-main-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1600,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  loop: true,
  // autoplay: {
  //   delay: 4000,
  //   disableOnInteraction: false,
  // },
  navigation: {
    nextEl: '.home-main-slider-next',
    prevEl: '.home-main-slider-prev',
  },
  pagination: {
    el: '.home-main-slider-pagination',
    clickable: true
  },
  breakpoints: {
    767: {
      navigation: false
    }
  },
});

// home services slider
var homeServicesSlider = new Swiper('.home-services-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1600,
  loop: true,
  slidesPerView: 4,
  spaceBetween: 32,
  breakpoints: {
    1400: {
      slidesPerView: 3,
      spaceBetween: 32,
    },
    1200: {
      slidesPerView: 2,
      spaceBetween: 30,
    },

    767: {
      slidesPerView: 1,
      spaceBetween: 30,
    }
  },

  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.home-services-slider-next',
    prevEl: '.home-services-slider-prev',
  }
});


// testmonials slider
if (document.querySelector('.testimonials-slick-slider')) {
  $('.testimonials-slick-slider').slick({
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 3,
    infinite: true,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    focusOnSelect: true,
    responsive: [{
        breakpoint: 992,
        settings: {
          dots: true,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 3000,
          infinite: true,
          centerMode: true,
          // centerPadding: '42px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots: true,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 3000,
          infinite: true,
          centerMode: true,
          // centerPadding: '32px',
          slidesToShow: 1
        }
      }
    ]
  });
}


// home clients slider
var homeClientsSlider = new Swiper('.home-clients-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1000,
  loop: true,
  slidesPerView: 5,
  // spaceBetween: 40,
  breakpoints: {
    1199: {
      slidesPerView: 3,
      // spaceBetween: 30,
    },

    767: {
      slidesPerView: 2,
      // spaceBetween: 30,
    }
  },

  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },
  // navigation: {
  //   nextEl: '.clients-slider-next',
  //   prevEl: '.clients-slider-prev',
  // },
  // pagination: {
  //   el: '.clients-slider-pagination',
  //   clickable: true
  // }
});

// home gallery section

if (document.querySelector('.home-light-gallery')) {
  lightGallery(document.querySelector('.home-light-gallery'), {
    thumbnail: true
  });
}

// doctors slider
if (document.querySelector('.doctors-slick-slider')) {
  $('.doctors-slick-slider').slick({});
}



// faqs section
const UIquestions = document.querySelectorAll('.question-div');
const UIanswers = document.querySelectorAll('.answer-div');
for (let a of UIanswers) {
  a.style.height = 0 + 'px';
}
UIquestions.forEach(q => {
  q.addEventListener('click', e => {
    let answerHeight = 0;
    for (let ele of q.nextElementSibling.children) {
      answerHeight += ele.offsetHeight;
    }
    if (e.currentTarget.nextElementSibling.offsetHeight === 0) {
      UIquestions.forEach(qq => {
        qq.nextElementSibling.style.height = 0 + 'px';
        qq.parentElement.classList.remove('toggle-q-a-li');
      })
      e.currentTarget.nextElementSibling.style.height = answerHeight + 'px';
    } else {
      e.currentTarget.nextElementSibling.style.height = 0 + 'px';
    }
    e.currentTarget.parentElement.classList.toggle('toggle-q-a-li');
  });
});



//////////////////////////////////////////////////////////////
if (document.querySelector('.about-drop-div')) {
  const UIaboutDropDivs = document.querySelectorAll('.about-drop-div');
  const UIaboutImages = document.querySelectorAll('.images-wrapper>ul>li');

  // open the first dropped ul
  const firstDropped = UIaboutDropDivs[0].nextElementSibling;
  let initialHeight = 0;
  for (let k of firstDropped.children) {
    initialHeight += k.offsetHeight;
  }
  firstDropped.style.height = initialHeight + 'px';
  firstDropped.parentElement.classList.add('toggle-drop-li');
  for (let dropDiv of UIaboutDropDivs) {
    dropDiv.addEventListener('click', (e) => {
      // reset all the dropped ul height to zero
      for (let ele of UIaboutDropDivs) {
        ele.nextElementSibling.style.height = 0 + 'px';
        ele.parentElement.classList.remove('toggle-drop-li');
      }
      // remove all the active image li
      for (let ele of UIaboutImages) {
        ele.classList.remove('active-li-img');
      }
      // calc the height of the dropped ul and set its height
      let calcDroppedHeight = 0;
      for (let h of dropDiv.nextElementSibling.children) {
        calcDroppedHeight += h.offsetHeight;
        if (dropDiv.nextElementSibling.offsetHeight === 0) {
          dropDiv.nextElementSibling.style.height = calcDroppedHeight + 'px';
          dropDiv.parentElement.classList.add('toggle-drop-li');
        } else {
          dropDiv.nextElementSibling.style.height = 0 + 'px';
          dropDiv.parentElement.classList.remove('toggle-drop-li');
        }
      }
      const toBeActiveImage = document.querySelector(`.images-wrapper .${dropDiv.dataset.img}`)
      toBeActiveImage.classList.add('active-li-img');
    });
  }
}
//////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////
// counter up section
if (document.querySelector('.counter-number')) {
  $('.counter-number').counterUp({
    delay: 10,
    time: 2000
  });
}
// end counter up section
//////////////////////////////////////////////////////////////////

// handle trim servcie text

function myTrim(UIele) {
  return UIele.textContent.replace(/^\s+|\s+$/gm, ' ').trim();
}

function trimText(UIele, charCount) {
  let myString = myTrim(UIele).split(' ');
  return myString.splice(0, charCount).join(' ') + '...';
}


if (document.querySelector('.blogs-section')) {
  const newsText = document.querySelectorAll('.news-text p');
  for (let t of newsText) {
    t.textContent = trimText(t, 12);
  }
}

if (document.querySelector('.upcoming-events-section')) {
  const UIeventsText = document.querySelectorAll('.event-details .text p');
  for (let ele of UIeventsText) {
    ele.textContent = trimText(ele, 12);
  }
}


$(function () {
  $("#datepicker").datepicker();
});


// handle form div
if (document.querySelector('.appointment-form')) {
  const UIformDivs = document.querySelectorAll('.appointment-form .form-div');
  UIformDivs.forEach(d => {
    d.addEventListener('click', (e) => {
      for (let k of UIformDivs) {
        k.classList.remove('toggle-form-div');
      }
      d.classList.add('toggle-form-div');
    });
  });

  document.addEventListener('click', (e) => {
    if (!e.target.parentElement.classList.contains('toggle-form-div')) {
      UIformDivs.forEach(ele => {
        ele.classList.remove('toggle-form-div');
      })
    }
  })
}
if (document.querySelector('.service-appointment-form')) {
  const UIformDivs = document.querySelectorAll('.service-appointment-form .form-div');
  UIformDivs.forEach(d => {
    d.addEventListener('click', (e) => {
      for (let k of UIformDivs) {
        k.classList.remove('toggle-form-div');
      }
      d.classList.add('toggle-form-div');
    });
  });

  document.addEventListener('click', (e) => {
    if (!e.target.parentElement.classList.contains('toggle-form-div')) {
      UIformDivs.forEach(ele => {
        ele.classList.remove('toggle-form-div');
      })
    }
  })
}

// handle upload property images
if (document.querySelector('.carrers-page')) {
  const UIupload = document.querySelector('input[type="file"]');
  const UIUploadLabel = document.querySelector('label[for="file"]');
  UIupload.addEventListener('change', handleFiles);

  function handleFiles() {
    const files = this.files;
    const fileNames = [];
    for (let i = 0; i < files.length; i++) {
      fileNames.push(files[i].name);
    }
    const fileNamesString = fileNames.join(' & ');
    UIUploadLabel.textContent = fileNamesString;
  }
}
// end handle upload property images



// handle hover on news li
if (document.querySelector('.news-li')) {
  const UInewslinks = document.querySelectorAll('.news-a');
  for (let a of UInewslinks) {
    a.addEventListener('mouseenter', () => {
      a.parentElement.classList.add('toggle-news-card');
    })

    a.addEventListener('mouseleave', () => {
      a.parentElement.classList.remove('toggle-news-card');
    })
  }
}



// handle pagination
if (document.querySelector('.pagination-ul')) {
  const UIpaginationUl = document.querySelector('.pagination-ul');
  for (let page of UIpaginationUl.children) {
    page.children[0].addEventListener('click', (e) => {
      for (let p of UIpaginationUl.children) {
        p.children[0].classList.remove('active-page');
      }
      const UIprevPage = document.querySelector('.pagination-ul li:first-of-type a');
      const UInextPage = document.querySelector('.pagination-ul li:last-of-type a');
      page.children[0].classList.add('active-page');
      if (UIprevPage.classList.contains('active-page') ||
        UInextPage.classList.contains('active-page')) {
        page.children[0].classList.remove('active-page');
      }
      e.preventDefault();
    });
  }
}


// handle survey modal
if (document.querySelector('.survey-btn')) {
  const UIsurveyBtn = document.querySelector('.survey-btn');
  const UIsurveyModal = document.querySelector('.survey-modal');
  const UImodalCloseBtn = document.querySelector('.modal-close');
  UIsurveyBtn.addEventListener('click', () => {
    UIsurveyModal.classList.add('toggle-survey-modal');
    document.querySelector('body').style.overflowY = 'hidden';
  });
  UImodalCloseBtn.addEventListener('click', () => {
    UIsurveyModal.classList.remove('toggle-survey-modal');
    document.querySelector('body').style.overflowY = 'auto';
  });
  document.addEventListener('click', (e) => {
    if (e.target.classList.contains('survey-modal') || e.target.classList.contains('modal-body')) {
      UIsurveyModal.classList.remove('toggle-survey-modal');
      document.querySelector('body').style.overflowY = 'auto';
    }
  });
}