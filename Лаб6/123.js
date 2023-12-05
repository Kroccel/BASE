function valid(form) {
    function removeError(input) {
        const parent = input.parentNode;
        if(parent.classList.contains('error')) {
            parent.querySelector('.error-label').remove();
            parent.classList.remove('error')
        }

    }

    function createError(input,text) {
        const parent = input.parentNode;
        const errorLabel = document.createElement('label');
        errorLabel.classList.add('error-label');
        errorLabel.textContent = text;
        parent.classList.add('error');
        parent.append(errorLabel)

    }


    let result = true;
    const allInputs = form.querySelectorAll('input');
    for (const input of allInputs) {
        removeError(input);
        if(input.value==="") {
        createError(input);
        result = false
        }
    }
    return result
}
const form = document.getElementById('333');
form.addEventListener('submit', saveArticle);
function saveArticle(event) {
    event.preventDefault();
    var namer = form.namer.value;
    var sname = form.sname.value;
    var ot = form.ot.value;
    var email = form.email.value;
    var info = form.info.value;
    var date = form.date.value;
    let language='Не владею';
    function checkCheckbox() {
        const checkbox1 = document.getElementById('4');
        if (checkbox1.checked) {
          language='Английский';
        }
        const checkbox2 = document.getElementById('5');
        if (checkbox2.checked) {
          language='Китайский';
        }
        const checkbox3 = document.getElementById('6');
        if (checkbox3.checked) {
          language='Корейский';
        }
        const checkbox4 = document.getElementById('7');
        if (checkbox4.checked) {
          language='Испанский'; 
        }
        
        const checkbox5 = document.getElementById('8');
        if (checkbox5.checked) {
          language='Французский';
        }
        if(checkbox1.checked && checkbox2.checked) {
            language='Английский + Китайский'
        }
        if(checkbox1.checked && checkbox3.checked) {
            language='Английский + Корейский'
        }
        if(checkbox1.checked && checkbox4.checked) {
            language='Английский + Испанский'
        }
        if(checkbox1.checked && checkbox5.checked) {
            language='Английский + Французский'
        }
        if(checkbox2.checked && checkbox3.checked) {
            language='Китайский + Корейский'
        }
        if(checkbox2.checked && checkbox4.checked) {
            language='Китайский + Испанский'
        }
        if(checkbox2.checked && checkbox5.checked) {
            language='Китайский + Французский'
        }
        if(checkbox3.checked && checkbox4.checked) {
            language='Корейский + Испанский'
        }
        if(checkbox3.checked && checkbox5.checked) {
            language='Корейский + Французский'
        }
        if(checkbox4.checked && checkbox5.checked) {
            language='Испанский + Французский'
        }
        if(checkbox1.checked && checkbox2.checked && checkbox3.checked) {
            language='Английский + Китайский + Корейский'
        }
        if(checkbox1.checked && checkbox2.checked && checkbox4.checked) {
            language='Английский + Китайский + Испанский'
        }
        if(checkbox1.checked && checkbox2.checked && checkbox5.checked) {
            language='Английский + Китайский + Французский'
        }
        if(checkbox1.checked && checkbox3.checked && checkbox4.checked) {
            language='Английский + Корейский + Испанский'
        }
        if(checkbox1.checked && checkbox3.checked && checkbox5.checked) {
            language='Английский + Корейский + Французский'
        }
        if(checkbox1.checked && checkbox4.checked && checkbox5.checked) {
            language='Английский + Испанский + Французский'
        }
        if(checkbox2.checked && checkbox3.checked && checkbox4.checked) {
            language='Китайский + Корейский + Испанский'
        }
        if(checkbox2.checked && checkbox3.checked && checkbox5.checked) {
            language='Китайский + Корейский + Французский'
        }
        if(checkbox2.checked && checkbox4.checked && checkbox5.checked) {
            language='Китайский + Испанский + Французский'
        }
        if(checkbox3.checked && checkbox4.checked && checkbox5.checked) {
            language='Корейский + Испанский + Французский'
        }
        if(checkbox1.checked && checkbox2.checked && checkbox3.checked && checkbox4.checked) {
            language='Английский + Китайский + Корейский + Испанский'
        }
        if(checkbox1.checked && checkbox2.checked && checkbox3.checked && checkbox5.checked) {
            language='Английский + Китайский + Корейский + Французский'
        }
        if(checkbox2.checked && checkbox3.checked && checkbox4.checked && checkbox5.checked) {
            language='Китайский + Корейский + Испанский + Французский'
        }
        if(checkbox1.checked && checkbox3.checked && checkbox4.checked && checkbox5.checked) {
            language='Английский + Корейский + Испанский + Французский'
        }
        if(checkbox1.checked && checkbox2.checked && checkbox4.checked && checkbox5.checked) {
            language='Английский + Китайский + Испанский + Французский'
        }
        if(checkbox1.checked && checkbox2.checked && checkbox3.checked && checkbox4.checked && checkbox5.checked) {
            language='Английский + Китайский + Корейский + Испанский + Французский'
        }
        return language;
    }
    language=checkCheckbox();
    var lvl =form.lvl.value;
    
    if(valid(this)===true) {
        alert("Имя: " + namer + "\nФамилия: " + sname + "\nОтчество: " + ot + "\nПочта: " + email + "\nВозраст: " + date + "\nВладею иностранными языками: " + language + "\nОценка уровня владения языком C++: " + lvl +"/10" +  "\nО себе: " + info);
        event.target.reset();
    }
}










