// function formValidation() {

//     var uname = document.registration.name;
//     var passid = document.registration.pass;
//     var uadd = document.registration.add;




//     // var ucountry = document.registration.country;
//     // var uzip = document.registration.zip;
//     // var uemail = document.registration.email;
//     // var umsex = document.registration.msex;
//     // var ufsex = document.registration.fsex;

//     if (passid_validation(passid, 7, 12)) {
//         if (allLetter(uname)) {
//             if (alphanumeric(uadd)) {

//             }
//         }
//     }

//     return false;
// }

function phonenumber(inputtxt) {
    var phoneno = /^\d{10}$/;
    if ((inputtxt.value.match(phoneno))) {

        return true;
    }


    else {
        alert("Phone number is invalid");
        return false;
    }
}