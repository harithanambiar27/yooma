/* Open the sidenav */
function openNav() {
    document.getElementById("mySidenav").style.width = "90%";
  }
  
  /* Close/hide the sidenav */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("mob_services").style.width = "0";
  }
  // mobile services
  function openService() {
    document.getElementById("mob_services").style.width = "90%";
  }
  
  /* Close/hide the sidenav */
  function closeService() {
    document.getElementById("mob_services").style.width = "0";
  }
  // mobile products
  
  function openProducts() {
    document.getElementById("mob_products").style.width = "90%";
  }
  
  /* Close/hide the sidenav */
  function closeProducts() {
    document.getElementById("mob_products").style.width = "0";
  }
  
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
  
    // Define the scroll threshold when the class should be added
    var scrollThreshold = 100; // Adjust this value as needed
  
    // Check if the user has scrolled past the threshold
    if (scroll >= scrollThreshold) {
        $('.navbar').addClass('scrolled');
       
        
      
       
    } else {
        $('.navbar').removeClass('scrolled');
     
       
       
    }
  
  });
  
  document.getElementById("defaultOpen").click();

  
  function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  $(document).ready(function(){
  $('.course_slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
   
 
  });
});