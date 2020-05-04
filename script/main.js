function refer()
{
    document.location.href = "register.php";
}
function validateLogin(form)
{  
    username_fail = validateUsername(form.username.value);
    pwd_fail = validatePassword(form.password.value);
    
    if(username_fail === "" && pwd_fail === "")
    {
        return true;
    }else
    {
        var usernameEl = document.getElementById('msgUsername');
        usernameEl.style.color = 'red';
        usernameEl.textContent = username_fail;
        
        var passwordEl = document.getElementById('msgPassword');
        passwordEl.style.color = 'red';
        passwordEl.textContent = pwd_fail;
        return false;
    }
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
