var alertElement = document.getElementById("alertElement");

var formData = {
    firstname : "お名前（姓）",
    lastname  : "お名前（名）",
    email     : "メールアドレス",
    address   : "住所（都道府県のみ）",
    phone     : "電話番号",
    password  : "パスワード",
    passwordconfirm : "パスワード（確認用）"
}
function validateForm() {
    y = document.querySelectorAll('.register-form input');

    alertElement.innerHTML = '';    
    alertElement.classList.remove("active");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {        
        var elementName = y[i].getAttribute("name");
        // If a field is empty...
        if (y[i].value == '') {
            addMsg(elementName, "必須入力です。");             
            valid = false;     
            addError(y[i]);        
        }
        else {
            y[i].classList.remove("invalid");
        }
        // If a field name is email
        if(elementName == "email" && (!validateEmail(y[i].value)) && (y[i].value != '') ) {
            addMsg(elementName, "メールフォームです。");
            valid = false;
            addError(y[i]);
        }
        // If a field name is phone
        if(elementName == "phone" && (!validatePhone(y[i].value)) && (y[i].value != '') ) {
            addMsg(elementName, "番号を入力してください。");
            valid = false;
            addError(y[i]);
        }

        if(elementName == "password" &&  (!validatePassword()) && (y[i].value != '')) {
            valid = false;
            console.log()
            addError(y[i]);
        }

    }
    // If the valid status is true, mark the step as finished and valid:

    var width = window.outerWidth;
    if (valid) {
        if (width > 576)
            document.getElementsByClassName('step')[currentTab].className += ' finish';
        else
            document.getElementsByClassName('sp-step__item')[currentTab].className += ' finish';
        document.getElementsByClassName('sp-step__item')[currentTab].setAttribute('data-before', "✓");
    }
    return valid; // return the valid status
}

function validateEmail(value) {
    var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (value.match(regexEmail) == null) {
        return false;
    } else {
        return true;
    }
}

function validatePhone(value) {
    var regexPhone = /^[0-9]+$/;
    if (value.match(regexPhone) == null) {
        return false;
    } else {
        return true;
    }
}

function validatePassword() {
    var password = document.getElementById("password");
    var passwordconfirm = document.getElementById("passwordconfirm");
    if(password.value.length < 8){        
        var msg = "8以上お願いします。";
        addMsg("password", msg);
        return false;
    }
    else if(password.value != passwordconfirm.value){
        var msg = "パスワードの確認を正しくしてください。";
        addMsg("password", msg);
        return false;
    }
    return true;
}

function addMsg(elementName, msg) {     
    var p = document.createElement("p");
    p.append(formData[elementName] + ": " + msg);
    alertElement.append(p);
}

function addError(element) {
    // add an "invalid" class to the field:
    console.log(element);
    if(!element.classList.contains("invalid"))
        element.classList.toggle("invalid");
    // and set the current valid status to false

    if(!alertElement.classList.contains("active"))
    alertElement.classList.toggle("active");  
}