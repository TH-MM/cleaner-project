// reservation 
document.getElementById("openForm1").addEventListener("click", function (e) {
    e.preventDefault();
    document.getElementById("myForm2").classList.add("show");
});

document.getElementById("openForm1").addEventListener("click", function (e) {
    e.preventDefault();
    document.getElementById("myForm1").classList.add("désactiver");
    document.body.classList.add("hidden");
    document.body.classList.remove("hidden");
});