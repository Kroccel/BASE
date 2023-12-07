const generateArray = (length, max) => (
    [...new Array(length)]
      .map(() => Math.round(Math.random() * max))
  );
const mass = generateArray(10, 40);

function isProstX2(number) {
    number=number.toString().split('').map(Number)
    if ((number[0]===2 || number[0]===3 || number[0]===5 || number[0]===7)&&(number[1]===2 || number[1]===3 || number[1]===5 || number[1]===7)) {
    return true;
    }
    if (number<10 && (number[0]===2 || number[0]===3 || number[0]===5 || number[0]===7)) {
        return true;
    }
    return false;
}

function filtrationArray(arr) {
    
    for (let i=0;i<arr.length;i++) {
        if (isProstX2(arr[i])) {
            arr.splice(i,1);
            i=0;
        }
    }
    return arr
}

const array = JSON.parse(JSON.stringify(mass));
const newArray=filtrationArray(array);

let button = document.querySelector('button');
button.onclick=function () {
    document.write('<p>Исходный массив: ' + mass.join(', ') + '</p>');
    document.write('<p>Новый массив: ' + newArray.join(', ') + '</p>');
}










