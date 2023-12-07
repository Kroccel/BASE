let button = document.querySelector('button');
let input1 = document.querySelector('.credit');
let input2 = document.querySelector('.limite');

button.onclick = function () {
     for (let i = 1; i <= 10000000000; i++) {
        let a = input1.value;
        let b = input2.value;
        a = a * 1.2**i;
        if(a>=b) {
            alert('Через '+i+' лет сумма долга '+input1.value+' тысяч рублей превысит '+b+ ' тысяч рублей');
            break;
        }
      }
}