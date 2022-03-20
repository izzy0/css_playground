gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.matchMedia({
    "(min-width: 760px)": function () {
        gsap.to(".hero-key", {
            scrollTrigger: {
                trigger: ".hero-key",
                start: "top 400px",
                end: "+=200px",
                markers: false,
                scrub: 1,
                toggleActions: "play pause reverse pause"
            },
            x: 350,
            duration: 6,
            ease: "ease",
            horizontal: true
        });

        gsap.to(".hero-circle", {
            scrollTrigger: {
                trigger: ".hero-circle",
                start: "top 250px",
                end: "+=400px",
                markers: false,
                scrub: true,
                toggleActions: "play pause reverse pause"
            },
            y: -250,
            x: 150,
            maxWidth: "400px",
            scale: 2,
            yoyo: true,
            duration: 6,
            zIndex: 0,
            ease: "circ.out",
        });

        gsap.to(".hero-popup", {
            scrollTrigger: {
                trigger: ".hero-popup",
                start: "top 250px",
                end: "+=400px",
                markers: false,
                scrub: true,
                toggleActions: "play pause reverse pause"
            },
            x: 250,
            maxWidth: "400px",
            scale: 3,
            duration: 6,
            zIndex: 10,
            ease: "circ.out",
            horizontal: true
        });

        gsap.to(".hero-img-container", {
            scrollTrigger: {
                trigger: ".hero-img-container",
                start: "top 150px",
                end: "+=850px",
                markers: false,
                scrub: 1,
                pin: true,
                toggleActions: "play pause pause pause"
            },
        });
    }
});
// MOBILE
ScrollTrigger.matchMedia({
    "(max-width: 760px)": function () {
        gsap.to(".hero-popup", {
            scrollTrigger: {
                trigger: ".hero-popup",
                start: "top 250px",
                end: "+=400px",
                markers: false,
                scrub: true,
                toggleActions: "play pause reverse pause",
            },
            x: 50,
            y: 500,
            maxWidth: "300px",
            scale: 3,
            duration: 6,
            zIndex: 100,
            ease: "circ.out",
        });
        gsap.to(".hero-key", {
            scrollTrigger: {
                trigger: ".hero-img",
                start: "top 100px",
                end: "+=1000px",
                markers: false,
                scrub: true,
                toggleActions: "play pause none pause"
            },
            x: 50,
            y: 450,
            duration: 6,
            ease: "ease",
        });
        gsap.to(".hero-circle", {
            scrollTrigger: {
                trigger: ".hero-circle",
                start: "top 250px",
                end: "+=400px",
                markers: false,
                scrub: true,
                toggleActions: "play pause reverse pause"
            },
            y: 150,
            x: 50,
            maxWidth: "200px",
            scale: 2,
            yoyo: true,
            duration: 6,
            zIndex: 0,
            ease: "circ.out",
        });
        gsap.to(".hero-img-container", {
            scrollTrigger: {
                trigger: ".hero-img-container",
                start: "top 450px",
                end: "+=550px",
                markers: false,
                scrub: 1,
                pin: ".hero-img-container",
                toggleActions: "play pause pause pause"
            },
            
        });
    }
});
