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

// function scroll to top
window.addEventListener("scroll", () => {
    if (
        document.body.scrollTop > 30 ||
        document.documentElement.scrollTop > 30
    ) {
        gettoTop.style.display = "block";
    } else {
        gettoTop.style.display = "none";
    }
});

gettoTop.addEventListener("click", function () {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});
