
window.addEventListener("scroll", function () {
    var header = this.document.querySelector("header");
    header.classList.toggle("abajo", this.window.scrollY > 0)
})

/*
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAtribute('href')).scrollIntoView({
            behaivor:'smooth',
            block:'start'
        });
    });
});
*/