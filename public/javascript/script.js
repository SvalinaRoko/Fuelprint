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
})

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
    function closeNav() {
        mobileBtn.setAttribute("aria-expanded", false);
        brger.setAttribute("stroke", "#fff");
        linksNav.classList.remove("moveLinksDown");
        nav.classList.remove("backgroundToWhite");
        firstLink.classList.remove("hide");
    }

    function openNav(){
        mobileBtn.setAttribute("aria-expanded", true);
        brger.setAttribute("stroke","#0984e3");
        linksNav.classList.add("moveLinksDown");
        nav.classList.add("backgroundToWhite");
        firstLink.classList.add("hide");
    }

    mobileBtn.addEventListener('click',() => {
        const isOpened = mobileBtn.getAttribute("aria-expanded");
        if(isOpened == 'false'){
            openNav();
        }else{
            closeNav();
        }
    })

    window.addEventListener("resize", () => {
        if (window.innerWidth > 920) {
            closeNav(); 
    }})

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

// SMOOTHE SCROLLING
const sections = document.querySelectorAll(".section");
const navLinks = document.querySelectorAll(".nav-links .btn-link");
const OFFSET = 300;

for (const link of navLinks){
    link.addEventListener("click", smoothScroll);
}

function smoothScroll (event){
    const href = this.getAttribute("href");
    if (!href.startsWith("#")) return;
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


