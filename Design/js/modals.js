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
  
// 

  // document.addEventListener("DOMContentLoaded", function() {
  //   const loginBtns = document.querySelectorAll(".action_btn_admin ");
  //   const loginPopup = document.querySelector(".login_admin");
  //   const overlay = document.getElementById("overlay");
  //   const heroHeader = document.getElementById("home");
  //   const navBar = document.querySelector(".navbar");
  
  //   loginBtns.forEach(function(btn) {
  //     btn.addEventListener("click", function() {
  //       loginPopup.style.display = "block";
  //       heroHeader.classList.add("blurry");
  //       navBar.classList.add("blurry");
  //       document.body.style.overflow = "hidden"; 
  //       closeNavbar();
  //       window.scrollTo({
  //         top: 0,
  //         behavior: "smooth"
  //       });
  //     });
  //   });
  
  //   function isInsideLoginPopup(target) {
  //     return loginPopup.contains(target);
  //   }
  
  //   function closeLoginPopup() {
  //     loginPopup.style.display = "none";
  //     heroHeader.classList.remove("blurry");
  //     navBar.classList.remove("blurry");
  //     document.body.style.overflow = ""; 
  //   }
  
  //   window.addEventListener('click', function(event) {
  //     const isClickInsideLoginPopup = isInsideLoginPopup(event.target);
  //     if (!isClickInsideLoginPopup && !event.target.classList.contains("action_btn_admin")) {
  //       closeLoginPopup();
  //     }
  //   });
  // });
  