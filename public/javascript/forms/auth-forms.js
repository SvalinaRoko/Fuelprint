// INPUT FIELDS CHECKING

const passwordInput = document.querySelector('.password-input');
const conditionLenght = document.querySelector('.cond-caracters');
const conditionSymbols = document.querySelector('.cond-symbols');
const conditionNumbers = document.querySelector('.cond-numbers');
const conditions = [conditionLenght,conditionSymbols,conditionNumbers]

passwordInput.addEventListener('input', checkInput);

function checkInput() {
    const value = passwordInput.value;
    const hasNumber = value.match(/[0-9]/g);
    const hasSymbol = value.match(/^.*[!@#$%^&*()_+\=\[\]{};':"\\|,.<>\/?-].*$/);
    const noSpace = !/\s/.test(value);

if(value){
    if (value.length >= 8) {
        conditionLenght.classList.remove('falseInput');
        conditionLenght.classList.add('trueInput');
    } else{
        conditionLenght.classList.add('falseInput');
        conditionLenght.classList.remove('trueInput');
    }

    if (hasNumber) {
        conditionNumbers.classList.remove('falseInput');
        conditionNumbers.classList.add('trueInput');
    } else{
        conditionNumbers.classList.add('falseInput');
        conditionNumbers.classList.remove('trueInput');
    }

    if (hasSymbol && noSpace) {
        conditionSymbols.classList.remove('falseInput');
        conditionSymbols.classList.add('trueInput');
    } else{
        conditionSymbols.classList.add('falseInput');
        conditionSymbols.classList.remove('trueInput');
    }
}else{
    conditions.forEach(con => {
        con.classList.remove('falseInput');
        con.classList.remove('trueInput');
    })
}
}