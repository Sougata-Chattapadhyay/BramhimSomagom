
$nav = $(".nav");

$toggleCollapse = $(".toggle-collapse");

// click event on toggle 
$toggleCollapse.click(function(){
    $nav.toggleClass("collapse");
});


//Owl-carousel for options
$(".owl-carousel").owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    dots:false,
    nav:true,
    navText:[$('.owl-navigation .owl-nav-prev'),$('.owl-navigation .owl-nav-next')]
});


// -----------------------------nav-Javascript----------------------------
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }
// --------------xx-------------nav-Javascript----------------xx----------