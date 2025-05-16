function vadidate() {
    let fname = document.getElementById('fname').value;
    let email = document.getElementById('email').value;
    let pass = document.getElementById('pass').value;
    let cpass = document.getElementById('cpass').value;
    let loc = document.getElementById('loc').value;
    let zipcode = document.getElementById('zipcode').value;
    let checkbox = document.getElementById('checkbox').checked;

    const nameRegex = /^[A-Za-z\s]+$/;
    const emailRegex = /^\d{2}-\d{5}-\d{1}@student\.aiub\.edu$/;
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;

    if (fname == "" || email == "" || pass == "" || cpass == "" || loc == "" || zipcode == "") {
        document.getElementById('error').innerHTML = "*Please all the field fill first";
        return false;
    }

    if (!nameRegex.test(fname)) {
        document.getElementById('error').innerHTML = "*Number is not allowed";
        return false;
    }
    if (!checkbox) {
        document.getElementById('error').innerHTML = "*Please accept terms and conditions..";
        return false;
    }

    if(!emailRegex.test(email)) {
        document.getElementById('error').innerHTML = "*Email should be xx-xxxxx-x@student.aiub.edu formate";
        return false;
    }

    if(!passwordRegex.test(pass)) {
        document.getElementById('error').innerHTML = "*Password must be at least 8 characters";
        return false;
    }

    if(pass != cpass) {
        document.getElementById('error').innerHTML = "*Passwod doesn't matched";
        return false;
    }

    const errorElement = document.getElementById('error');
    errorElement.innerHTML = "Form submitted successfully!!";
    errorElement.classList.add("box");    

    // alert("Form submitted sucessfully!!");

    return true;
}