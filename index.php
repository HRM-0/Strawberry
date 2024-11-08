<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strawberry</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: figtree;
        }
        body {
            display: grid;
            align-items: center;
            background-color: #fafafa;
        }

        a {
            text-decoration: none;
            color: #020402;
            font-family: Poppins;
            font-size: 15px;
        }

        #header {
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 20px 64px;
        }

        #header img {
            width: 45px;
            height: 40px;
        }

        #header svg {
            display: none;
        }

        #header a {
            text-decoration: none;
            color: #020402;
            font-family: Poppins;
            font-size: 15px;
            margin-left: 32px;
        }

        #intro {
            display: flex;
            width: 242px;
            flex-direction: column;
        }

        #hero {
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-left: 80px;
        }

        #text {
            margin-top: 144px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #020402;
            font-family: Poppins;
        }

        h1 {
            margin-top: 16px;
            margin-bottom: 32px;
            font-size: 48px;
        }

        h2 {
            font-size: 29px;
            align-self: flex-end;
            padding-right: 14px;
        }

        h6 {
            font-size: 15px;
        }

        #input {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
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

        #img {
            display: flex;
            flex-direction: row;
            margin-top: 32px;
        }

        #img img {
            margin-left: 24px;
            margin-top: 24px;
        }

        #footer {
            display: flex;
            align-items: center;
            margin-top: 56px;
            margin-left: 80px;
        }

        @media only screen and (max-width: 1217px) {
            #img {
                display: flex;
                flex-direction: column;
                margin-top: 32px;
            }
        }

        @media only screen and (max-width: 1059px) {
            #hero {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-left: 80px;
            }

        }

        @media only screen and (max-width: 774px) {
            #header svg {
                display: block;
            }

            #header nav {
                display: none;
            }

            #img {
                display: flex;
                margin-top: 32px;
                align-items: center;
            }

            footer {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                margin-top: 56px;
                margin-left: 80px;
            }

            #hero img {
                height: 400px;
                width: auto;
            }
        }

        #errEmail,
        #errPassword {
            height: 20px;
            color: #FF6F30;
            font-size: 10px;
            align-items: center;
        }
    </style>
    <header id="header">
        <a href=""><img src="Images/2981-removebg-preview.png" alt=""></a>

        <nav>
            <a href="">Features</a>
            <a href="">Destop App</a>
            <a href="">Privacy & Safety</a>
            <a href="">For Developers</a>
        </nav>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <g class="nc-icon-wrapper" fill="#020402">
                <rect x="1" y="11" width="22" height="2" fill="#020402" stroke-width="0" data-color="color-2"></rect>
                <rect x="1" y="4" width="22" height="2" stroke-width="0" fill="#020402"></rect>
                <rect x="1" y="18" width="22" height="2" stroke-width="0" fill="#020402"></rect>
            </g>
        </svg>
    </header>
    <div id="hero">
        <div id="content">
            <div id="text">
                <div id="intro">
                    <h2>INTRODUCING</h2>
                    <h1
                        style="font-family: Salsa; background-image: linear-gradient(to right, #FB2943, #EDCB96); width: fit-content; background-clip: text; -webkit-text-fill-color: transparent;">
                        Strawberry</h1>
                </div>
                <p>Strawberry makes it easy and fun to stay close to <br> your favourite people.</p>
            </div>



            <form id="input" action="" method="post">

                <input type="text" class="inputt" name="" id="email" placeholder="Email address or phone number ">
                <p id="errEmail"></p>

                <input type="password" class="inputt" name="" id="password" placeholder="Password">
                <p id="errPassword"></p>

                <button id="submitBtn" type="submit">Login</button>

            </form>


            <div id="img">
                <img src="Images/Microsoft store.png" style="width: 144.78px; height: 52px;" alt="" srcset="">
                <img src="Images/badge-en (1).svg" style="width: 156px; height: 52px;" alt="" srcset="">
                <img src="Images/badge-en.svg" style="width: 169px; height: 52px;" alt="" srcset="">
            </div>

        </div>

        <img src="Images/120973513_338186077283942_8148888802958728934_n.png"
            style="justify-self: flex-end; width: 578px; height: 609px;" alt="" srcset="">


    </div>

    <footer>

        <h6>© Demo 2024.</h6>

        <p style="margin-left: 40px; font-size: 15px;">The Apple and Google Play logos are trademarks of their
            respective owners.</p>

    </footer>

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

</body>

</html>