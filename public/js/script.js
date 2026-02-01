// FUNCTIONS SECTION DROPDOWN
document.addEventListener('click', (e) => {
    const active = e.target.closest(".active-btn");
    const functionBlock= e.target.closest(".func-nbr");
    const imageBox = e.target.closest(".func-images");

    if (!imageBox) {
        showDefaultImage();
    }

    if(!functionBlock){
        closeAll();
        return;
    }

    if(active){
        const bar = functionBlock.querySelector(".function");
        const content = functionBlock.querySelector(".dd-functions-container");
        const arrow = functionBlock.querySelector(".down-arr");

        closeAll(functionBlock);

        functionBlock.classList.toggle("spaceBottom");

        bar.classList.toggle('opened');
        bar.classList.toggle('closed');
        content.classList.toggle('closed');
        content.classList.toggle('opened');
        arrow.classList.toggle('rotate')
    }

    if(active){
        if(!active){
            return;
        }

        const images = {
            default:document.getElementById('img-default'),
            one:document.getElementById('img-one'),
            two:document.getElementById('img-two'),
            three:document.getElementById('img-three'),
            four:document.getElementById('img-four')
        };
        
        const current = functionBlock.id;
        console.log(current);
        
        Object.entries(images).forEach(([key,img]) => {
            console.log(img);
            const isActive = key === current;
            img.classList.toggle('show',isActive);
            img.classList.toggle('dissapear',!isActive);
        });
    }                        
function showDefaultImage() {
    document.querySelectorAll('.image-box').forEach(img => {
        const isDefault = img.id === 'img-default';
        img.classList.toggle('show', isDefault);
        img.classList.toggle('dissapear', !isDefault);
    });
}
function closeAll(except = null) {
    document.querySelectorAll(".func-nbr").forEach(fn => {
      if (fn !== except) {
        fn.classList.remove("spaceBottom")
        fn.querySelector(".function")?.classList.remove("opened");
        fn.querySelector(".function")?.classList.add("closed");
        fn.querySelector(".dd-functions-container")?.classList.remove("opened");
        fn.querySelector(".dd-functions-container")?.classList.add("closed");
        fn.querySelector(".down-arr")?.classList.remove("rotate");
    }});
}
});

// FAQ SECTION DROPDOWN
document.addEventListener('click', (e) => {
    const questionBlock = e.target.closest(".question-nbr");
    const activeQuestion = e.target.closest(".active-question");

    if(!questionBlock){
        closeAllQ();
        return;
    }

    const questions = {
        Qone:document.getElementById("Qone"),
        Qtwo:document.getElementById("Qtwo"),
        Qthree:document.getElementById("Qthree"),
        Qfour:document.getElementById("Qfour")
    };
    const currentQ = questionBlock.id;
    console.log(currentQ);

    if(activeQuestion){
        const question = questionBlock.querySelector(".question");
        const questionContent = questionBlock.querySelector(".dd-question-container");
        const plusIcon = questionBlock.querySelector(".plus-icon");
        closeAllQ(questionBlock);
        question.classList.toggle('borderRadius');
        questionBlock.classList.toggle('spaceBottom');
        questionContent.classList.toggle('closed');
        questionContent.classList.toggle('opened');
        plusIcon.classList.toggle('closeQ')
    }

    function closeAllQ(except = null){
        document.querySelectorAll(".question-nbr").forEach( qe => {
            if(qe !== except){
                qe.classList.remove('spaceBottom');
                qe.querySelector(".dd-question-container")?.classList.add("closed");
                qe.querySelector(".dd-question-container")?.classList.remove("opened");
                qe.querySelector(".plus-icon")?.classList.remove("closeQ");
                qe.querySelector(".question")?.classList.remove("borderRadius");
            }
        })
    }
})

// SMOOTHE SCROLLING
const section = document.querySelectorAll(".section");
const navLinks = document.querySelectorAll(".nav-links .btn-link");
const OFFSET = 300;

for (const link of navLinks){
    link.addEventListener("click", smoothScroll);
}

function smoothScroll (event){
    event.preventDefault();
    const targetId = this.getAttribute("href");
    const targetElement = document.querySelector(targetId);

    if(targetElement){
        const targetPossition = targetElement.getBoundingClientRect().top +window.pageYOffset - OFFSET;
        
        window.scrollTo({
            top:targetPossition,
            behavior: "smooth"
        });
    }
}
// FOOTPRINTS ANIMATION
function setFootprintAnimation(){

    document.querySelectorAll('.footprint').forEach((group, index) => {
        const paths = group.querySelectorAll('path');
        
        setTimeout(() => {
            paths.forEach(p => p.style.opacity = 1);
        }, index * 200);
    });   
}
// ---------- ANIMATIONS ----------
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
    
// ABOUT SECTION
const aboutSection = section[0];

const aboutImage = document.querySelector(".about-container .about-img");
const aboutTitle = document.querySelector(".at");
const aboutHeading = document.querySelector(".ah");
const aboutCopy = document.querySelector(".ap");

const aboutObserver = new IntersectionObserver((entries,observer) => {
    entries.forEach(entry => {
    if(entry.isIntersecting){
        setTimeout(()=>{
            aboutImage.classList.add("about-img-animation");
        },700)
        aboutHeading.classList.add("about-text-animation");
        setTimeout(()=>{
            aboutCopy.classList.add("about-text-animation");
        },700)

        setTimeout(() => {
            aboutTitle.classList.add("about-title-animation");
        },500)

        observer.unobserve(entry.target);
    };
})
},{
    threshold:0.5
})
aboutObserver.observe(aboutSection);

// FUNCTIONALITY SECTION
const funcSection = section[1];

const funcTitle = document.querySelectorAll(".ft");
const funcHeading = document.querySelector('.fh');
const functions = document.querySelectorAll('.f');
const funcImages = document.querySelector(".fi");

const funcObserver = new IntersectionObserver((entries,observer) => {
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
            funcTitle.forEach(item => {
                setTimeout(()=>{
                    item.classList.add("func-title-animation");
                },680)
            })

            funcHeading.classList.add("func-heading-animation");

            functions.forEach((func,index) => {
                setTimeout(()=>{
                    func.classList.add("function-animtion")
                },index * 200)
            })
            setTimeout(()=>{
                funcImages.classList.add("func-image-animation");
            },300)

            observer.unobserve(entry.target);
        }
    })
},{threshold:0.5})

funcObserver.observe(funcSection);

  