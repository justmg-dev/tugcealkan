gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", (event) => {

    gsap.from('.imgoverlai', {
        opacity: 0,
        duration: 2,
        scrollTrigger: {
            trigger: '.introductionpage',
            start: "center 80%",
            toggleActions: "play none none none"
        }
    })

    gsap.from('.imgoverlai', {
        x: 400,
        duration: 1,
        scrollTrigger: {
            trigger: '.booknow',
            start: "center 80%",
            toggleActions: "play none none none"
        }
    })

    gsap.from('.break', {
        scaleX: 0
    })

    gsap.from('.breakcaption', {
        y: -50,
        opacity: 0,
        delay: 0.5,
        scrollTrigger: {
            trigger: '.breaklinecontainer',
            start: "center 80%",
            toggleActions: "play none none none"
        }
    })

    gsap.from('.helpcpt', {
        x: -500,
        delay: 0.5,
        scrollTrigger: {
            trigger: '.posts',
            start: "center 80%",
            toggleActions: "play none none none"
        }
    })
    gsap.from('#exp1', {
        y: -50,
        opacity: 0,
        scrollTrigger: {
            trigger: '.helpcontainer',
            start: "center 80%",
            toggleActions: "play none none none"
        }
    })
    gsap.from('#exp2', {
        y: -50,
        opacity: 0,
        delay: 0.5,
        scrollTrigger: {
            trigger: '.helpcontainer',
            start: "center 80%",
            toggleActions: "play none none none"
        }
    })
    gsap.from('#exp3', {
        y: -50,
        opacity: 0,
        delay: 1,
        scrollTrigger: {
            trigger: '.helpcontainer',
            start: "center 80%",
            toggleActions: "play none none none"
        }
    })
    gsap.from('#exp4', {
        y: -50,
        opacity: 0,
        delay: 1.5,
        scrollTrigger: {
            trigger: '.helpcontainer',
            start: "center 80%",
            toggleActions: "play none none none"
        }
    })
});