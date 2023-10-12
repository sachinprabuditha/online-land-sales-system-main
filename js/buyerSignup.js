function checkPassword() {
    var pass1 = document.getElementById("pswd1").value;
    var pass2 = document.getElementById("pswd2").value;

    if (pass1 !== pass2) {
        alert ("Password Mismatch!");
        return false;
    }
}

function enableButton() {
    var checkBox = document.getElementById("checkbox");

    if (checkBox.checked == true) {
        document.getElementById('btn').disabled = false;
    }
    else {
        document.getElementById('btn').disabled = true;
    }
}