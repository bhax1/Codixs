
//Menu Bar
let menu = document.querySelector('#menu_icon');
let navbar = document.querySelector('.nav_links');

function isInsideNavbar(target) {
  return navbar.contains(target);
}

function closeNavbar() {
  menu.classList.remove('fa-xmark');
  menu.classList.add('fa-bars');
  navbar.classList.remove('open');
}

menu.onclick = () => {
  menu.classList.toggle('fa-xmark');
  menu.classList.toggle('fa-bars');
  navbar.classList.toggle('open');
};

document.addEventListener('click', function(event) {
  const isClickInsideNavbar = isInsideNavbar(event.target);
  if (!isClickInsideNavbar && !menu.contains(event.target)) {
    closeNavbar();
  }
});


//Auto Type
var phrases = new Typed(".auto-type", {
    strings: ["Welcome to CodixsGo!",
    "Coding is the Future!",
    "Learn different Language",
    "Have Fun!",
    "Take quiz to test your skills!",
    "Coding is Everything!",
    ],
    typeSpeed: 100,
    backSpeed: 50,
    loop: true
})

//Window scroll navbar
window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    if(window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  
// For Sections Link
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav .nav_links a');

window.onscroll = () => {
  sections.forEach(sec => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute('id');

    if (top >= offset && top < offset + height) {
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${id}`) {
          link.classList.add('active');
        }
      });
    }
  });
};

// For Modal Login menu
document.addEventListener("DOMContentLoaded", function() {
  const loginBtns = document.querySelectorAll(".action_btn_login ");
  const loginPopup = document.querySelector(".login_popup");
  const overlay = document.getElementById("overlay");
  const heroHeader = document.getElementById("home");
  const navBar = document.querySelector(".navbar");

  loginBtns.forEach(function(btn) {
      btn.addEventListener("click", function() {
          loginPopup.style.display = "block";
          heroHeader.classList.add("blurry");
          navBar.classList.add("blurry");
          document.body.style.overflow = "hidden"; 
          closeNavbar();
          window.scrollTo({
            top: 0,
            behavior: "smooth"
          });
      });
  });

  function isInsideLoginPopup(target) {
      return loginPopup.contains(target);
  }

  function closeLoginPopup() {
      loginPopup.style.display = "none";
      heroHeader.classList.remove("blurry");
      navBar.classList.remove("blurry");
      document.body.style.overflow = ""; 
  }

  window.addEventListener('click', function(event) {
      const isClickInsideLoginPopup = isInsideLoginPopup(event.target);
      if (!isClickInsideLoginPopup && !event.target.classList.contains("action_btn_login")) {
          closeLoginPopup();
      }
  });
});

//Login Animation
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const backSignInButton = document.getElementById('backSignIn');
const backSignUpButton = document.getElementById('backSignUp');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

backSignInButton.addEventListener('click', () => {
    window.location.href = 'index.php';
});

backSignUpButton.addEventListener('click', () => {
    window.location.href = 'index.php';
});


// For Cursor


//For Card SLider
const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];
let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
   
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; 
    
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; 
    
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}

autoPlay();
carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);

