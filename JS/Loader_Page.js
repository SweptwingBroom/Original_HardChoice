$(document).ready(function() {
  var counter = 0;

  // Start the changing images
  setInterval(function() {
    if(counter == 9) { 
      counter = 0; 
    }

    changeImage(counter);
    counter++;
  }, 3000);

  // Set the percentage off
  loading();
});

function changeImage(counter) {
  var images = [
    '<i class="fas fa-gamepad"></i>',
    '<i class="fas fa-headphones-alt"></i>',
    '<i class="fas fa-cubes"></i>',
    '<i class="fas fa-mobile"></i>',
    '<i class="fas fa-satellite"></i>',
    '<i class="fas fa-server"></i>',     
    '<i class="fas fa-shield-alt"></i>',
    '<i class="fas fa-tv"></i>',
    '<i class="fas fa-chart-pie"></i>',
  ];

  $(".loader .image").html(""+ images[counter] +"");
}

function loading(){
  var num = 0;

  for(i=0; i<=100; i++) {
    setTimeout(function() { 
      $('.loader span').html(num+'%');

      if(num == 100) {
        loading();
      }
      num++;
    },i*120);
  };
}

(function(){
  var preload = document.getElementsByClassName("loader");
  var loading = 0;
  var id = setInterval(frame, 64);
 

  function frame(){
    preload.style.display = 'none';
  }
  
  function frame(){
   if(loading == 100) {
    clearInterval(id);
    window.open("HardChoice.html" , "__item");
   }

   else {
    loading += 1;
    if(loading == 90) {
     preload.style.animation = "fadeout 1s ease";
    }
   }
  }
 })();