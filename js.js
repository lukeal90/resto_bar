<<<<<<< HEAD
    let imagenes = [
        'images/carru.jpg',
        'images/carru1.jpg',
        'images/carru2.jpg',
        'images/carru3.jpg'
    ];


let contador = 0;
function rotarImagenes()
{

    let index = Math.floor((Math.random() * imagenes.length))
    
  $("#carrousel").fadeOut(400, function() {
            $(this).css("background-image",`url(${imagenes[index]}`);
  }).fadeIn(500);
    contador ++

}

$(function(){
  
  rotarImagenes();

  setInterval(rotarImagenes,5000);
  
=======
    let imagenes = [
        'images/carru.jpg',
        'images/carru1.jpg',
        'images/carru2.jpg',
        'images/carru3.jpg'
    ];


let contador = 0;
function rotarImagenes()
{

    let index = Math.floor((Math.random() * imagenes.length))
    
  $("#carrousel").fadeOut(400, function() {
            $(this).css("background-image",`url(${imagenes[index]}`);
  }).fadeIn(200);
    contador ++

}

$(function(){
  
  rotarImagenes();

  setInterval(rotarImagenes,5000);
  
>>>>>>> b10419d (subo cambios)
});