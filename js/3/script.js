//JavaScript
//document.getElementById("dugme");
//document.getElementsByClassName("dugme")[0];


//JQuery
$('.dugme').click(function(){
    $('p').css("color","blue").css({"border":"1px solid black"});
    $('h1').addClass("moj-naslov");
});