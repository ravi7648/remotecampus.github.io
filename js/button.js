var videobutton = document.getElementById("vidb")
var joinbutton = document.getElementById("joinb")


videobutton.onclick = function myFunction() {
    window.open("https://www.youtube.com/watch?v=n83jFmQVbns")
    //location.href = "https://www.youtube.com/watch?v=n83jFmQVbns"; 
}
joinbutton.onclick = function myFunction() {
    alert("Thanks for joining!")
    window.open("https://www.redhat.com/wapps/ugc/register.html")
}


