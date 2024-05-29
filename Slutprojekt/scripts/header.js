var dropdownBar = document.getElementById("dropdownBars");
var dropdownMenu = document.getElementById("dropdownMenu");
var homeLink = document.getElementById("homeLink");
var title = document.getElementById("title");

dropdownBar.addEventListener("click",function(){
    dropdownMenu.classList.toggle("active");
    homeLink.classList.toggle("hidden");
    title.style.display = "none";
});

var dropdownMenuClose = document.getElementById("dropdownMenuClose");

dropdownMenuClose.addEventListener("click",function(){
    dropdownMenu.classList.toggle("active");
    homeLink.classList.toggle("hidden");
    title.style.display = "block";
});

