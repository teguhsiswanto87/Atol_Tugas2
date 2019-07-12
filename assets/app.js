// untuk menampilkan dropdown dari jenis_kelamin
$('.ui.dropdown')
    .dropdown();

//validasi login
function loginAuth() {
    var username = document.formLogin.username.value.trim();
    var password = document.formLogin.password.value.trim();

    if (username.length < 4) {
        alert("Username minimal 4 karakter"); //kalau mau pakai alert
        // window.location.href = "index.php?error=7"; //ini pakai ?error=
        document.formLogin.username.focus();
        return false;
    }
    if (password.length < 4) {
        alert("Password minimal 4 karakter");
        // window.location.href = "index.php?error=7";
        document.formLogin.password.focus();
        return false;
    }

}

//validasi Module
function moduleValidation() {
    var module_name = document.formModule.module_name.value.trim();
    if (module_name.length == 0) {
        alert("Nama module tidak boleh kosong");
        // window.location.href = "index.php?error=7";
        document.formModule.module_name.focus();
        return false;
    }
}

//validasi Pengguna
function usersValidation() {
    var username = document.formUsers.username.value.trim();
    var email = document.formUsers.email.value.trim();
    var full_name = document.formUsers.full_name.value.trim();
    var position = document.formUsers.position.value.trim();
    var password = document.formUsers.password.value.trim();
    var confirmPassword = document.formUsers.confirmPassword.value.trim();

    if (username.length < 4) {
        alert("Username minimal 4 karakter");
        document.formUsers.username.focus();
        return false;
    }
    //jika userame mengandung spasi
    if (/\s/.test(username)) {
        alert("Username tidak boleh mengandung spasi");
        document.formUsers.username.focus();
        // usernameError.style.display = "block";
        return false;
    }
    //email pattern
    if (!/\S+@\S+\.\S+/.test(email)) {
        alert("Email tidak valid");
        document.formUsers.email.focus();
        return false;
    }
    //jika full_name kosong
    if (full_name.length == 0) {
        alert("Nama lengkap tidak boleh kosong");
        document.formUsers.full_name.focus();
        return false;
    }
    //jika posisi kosong
    if (position.length == 0) {
        alert("Posisi tidak boleh kosong");
        document.formUsers.position.focus();
        return false;
    }
    //jika password & confirmPassword kurang dari 4 karakter
    if (password.length < 4) {
        alert("password minimal 4 karakter");
        document.formUsers.password.focus();
        return false;
    } else if (confirmPassword.length < 4) {
        alert("Konfirmasi password minimal 4 karakter");
        document.formUsers.password.focus();
        return false;
    } else if (password !== confirmPassword && password.length !== confirmPassword.length) {
        alert("Password dan konfirmasinya tidak valid");
        document.formUsers.password.focus();
        return false;
    }
}

document.getElementById("password").classList.add("error");

//password & repeat password validation
function checkPass() {
    //element
    var message = document.getElementById("message");
    var confirmPassword = document.getElementById("confirmPasswordId");
    var password = document.getElementById("passwordId");

    if (document.getElementById("password").value
        == document.getElementById("confirmPassword").value) {
        password.classList.remove("error");
        confirmPassword.classList.remove("error");
        message.innerHTML = 'Password cocok';
        message.style.color = 'green';
    } else {
        message.style.color = 'red';
        password.classList.add("error");
        confirmPassword.classList.add("error");
        message.innerHTML = 'Konfirmasi password tidak valid';
    }
    return false;
};
