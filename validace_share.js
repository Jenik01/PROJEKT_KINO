function validate(doc)
{
    var inputs = [...doc.getElementsByTagName("input")];
    var required = inputs.filter(element => element.hasAttribute("required"));
    var email = document.getElementById("email");
   /* var age = document.getElementById("age");*/
   /* var datum = document.getElementById("datum");
    var password = document.getElementById("heslo");
    var hobby1 = document.getElementById("ch1");
    var hobby2 = document.getElementById("ch2");
    var hobby3 = document.getElementById("ch3");*/
    var result1 = validateRequired(required);
   /* var result2 = validateDatum(datum, age);*/
    var result3 = validateEmail(email);
    /*var result4 = validateHobby([hobby1, hobby2, hobby3]);*/
    /*var result5 = validatePassword(password);*/
    var res = result1 &&  result3;
    if(res)
    {
        console.log("OK");
    }

    return res;
}

function validateRequired(requiredElements)
{
    var result = requiredElements.some(el => el.value == "");
    if(result)
    {
        console.log("not all required elements are filled");
    }
    return !result;
}

/*function validateEmail(email)
{
    const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var result = pattern.test(email.value);
    if(!result){
        console.log("incorrect email format");
    }
    return result;*/
}

/*function validatePassword(password)
{
    if(!(password.value.length >= 16)){
        console.log("password is too short");
        return false;
    }
    return true;*/
}

