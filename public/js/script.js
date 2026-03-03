// MOBILE NAVIGATION 

function showButton(){
    const isMobile = window.matchMedia("(max-width:920px)").matches;
    const brgerBtn = document.querySelector(".buttonMobile");
    const mobileCta = document.querySelector(".mobile-cta");
    
    if(!brgerBtn){
        return;
    }
    if(isMobile){
        mobileCta.classList.remove("hide");
        
        brgerBtn.classList.remove("hide");
        brgerBtn.classList.add("show");
    }else {
        mobileCta.classList.add("hide");

        brgerBtn.classList.remove("show");
        brgerBtn.classList.add("hide");

    }
}
showButton();
window.addEventListener("resize", function() {
    showButton();
});

function enableMobileNav(){

    const mobileBtn = document.querySelector(".buttonMobile");
    const brger = document.querySelector(".brger");
    const linksNav = document.querySelector(".left-links");
    const nav = document.querySelector(".navigation");
    const rightLinks = document.querySelector(".right-links");
    const allRightButtons = Array.from(rightLinks.children);
    const firstLink = allRightButtons[0];

    if(!mobileBtn){
        return;
    }
    mobileBtn.addEventListener('click',() => {
        const isOpened = mobileBtn.getAttribute("aria-expanded");
        if(isOpened == 'false'){
            mobileBtn.setAttribute("aria-expanded", true);

            brger.setAttribute("stroke","#0984e3");
            
            linksNav.classList.add("moveLinksDown");

            nav.classList.add("backgroundToWhite");

            firstLink.classList.add("hide");

        }else{
            mobileBtn.setAttribute("aria-expanded", false);

            brger.setAttribute("stroke","#fff");

            linksNav.classList.remove("moveLinksDown");

            nav.classList.remove("backgroundToWhite");

            firstLink.classList.remove("hide");
        }
    })
    const closeMobileNav = new IntersectionObserver((entries,observer) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                mobileBtn.setAttribute("aria-expanded", false);
                brger.setAttribute("stroke","#fff");
                linksNav.classList.remove("moveLinksDown");
                nav.classList.remove("backgroundToWhite");
                firstLink.classList.remove("hide");
            }
          });
        }, {
          threshold: 0,  
        });
        
        closeMobileNav.observe(nav);

        document.addEventListener("click", (e) => {
            const isOpened = mobileBtn.getAttribute("aria-expanded");
            
            if (isOpened === "false") return;
            
            if (nav.contains(e.target) || mobileBtn.contains(e.target)) {
                return;
            }
            mobileBtn.setAttribute("aria-expanded", false);
            brger.setAttribute("stroke", "#fff");
            linksNav.classList.remove("moveLinksDown");
            nav.classList.remove("backgroundToWhite");
            firstLink.classList.remove("hide");
        });
}
enableMobileNav();




// FUNCTIONS SECTION DROPDOWN
function updateContainerSpacing() {
    const mq = window.matchMedia("(max-width:1231px)");
    const funcContainer = document.querySelector(".func-container");

    if (!funcContainer) return;

    if (!mq.matches) {
        funcContainer.classList.remove("space");
        return;
    }

    const anyOpen = document.querySelector(".func-nbr .function.opened");

    if (anyOpen) {
        funcContainer.classList.add("space");
        funcContainer.classList.remove("nospace");

    } else {
        funcContainer.classList.remove("space");
        funcContainer.classList.add("nospace");
    }
}
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

        updateContainerSpacing();
    }

    if(active){

        const images = {
            default:document.getElementById('img-default'),
            one:document.getElementById('img-one'),
            two:document.getElementById('img-two'),
            three:document.getElementById('img-three'),
            four:document.getElementById('img-four')
        };
        
        const current = functionBlock.id;
        
        Object.entries(images).forEach(([key,img]) => {
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
        updateContainerSpacing();
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
    const currentQ = questionBlock.id;;

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
const sections = document.querySelectorAll(".section");
const navLinks = document.querySelectorAll(".nav-links .btn-link");
const OFFSET = 300;

for (const link of navLinks){
    link.addEventListener("click", smoothScroll);
}

function smoothScroll (event){
    const href = this.getAttribute("href");
    if (href === "#" || href === "") return;
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

// ---------- ANIMATIONS ---------- //

const aboutSection = document.getElementById("about");
const functionsSection = document.getElementById("functionality");
const valuesSection = document.getElementById("values");
const faqSection = document.getElementById("faq");
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
// PARTNERS
const partnersScroller = document.querySelectorAll(".partners-container");

if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    addAnimation();
}

function addAnimation() {
    partnersScroller.forEach(scroller => {
        scroller.setAttribute("data-animated", "true");

        const scrollerInner = scroller.querySelector(".partners-logos");
        const scrollerContent = Array.from(scrollerInner.children);

        scrollerContent.forEach(item => {
            const duplicatedItem = item.cloneNode(true);
            duplicatedItem.setAttribute("aria-hidden", "true");
            scrollerInner.appendChild(duplicatedItem);
        });
    });
}
// ABOUT SECTION
const aboutS = aboutSection;

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
    threshold: 0,
    rootMargin: "0px 0px -300px 0px"
})
aboutObserver.observe(aboutS);

// FUNCTIONALITY SECTION
const functionsS = functionsSection;

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
},{
     threshold:0,
    rootMargin:"0px 0px -500px 0px"
})

funcObserver.observe(functionsS);

// VALUES SECTION
const valuesS = valuesSection;

const valuesTitle = document.querySelector(".vt");
const valuesHeading = document.querySelector(".vh");
const valuesItems = document.querySelectorAll(".vi");

const valuesObserver = new IntersectionObserver((entries,observer)=>{
    entries.forEach(entry =>{
        if(entry.isIntersecting){
            setTimeout(()=>{
                valuesTitle.classList.add("values-title-animation");
            },600)

            valuesHeading.classList.add("values-heading-animation");

            valuesItems.forEach((item,index) => {
                const delay = (valuesItems.length - 1 - index) * 200;
                setTimeout(()=>{
                    item.classList.add("values-item-animation")
                },delay)
            })
        }
    })
},{ threshold:0,
    rootMargin:"0px 0px -500px 0px"})

valuesObserver.observe(valuesS);

// FAQ SECTION
const faqS = faqSection;

const faqTitle = document.querySelector(".qt");
const faqHeading = document.querySelector(".qh");
const faqRight = document.querySelectorAll(".qr");
const faqLeft = document.querySelectorAll(".ql");

const faqObserver = new IntersectionObserver((entries,observer)=>{
    entries.forEach(entry => {
        if(entry.isIntersecting){
            faqTitle.classList.add("questions-title-animation");
            faqHeading.classList.add("questions-heading-animation");

            const allQuestions = [...faqLeft, ...faqRight];
            allQuestions.forEach((q,k) => {
                const delay = [300,600,100,500];
                setTimeout(()=>{
                    q.classList.add("questions-animation")
                },delay[k] ?? 0)
            })


            }
        });
    },{
    threshold:0,
    rootMargin:"0px 0px -400px 0px"
    });
    

faqObserver.observe(faqS);


