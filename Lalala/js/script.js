//Menu Bar
let menu = document.querySelector('#menu_icon');
let navbar = document.querySelector('.nav_links')

menu.onclick = () => {
    menu.classList.toggle('fa-solid');
    navbar.classList.toggle('open');
}


//Auto Type
var phrases = new Typed(".auto-type", {
    strings: ["Welcome to CodixsGo!",
    "zzzz",
    "Learn to code while having fun!.",
    "Take quiz to test your skills!",
    ],
    typeSpeed: 100,
    backSpeed: 50,
    loop: true
})

//window scroll navbar
window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    if(window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  