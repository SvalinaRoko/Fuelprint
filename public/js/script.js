// FUNCTIONS SECTION DROPDOWN
document.addEventListener('click', (e) => {
    const arrow = e.target.closest(".down-arr");
    const functionBlock= e.target.closest(".func-nbr");

    if(!functionBlock){
        closeAll();
        return;
    }

    if(arrow){
        const bar = functionBlock.querySelector(".function");
        const content = functionBlock.querySelector(".dd-container");

        closeAll(functionBlock);

        bar.classList.toggle('opened');
        bar.classList.toggle('closed');
        content.classList.toggle('closed');
        content.classList.toggle('opened');
        arrow.classList.toggle('rotate')
    }

})

function closeAll(except = null) {
    document.querySelectorAll(".func-nbr").forEach(fn => {
      if (fn !== except) {
        fn.querySelector(".function")?.classList.remove("opened");
        fn.querySelector(".function")?.classList.add("closed");
        fn.querySelector(".dd-container")?.classList.remove("opened");
        fn.querySelector(".dd-container")?.classList.add("closed");
        fn.querySelector(".down-arr")?.classList.remove("rotate");
    }})
    };
console.log('aaa');