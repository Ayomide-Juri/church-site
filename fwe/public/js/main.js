window.sr = ScrollReveal();
sr.reveal(".navbar", {
    duration: 3000,
    origin: "bottom",
    distance: "300px"
});
sr.reveal("#navigation", {
    duration: 4000,
    origin: "right",
    distance: "300px"
});

sr.reveal("#who", {
    duration: 3000,
    origin: "left",
    distance: "500px"
});
sr.reveal("#events", {
    duration: 3000,
    origin: "top",
    distance: "500px"
});
sr.reveal("#gallery", {
    duration: 3000,
    origin: "right",
    distance: "500px"
});
sr.reveal("#contact", {
    duration: 3000,
    origin: "left",
    distance: "500px"
});
sr.reveal("#visit", {
    duration: 3000,
    origin: "top",
    distance: "500px"
});

$(function() {
    // Smooth Scrolling
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top
                    },
                    1000
                );
                return false;
            }
        }
    });
});
