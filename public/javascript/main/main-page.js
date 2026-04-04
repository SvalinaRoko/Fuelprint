// HERO SECTION
const sidebarContainer = document.querySelector(".sidebar-section");
const sidebar = document.querySelector(".sidebar-content");
function showButton(){
    const isMobile = window.matchMedia("(max-width:1280px)").matches;
    const brgerBtn = document.querySelector(".buttonMobile");

    if(!brgerBtn){
        return;
    }
    if(isMobile){
        sidebar.classList.add("closeSidebar");
        sidebar.classList.remove("openSidebar");

        brgerBtn.classList.remove("hide");
        brgerBtn.classList.add("show");
        
    }else {
        sidebar.classList.remove("closeSidebar");
        sidebar.classList.remove("openSidebar");

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

    function isOpened() {
        return mobileBtn.getAttribute("aria-expanded") === "true";
    }

    if(!mobileBtn){
        return;
    }

    function closeSidebar(){
        mobileBtn.setAttribute("aria-expanded", false);

        sidebarContainer.style.pointerEvents = "none";

        sidebar.classList.remove("openSidebar");
        sidebar.classList.add("closeSidebar");
        
        document.body.classList.remove("no-scroll");
    }

    function openSidebar(){
        mobileBtn.setAttribute("aria-expanded", true);

        sidebarContainer.style.pointerEvents = "auto";

        sidebar.classList.add("openSidebar");
        sidebar.classList.remove("closeSidebar");

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
            document.addEventListener('click', (e) => {
                if(!isOpened()) return;
                if(sidebar.contains(e.target) || mobileBtn.contains(e.target)){
                    return;
                }
                closeSidebar();
            })
        }
    })


}
enableSidebar();