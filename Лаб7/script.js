function appendNumber(number) {
    var result = document.getElementById("result");
    result.value += number;
}

function appendOperator(operator) {
    var result = document.getElementById("result");
    result.value += operator;
}

function calculateResult() {
    var result = document.getElementById("result");
    try {
        result.value = eval(result.value);
    } catch (error) {
        result.value = "Error";
    }
}

function clearResult() {
    var result = document.getElementById("result");
    result.value = "";
}

function deleteLast() {
    var result = document.getElementById("result");
    result.value = result.value.slice(0, -1);
}