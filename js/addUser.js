function checkPassword() {
    var pass1 = document.getElementById("pswd1").value;
    var pass2 = document.getElementById("pswd2").value;

    if (pass1 !== pass2) {
        alert ("Password Mismatch!");
        return false;
    }
}
