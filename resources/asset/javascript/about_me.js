const username = prompt("Halo! Namamu Siapa? ^_^");
const umuruser = prompt("Kalau Boleh tau, Umurmu Berapa? :D");

if(username == null){
    nyapauser.innerText= "Error 404"
}else if(umuruser >= 20){
    nyapauser.innerText = "Halo Kakak" + " " + username;
}else if(umuruser <= 20){
    nyapauser.innerText = "Halo Masbro" + " " + username;
}else{
    nyapauser.innerText = "Adios" + " " + username;
}
