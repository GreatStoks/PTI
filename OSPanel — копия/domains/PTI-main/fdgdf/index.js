
    
    but = document.getElementById('spisok_but');
    auth = document.querySelector('.auth');
    but_auth = document.getElementById('but_auth');
    but_reg = document.getElementById('but_reg');
    login_auth_text = document.getElementById('login_auth');
    password_auth_text = document.getElementById('password_auth');


    but.onclick = function () {
        var list = document.getElementById("spisok_uch_id");
        if (list.style.display === "none") {
            list.style.display = "block";
        } else {
            list.style.display = "none";
        }
    }

    but_auth.onclick = function () {
        if (checkLoginAndPassword()) {
            alert('DA');
        }
        else alert('NET');
    }
    var dataPphp = document.querySelector('.data-php').getAttribute('data-attr');
if (dataPphp == 1) {
    alert('DA');
}