// HERO SECTION
const nav = document.querySelector(".navigation");
const catchphrase = document.querySelector(".catchphrase-text");
const heroBtns = document.querySelectorAll(".hero-btn");
if(nav){
    nav.classList.add("nav-animation");

    const headings = document.querySelectorAll(".heading-primary");
    const headingDelay = 200;
    const heroDuration = headings.length * headingDelay;

    setTimeout(() => {
        catchphrase.classList.add("catchphrase-animation");
    }, heroDuration + 200);

    setTimeout(() => {
        heroBtns.forEach(btn => {
            btn.classList.add("hero-btn-animation");
        });
    }, heroDuration + 200);

    headings.forEach((heading, index) => {
        setTimeout(() => {
                heading.classList.add("heading-animation");
            },index * headingDelay)
        })

        setTimeout(() => {
            setFootprintAnimation();
        },heroDuration + 200)
    };