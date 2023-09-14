$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $("#menu").addClass("sticky");
    } else {
        $("#menu").removeClass("sticky");
    }
});


$(document).ready(function () {
    $('ul.navbar-nav > li').click(function (e) {
    $('ul.navbar-nav > li').removeClass('active');
    $(this).addClass('active');
});
window.addEventListener("resize", function () {
    const screenWidth = window.innerWidth;
  
    // Sesuaikan ukuran font berdasarkan lebar layar
    const judul = document.querySelector(".judul");
    if (screenWidth < 480) {
      judul.style.fontSize = "60px";
    } else {
      judul.style.fontSize = "100px";
    }
  });
});
