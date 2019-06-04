$('.owl-carousel').owlCarousel({
  loop:false,
  margin:10,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    }
});


function DropToogle(y) {
  var x = document.getElementById("dropBox"+y);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

