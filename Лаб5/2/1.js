const generateArray = (length, max) => (
    [...new Array(length)]
      .map(() => Math.round(Math.random() * max))
  );
const mass = generateArray(10, 40);
function countOfMassiv (mass) {
    let neggs = false;
    let summ = 0;
    for (let i = mass.length - 1; i >= 0; i--) {
        summ+=mass[i];
        if (Math.sin(mass[i]) < 0) { 
            neggs = true;
            return summ
        }
        
    } 
}

let button = document.querySelector('button');
button.onclick=function () {
    alert('Сумма элементов массива '+mass+' от последнего элемента с отрицательным синусом до конца = '+countOfMassiv(mass))
}




