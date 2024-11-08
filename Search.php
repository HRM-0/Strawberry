<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        :root {
            --vh: 100vh / 100;
        }

        * {
            padding: 0%;
            margin: 0%;
            font-family: figtree;
            color: #353635;
        }

        body {
            background-color: #fafafa;
            display: grid;
            grid-template-rows: 50px 1fr 60px;
            min-height: 100vh;
            color: #353635;
            fill: #353635;
        }

        #nav {
            width: 100%;
            place-self: center;
            position: fixed;
            bottom: 0;
            padding: 16px;
            background-color: #ffffff;
            color: #fff;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            max-width: 700px;
            box-sizing: border-box;
        }

        #nav img {
            height: 24px;
            width: auto;
        }

        header {
            padding: 7px 32px;
            border-bottom: solid 1px #dbdbdb;
        }

        main {
            display: flex;
            gap: 20px;
            flex-direction: column;
        }

        #searchbar {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            width: 612px;
            background-color: #e1e0e0;
            height: 40px;
            gap: 10px;
            place-self: center;
            border-radius: 75px;
            box-sizing: border-box;
        }

        #searchbar input {
            height: 40px;
            width: 500px;
            background: none;
            border: none;
        }

        #searchbar svg {
            fill: #b0b0b0;
            height: 20px;
            background: none;
            border: none;
        }

        #searchbar input:focus-visible {
            outline: none;
        }



        #imagesgrid img {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        #imagesgrid {
            place-self: center;
            width: 612px;
            columns: 3;
            gap: 20px;
        }

        @media only screen and (max-width: 760px) {
            #searchbar {
                width: calc(100svw - 30px);
            }

            #imagesgrid {
                width: calc(100svw - 30px);
            }

            #nav {
                width: calc(100svw - 30px);
            }

            #nav img {
                height: 20px;
                width: auto;
            }

            #searchbar input {
                width: calc(100% - 50px);
            }
        }
    </style>
    <header>
        <h1
            style="font-family: Salsa; background-image: linear-gradient(to right, #FB2943, #EDCB96); width: fit-content; background-clip: text; -webkit-text-fill-color: transparent; font-size: 29px;">
            Strawberry</h1>
    </header>
    <main>
        <div id="searchbar">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <g class="nc-icon-wrapper" fill="#353635">
                    <path
                        d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                    </path>
                </g>
            </svg>
            <form action=""><input type="text" placeholder="search"></form>
        </div>
        <div id="imagesgrid">
            <div><img src="Images/new/pexels-gabby-k-5331080.jpg" alt=""></div>
            <div><img src="Images/new/pexels-koolshooters-7142747.jpg" alt=""></div>
            <div><img src="Images/new/pexels-koolshooters-7142749.jpg" alt=""></div>
            <div><img src="Images/new/pexels-koolshooters-7142756.jpg" alt=""></div>
            <div><img src="Images/new/pexels-koolshooters-7142792.jpg" alt=""></div>
            <div><img src="Images/new/pexels-koolshooters-7142759.jpg" alt=""></div>
            <div><img src="Images/new/pexels-samiro-2041832.jpg" alt=""></div>
            <div><img src="Images/new/pexels-samantha-billotte-173740530-22468584.jpg" alt=""></div>
            <div><img src="Images/new/pexels-luizclas-170497-1848565.jpg" alt=""></div>
            <div><img src="Images/new/pexels-love-bluetea-400570939-27545223.jpg" alt=""></div>
            <div><img src="Images/new/pexels-lilen-diaz-1025474869-28357757.jpg" alt=""></div>
            <div><img src="Images/new/pexels-koolshooters-8989453.jpg" alt=""></div>
            <div><img src="Images/new/pexels-koolshooters-8976561.jpg" alt=""></div>
            <div><img src="Images/new/pexels-koolshooters-8974283.jpg" alt=""></div>
            <div><img src="Images/new/pexels-koolshooters-7683158.jpg" alt=""></div>
        </div>
    </main>
    <div id="nav">
        <a href="" data-tooltip="Home"><img src="Images/Menu-Button-Item.svg" alt="" srcset=""></a>
        <a href="" data-tooltip="Search"><img src="Images/Group.svg" alt="" srcset=""></a>
        <a href="" data-tooltip="Messages"><img src="Images/Menu-Button-Item-1.svg" alt="" srcset=""></a>
        <a href="" data-tooltip="Create Post"><img src="Images/Menu-Button-Item-2.svg" alt="" srcset=""></a>
        <a href="" data-tooltip="Notification"><img src="Images/Menu-Button-Item-4.svg" alt="" srcset=""></a>
        <a href="">
            <div style="
            height: 24px;
            width: 24px;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(Images/pexels-northern-28283491.jpg);"></div>
        </a>
    </div>
</body>

</html>