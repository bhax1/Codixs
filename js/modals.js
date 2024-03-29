// For Modal Login menu
document.addEventListener("DOMContentLoaded", function() {
    const loginBtns = document.querySelectorAll(".action_btn_login ");
    const loginPopup = document.querySelector(".login_popup");
    // const overlay = document.getElementById("overlay");
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
  
// 

  document.addEventListener("DOMContentLoaded", function() {
    const loginBtns_admin = document.querySelectorAll(".action_btn_admin");
    const loginPopup_admin = document.querySelector(".login-box");
    const heroHeader_1 = document.getElementById("home");
    const navBar_1 = document.querySelector(".navbar");
  
    loginBtns_admin.forEach(function(btn) {
      btn.addEventListener("click", function() {
        loginPopup_admin.style.display = "block";
        heroHeader_1.classList.add("blurry-admin");
        navBar_1.classList.add("blurry-admin");
        document.body.style.overflow = "hidden"; 
        closeNavbar();
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      });
    });
    
  
    function isInsideLoginPopup(target) {
      return loginPopup_admin.contains(target);
    }
  
    function closeLoginPopup() {
      loginPopup_admin.style.display = "none";
      heroHeader_1.classList.remove("blurry-admin");
      navBar_1.classList.remove("blurry-admin");
      document.body.style.overflow = ""; 
    }
  
    window.addEventListener('click', function(event) {
      const isClickInsideLoginPopup = isInsideLoginPopup(event.target);
      if (!isClickInsideLoginPopup && !event.target.classList.contains("action_btn_admin")) {
        closeLoginPopup();
      }
    });
  });

  //GETTING STARTED BUTTON
  document.addEventListener("DOMContentLoaded", function() {
    const loginBtns = document.querySelectorAll(".button-19");
    const loginPopup2 = document.querySelector(".login_popup");
    const heroHeader2 = document.getElementById("home");
    const navBar2 = document.querySelector(".navbar");
  
    loginBtns.forEach(function(btn) {
      btn.addEventListener("click", function() {
        loginPopup2.style.display = "block";
        heroHeader2.classList.add("blurry");
        navBar2.classList.add("blurry");
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
      loginPopup2.style.display = "none";
      heroHeader2.classList.remove("blurry");
      navBar2.classList.remove("blurry");
      document.body.style.overflow = ""; 
    }
  
    window.addEventListener('click', function(event) {
      const isClickInsideLoginPopup = isInsideLoginPopup(event.target);
      if (!isClickInsideLoginPopup && !event.target.classList.contains("action_btn_login")) {
        closeLoginPopup();
      }
    });
  });