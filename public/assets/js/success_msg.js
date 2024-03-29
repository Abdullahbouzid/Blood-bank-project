
var $timerMessage = 2000;

function checkDataDonation() {
    var nameVisitor = document.getElementById('Name_Visitor').value;
    var DOB = document.getElementById('DOB_Visitor').value;
    var Adds = document.getElementById('Adds_Visitor').value;
    var phone = document.getElementById('Ph_Visitor').value;
    var TOB = document.getElementById('TOB_Visitor').value;
    var gender = document.getElementById('Gender_Visitor').value;
    var DOD = document.getElementById('date').value;
    var nameCenter = document.getElementById('Name_Center').value;

    if (nameVisitor && phone && DOB && Adds && TOB && gender && DOD && nameCenter) {
        Swal.fire({
            title: "!احسنت",
            text: "تمت عملية ارسال البيانات بنجاح",
            icon: "success",
            showConfirmButton: false,
            timer: $timerMessage
        });
        return true;
    } else {
        Swal.fire({
            title: "! عذرا",
            text: "من فضلك قم بالتأكد من إدخال جميع البيانات المطلوبة ",
            icon: "warning",
            showConfirmButton: false,
            timer: $timerMessage
        });
        return false;
    }

}

function checkDataRequest() {
    var namePatient = document.getElementById('Name_Patient').value;
    var DOB = document.getElementById('DOB_Patient').value;
    var Adds = document.getElementById('Adds_Patient').value;
    var phone = document.getElementById('Phone_Patient').value;
    var TOB = document.getElementById('TOB_Patient').value;
    var gender = document.getElementById('Gander_Patient').value;
    var state = document.getElementById('State_of_Patient').value;

    if (namePatient && phone && DOB && Adds && TOB && gender && state) {
        Swal.fire({
            title: "!احسنت",
            text: "تمت عملية ارسال البيانات بنجاح",
            icon: "success",
            showConfirmButton: false,
            timer: $timerMessage
        });
        return true;
    } else {
        Swal.fire({
            title: "! عذرا",
            text: "من فضلك قم بالتأكد من إدخال جميع البيانات المطلوبة ",
            icon: "warning",
            showConfirmButton: false,
            timer: $timerMessage
        });
        return false;
    }

}

function checkData_CreateVisitor() {
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var dob = document.getElementById('DOB_Visitor').value;
    var adds = document.getElementById('adds').value;
    var phone = document.getElementById('phone').value;
    var tob = document.getElementById('TOB_Visitor').value;
    var gender = document.getElementById('gender').value;
    var password = document.getElementById('password').value;
    var password_again = document.getElementById('password_again').value;

    var emailErrorElement = document.getElementById('email-error');

    if (!username || !email || !dob || !adds ||
        !phone || !tob || !gender || !password || !password_again) {
        alert("من فضلك قم بالتأكد من إدخال جميع البيانات المطلوبة ");

        return false;
    }

    return true;

}

function checkMatchPassword() {
    const firstPass = document.getElementById("password").value;
    const secondPass = document.getElementById("password_again").value;
    const errorMessage = document.getElementById("password-error");


    if (firstPass !== secondPass) {
        errorMessage.style.color = "red";
        errorMessage.textContent = "كلمات المرور المدخلة غير متطابقة !";
        errorMessage.classList.remove("hidden");

        return false;
    } else {
        errorMessage.style.color = "green";
        errorMessage.textContent = "كلمات المرور المدخلة متطابقة";
        errorMessage.classList.add("hidden");

        return true;
    }
}

function checkData_LoginVisitor() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (!email || !password) {
        alert("أدخل بيانات تسجيل الدخول الخاصة بك");

        return false;
    }

    return true;

}

function checkData_LoginEmp() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (!email || !password) {
        alert("أدخل بيانات تسجيل الدخول الخاصة بك");

        return false;
    }

    return true;

}

function checkDataEmp() {
    var name = document.getElementById('Name').value;
    var adds = document.getElementById('Addrees').value;
    var email = document.getElementById('Email').value;
    var pass = document.getElementById('Password').value;
    var gender = document.getElementById('Gander').value;
    var dob = document.getElementById('DoB').value;
    var phone = document.getElementById('Phone').value;
    var bank_Name = document.getElementById('Bank_id').value;

    if (!name || !adds || !email || !pass || !gender ||
        !dob || !phone || !bank_Name) {
        alert("من فضلك قم بالتأكد من إدخال جميع البيانات المطلوبة ");

        return false;
    }

    return true;
}

function checkDataCenter() {
    var name = document.getElementById('Name').value;
    var adds = document.getElementById('Addrees').value;
    var bank_id = document.getElementById('Bank_id').value;

    if (!name || !adds || !bank_id) {
        alert("من فضلك قم بالتأكد من إدخال جميع البيانات المطلوبة ");

        return false;
    }

    return true;
}

function checkDataBank() {
    var name = document.getElementById('Name').value;
    var adds = document.getElementById('Addrees').value;

    if (!name || !adds) {
        alert("من فضلك قم بالتأكد من إدخال جميع البيانات المطلوبة ");

        return false;
    }

    return true;
}

