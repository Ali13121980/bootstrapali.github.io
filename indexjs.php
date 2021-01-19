<!DOCTYPE html>
<html lang="en">

<head>
	<title>Doc</title>
    <meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' />
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        :root {
            --myfont: sans-serif;
            --my-btn-font: sans-serif;
            --lg-lightcolor: linear-gradient(to left, rgba(116, 235, 213, 0.6), rgba(159, 172, 230, 0.5));
            --lg-color: linear-gradient(to left, #74ebd5, #9face6);
            --bx-shd: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048);
        }

        body {
            background-image: var(--lg-lightcolor), url(images/img0.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            font-family: var(--myfont);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100vw;
        }

        div.container {
            background-color: #fff;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            box-shadow: var(--bx-shd);
            overflow: hidden;
            width: calc(100vw - 65vw);
            max-width: 100%;
        }

        div.header {
            background: var(--lg-color);
            padding: 30px 0;
        }

        form.form {
            padding: 40px;
        }

        div.form-control {
            margin-bottom: 30px;
            position: relative;
        }

        div.form-control label {
            display: inline-block;
            margin-bottom: 5px;
        }

        div.form-control input {
            width: 100%;
            border: 2px solid #f0f0f0;
            border-radius: 5px;
            display: block;
            font-family: var(--myfont);
            font-size: 14px;
            padding: 12px;
        }

        div.form-control input:focus {
            outline: 0;
            border-color: #777;
        }

        div.form-control.success input {
            border-color: #2ecc71;
        }

        div.form-control.error input {
            border-color: #e74c3c;
        }

        div.form-control i {
            position: absolute;
            right: 8px;
            top: 38px;
            visibility: hidden;
        }

        div.form-control.success i.fa-check-circle {
            color: #2ecc71;
            visibility: visible;
        }

        div.form-control.error i.fa-exclamation-circle {
            color: #e74c3c;
            visibility: visible;
        }

        div.form-control small {
            color: #e74c3c;
            position: absolute;
            left: 0;
            top: 101%;
            font-size: 13px;
            visibility: hidden;
        }

        div.form-control.error small {
            visibility: visible;
        }

        div.header h2 {
            color: #222;
            font-family: var(--my-btn-font);
            font-size: 24px;
            text-transform: uppercase;
            text-align: center;
        }

        form.form input.btn {
            background: var(--lg-color);
            border-radius: 6px;
            border: none;
            outline: none;
            color: #fff;
            display: block;
            font-family: var(--my-btn-font);
            cursor: pointer;
            font-size: 16px;
            padding: 15px 0;
            margin-top: 20px;
            width: 100%;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 1s ease;
        }

        form.form input.btn:hover {
            background: linear-gradient(to right, #74ebd5, #9face6);
        }

        @media(max-width: 998px) {
            div.container {
                width: calc(100vw - 35vw);
                max-width: 100%;
            }
        }
    </style>
    <div class="container">
        <div class="header">
            <h2>Registration Form</h2>
        </div>
        <form id="form" class="form">
            <div class="form-control">
                <label>Username</label>
                <input type="text" name="" id="username" placeholder="Enter Username" autocomplete="off">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Msg</small>
            </div>
            <div class="form-control">
                <label>Email</label>
                <input type="Email" name="" id="email" placeholder="Enter Email" autocomplete="off">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Msg</small>
            </div>
            <div class="form-control">
                <label>Mobile Number</label>
                <input type="Number" name="" id="phone" placeholder="Enter Number" autocomplete="off">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Msg</small>
            </div>
            <div class="form-control">
                <label>Password</label>
                <input type="password" name="" id="password" placeholder="Enter password" autocomplete="off">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Msg</small>
            </div>
            <div class="form-control">
                <label>Confirm Password</label>
                <input type="password" name="" id="cpassword" placeholder="Enter confirm password" autocomplete="off">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Msg</small>
            </div>
            <input type="submit" value="Submit" class="btn">
        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

    const form = document.getElementById("form");
    const username = document.getElementById("username");
    const email = document.getElementById("email");
    const phone = document.getElementById("phone");
    const password = document.getElementById("password");
    const cpassword = document.getElementById("cpassword");

    //add event

    form.addEventListener("submit", (event) => {
        event.preventDefault();
        validate();
    })

    //send data fun

    const sendData = (usernameVal, sRate, count) => {
        if (sRate === count) {
            alert("Registration Successful!  " + usernameVal);
            swal({
                title: "Signed in!",
                text: "Registration Successful!  " + usernameVal,
                icon: "success",
                button: "Ok!",
            });
            location.href = `services.php`;
        }
    }

    //data validation final 

    const successMsg = (usernameVal) => {
        let formCon = document.getElementsByClassName("form-control");

        var count = formCon.length - 1;

        for (var i = 0; i < formCon.length; i++) {
            if (formCon[i].className === "form-control success") {
                var sRate = 0 + i;
                console.log(sRate);
                sendData(usernameVal, sRate, count);
            } else {
                return false;
            }
        }
    }

    //more email validate
    const isEmail = (emailVal) => {
        var atSymbol = emailVal.indexOf("@");
        if (atSymbol < 1) return false;
        var dot = emailVal.lastIndexOf(".");
        if (dot <= atSymbol + 3) return false;
        if (dot === emailVal.length - 1) return false;
        return true;
    }

    //define the validate function

    const validate = () => {
        const usernameVal = username.value.trim();
        const emailVal = email.value.trim();
        const phoneVal = phone.value.trim();
        const passwordVal = password.value.trim();
        const cpasswordVal = cpassword.value.trim();

        //validate username

        if (usernameVal === "") {
            setErrorMsg(username, "Username cannot be blank");
        } else if (usernameVal.length <= 2) {
            setErrorMsg(username, "Username min 3 charecters");
        } else if (usernameVal.length > 18) {
            setErrorMsg(username, "Username max 18 charecters");
        } else {
            setSuccessMsg(username);
        }

        // validate email

        if (emailVal === "") {
            setErrorMsg(email, "Email cannot be blank");
        } else if (!isEmail(emailVal)) {
            setErrorMsg(email, "Not a Valid Email");
        } else {
            setSuccessMsg(email);
        }

        // validate phone

        if (phoneVal === "") {
            setErrorMsg(phone, "Phone cannot be blank");
        } else if (phoneVal.length != 10) {
            setErrorMsg(phone, "Not a Valid phone number");
        } else {
            setSuccessMsg(phone);
        }

        // validate password

        if (passwordVal === "") {
            setErrorMsg(password, "Password cannot be blank");
        } else if (passwordVal.length <= 5) {
            setErrorMsg(password, "Password minimum 6 charecters");
        } else {
            setSuccessMsg(password);
        }

        // validate cpassword

        if (cpasswordVal === "") {
            setErrorMsg(cpassword, "Confirm password cannot be blank");
        } else if (passwordVal !== cpasswordVal) {
            setErrorMsg(cpassword, "Passwords are not matching");
        } else {
            setSuccessMsg(cpassword);
        }

        successMsg(usernameVal);
    }

    function setErrorMsg(input, errormsgs) {
        const formControl = input.parentElement;
        const small = formControl.querySelector("small");
        formControl.className = "form-control error"
        small.innerText = errormsgs;
    }

    function setSuccessMsg(input) {
        const formControl = input.parentElement;
        formControl.className = "form-control success"
    }
    </script>
</body>

</html>