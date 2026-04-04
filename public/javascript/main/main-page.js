// HERO SECTION
function showButton(){
    const isMobile = window.matchMedia("(max-width:1280px)").matches;
    const brgerBtn = document.querySelector(".buttonMobile");

    if(!brgerBtn){
        return;
    }
    if(isMobile){
        
        brgerBtn.classList.remove("hide");
        brgerBtn.classList.add("show");
        
    }else {

        brgerBtn.classList.remove("show");
        brgerBtn.classList.add("hide");

    }
}
showButton();
window.addEventListener("resize", function() {
    showButton();
})

function enableSidebar(){
    const mobileBtn = document.querySelector(".buttonMobile");
    const sidebar = document.querySelector(".sidebar-content");

    function isOpened() {
        return mobileBtn.getAttribute("aria-expanded") === "true";
    }

    if(!mobileBtn){
        return;
    }

    function closeSidebar(){
        mobileBtn.setAttribute("aria-expanded", false);
        sidebar.style.transform = "translateX(-100%)";
        
        document.body.classList.remove("no-scroll");
    }

    function openSidebar(){
        mobileBtn.setAttribute("aria-expanded", true);
        sidebar.style.transform = "translateX(0)";

        if (window.innerWidth < 560) {
            document.body.classList.add("no-scroll");
          }
    }

    mobileBtn.addEventListener('click',() =>{ 

        if(!isOpened()){
            openSidebar();
        }else{
            closeSidebar();
        }
    })


    window.addEventListener("resize", () => {
        if (window.innerWidth > 1280) {
        openSidebar();
        } else{
        closeSidebar();
        }
    })

    document.addEventListener('click', (e) => {
        if(!isOpened()) return;

        if(sidebar.contains(e.target) || mobileBtn.contains(e.target)){
            return;
        }
        closeSidebar();

    })
}
enableSidebar();