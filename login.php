<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body id="body">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: figtree;
        }

        #body {
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        #vnav {
            margin-top: 32px;
            margin-bottom: 41px;
        }

        #vnav a {
            text-decoration: none;
            color: #020402;
            font-family: Poppins;
            font-size: 15px;
            margin-left: 32px;
            align-items: center;
            justify-content: center;
        }

        #vnav a:hover {
            text-decoration: underline;
        }

        #imgg {
            margin-top: 93px;
        }

        #errdisplay {
            height: 18px;
            color: #FF6F30;
            margin-bottom: 24px;
        }

        #input {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            align-items: center;
        }

        .inputt {
            width: 352px;
            height: 56px;
            border: none;
            background-color: #F2F2F2;
            font-size: 15px;
            color: #808180;
            padding-left: 12px;
        }

        #submitBtn {
            width: fit-content;
            color: white;
            padding: 16px 48px;
            border: none;
            background-image: linear-gradient(to bottom right, #FB2943, #EDCB96);
            font-size: 15px;
            border-radius: 100px;
            margin-top: 20px;
            cursor: pointer;
        }

        #submitBtn:hover {
            background-image: linear-gradient(to bottom right, #F47A6D, #EDCB96);
            transition: 4s linear;
        }

        input[type="checkbox"] {
            height: 24px;
            width: 24px;
            border: 3px solid #020402;
            cursor: pointer;
        }

        #errEmail,
        #errPassword {
            height: 20px;
            color: #FF6F30;
            font-size: 10px;
            align-items: center;
        }

        #rm {
            display: flex;
            width: 157px;
            align-items: center;
            justify-content: space-around;
            margin-top: 28px;
            cursor: pointer;
        }

        label {
            font-size: 15px;
            color: #020402;
            font-family: Poppins;
            font-weight: 500;
            cursor: pointer;
        }

        svg {
            margin-bottom: 16px;
            display: none;
            margin-right: 24px;
        }

        @media only screen and (max-width: 620px) {
            #vnav {
                display: none;
            }

            svg {
                display: block;
            }
        }

        @media only screen and (max-width: 405px) {
            .inputt {
                width: 281.6px;
                height: 44.8px;
            }
        }
    </style>
    <img id="imgg" src="Images\2981-removebg-preview.png" width="auto" height="163px" alt="">
    <h1
        style="font-size: 48px; margin-bottom: 38px; font-family: Salsa; background-image: linear-gradient(to right, #FB2943, #EDCB96); width: fit-content; background-clip: text; -webkit-text-fill-color: transparent;">
        Strawberry</h1>
    <p id="errdisplay"></p>
    <form id="input" action="" method="post">

        <input type="text" name="" class="inputt" id="email" placeholder="Email address or phone number ">
        <p id="errEmail"></p>

        <input type="password" class="inputt" name="" id="password" placeholder="Password">
        <p id="errPassword"></p>

        <button id="submitBtn" type="submit">Login</button>

        <div id="rm"> <input type="checkbox" name="" id="rememberMe"> <label for="rememberMe">Remember Me</label></div>

    </form>
    <nav id="vnav">
        <a href="">Features</a>
        <a href="">Destop App</a>
        <a href="">Privacy & Safety</a>
        <a href="">For Developers</a>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="align-self: flex-end;" viewBox="0 0 16 16">
        <g class="nc-icon-wrapper" fill="black">
            <path
                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z">
            </path>
        </g>
    </svg>
</body>
<script>
    const form = document.getElementById('input');
    form.addEventListener('change', function (event) {
        event.preventDefault();

        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
        const errEmail = document.getElementById('errEmail');
        const errPassword = document.getElementById('errPassword');
        let submit = true;


        // Check if any field is empty
        if (email === '') {
            errEmail.innerHTML = 'This field is required';
            submit = false;
        } else {
            errEmail.innerHTML = '';
            submit = true;
        }

        if (password === '') {
            errPassword.innerHTML = 'This field is required';
            submit = false;
        } else {
            errPassword.innerHTML = '';
            submit = true;
        }

        // Check if password length is more than 8 characters
        if (password.length < 6) {
            errPassword.innerHTML = 'Passwords should be more than 6 characters';
            submit = false;
        } else {
            errPassword.innerHTML = '';
            submit = true;
        }
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
        const errEmail = document.getElementById('errEmail');
        const errPassword = document.getElementById('errPassword');
        let submit = true;


        // Check if any field is empty
        if (email === '') {
            errEmail.innerHTML = 'This field is required';
            submit = false;
        } else {
            errEmail.innerHTML = '';
            submit = true;
        }

        if (password === '') {
            errPassword.innerHTML = 'This field is required';
            submit = false;
        } else {
            errPassword.innerHTML = '';
            submit = true;
        }

        // Check if password length is more than 8 characters
        if (password.length < 6) {
            errPassword.innerHTML = 'Passwords should be more than 6 characters';
            submit = false;
        } else {
            errPassword.innerHTML = '';
            submit = true;
        }

        if (submit) {
            form.submit();
        }
    });

</script>

</html>