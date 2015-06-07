function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('confPassword');
    var register = document.getElementById('submit');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";

    if(pass1.value === pass2.value) {
        pass2.style.backgroundColor = goodColor;
        register.disabled = false;
    }
    else {
        pass2.style.backgroundColor = badColor;
        register.disabled = true;
    }

}  