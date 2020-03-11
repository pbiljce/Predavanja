var d = new Date();
var sat = d.getHours();
if(sat < 12){
    document.write("Dobro jutro");
}else if(sat > 11 && sat < 18){
    document.write("Dobar dan");
}else{
    document.write("Dobro veče");
}