var nav = document.querySelector("nav");
var gettoTop = document.getElementById("tombol-atas");

// function navbar sticky-top
window.addEventListener("scroll", () => {
    if (document.documentElement.scrollTop > 20) {
        nav.classList.add("sticky");
    } else {
        nav.classList.remove("sticky");
    }
});
