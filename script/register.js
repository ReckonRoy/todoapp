/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function validateRegistration(form)
{
    alert("watsup");
    name_fail = validateName(form.name.value);
    surname_fail = validateSurname(form.surname.value);
    username_fail = validateUsername(form.username.value);
    pwd_fail = validatePassword(form.password.value);
    cpwd_fail = validateCpassword(form.cpassword.value, form.password.value);
    email_fail = validateEmail(form.email.value);
    
    if( name_fail === "" && surname_fail === "" && username_fail === "" && pwd_fail === "" && cpwd_fail === "" && email_fail === "")
    {
        return true;
    }else
    {
        var nameEl = document.getElementById('msgName');
        nameEl.style.color = 'red';
        nameEl.textContent = name_fail;
        
        var surnameEl = document.getElementById('msgSurname');
        surnameEl.style.color = 'red';
        surnameEl.textContent = surname_fail;
        
        var usernameEl = document.getElementById('msgUsername');
        usernameEl.style.color = 'red';
        usernameEl.textContent = username_fail;
        
        var passwordEl = document.getElementById('msgPassword');
        passwordEl.style.color = 'red';
        passwordEl.textContent = pwd_fail;
        
        var c_pwdEl = document.getElementById('msgconfirm');
        c_pwdEl.style.color = 'red';
        c_pwdEl.textContent = cpwd_fail;
        
        var emailEl = document.getElementById('msgEmail');
        emailEl.style.color = 'red';
        emailEl.textContent = email_fail;
        
        return false;
    }
}



function validateName(field)
{
    if (field === "")
    {
        return "No Firstname was entered.\n";
    }else if(/[^a-zA-Z]/.test(field))
    {
        return "invalid Name\n";
    }
        return "";
}

function validateSurname(field)
{
    
    if(field === "")
    {
        return textContent = "No Surname was entered";
    }else if(/[^a-zA-Z]/.test(field))
    {
        return "invalid Name\n";
    }
    return "";
}

function validateUsername(field)
{

    if(field === "")
    {
        return "No Username was entered.\n";
    }else if(field.length < 5)
    {
        return "Username is too short.\n";
    }else if(/[^a-zA-Z0-9_-]/.test(field))
    {
        return "invalid Username\n";
    }
    
    return "";    
}

function validatePassword(field)
{
    if(field === "")
    {
        return "No Password was entered.\n";
    }else if(field.length < 6)
    {
        return "Passwords must be at least 6 characters.\n"; 
    }else if(!/[a-z]/.test(field) || ! /[A-Z]/.test(field) || !/[0-9]/.test(field))
    {
        return "invalid password ";
    }
    
    return "";
}

function validateCpassword(field, field2)
{
    if(field === "")
    {
        return "No Password was entered.\n";
    }else if(field.length < 6)
    {
        return "Passwords must be at least 6 characters.\n"; 
    }else if( field !== field2)
    {
        return "passwords do not match";
    }
    
    return "";
}

function validateEmail(field)
{
    if(field === "")
    {
        return  "No Email was entered.\n";
    }else if(!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field))
    {
        return  "The Email address is invalid.\n";
    }
    return "";
}
    
