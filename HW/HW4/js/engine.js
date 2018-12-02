

function move() {
     $("document").ready( function() {
    var xCat = Math.floor(Math.random()*401); 
    var yCat = Math.floor(Math.random()*201);
    var xDog = Math.floor(Math.random()*411); 
    var yDog = Math.floor(Math.random()*201);
    //all the JavaScript code to make the animals move will go in here.
    $('#cat').css("left", xCat + 'px');
    $('#cat').css("top", yCat + 'px');
    $('#dog').css("left", xDog + 'px');
    $('#dog').css("top", yDog + 'px');
});
             
 }