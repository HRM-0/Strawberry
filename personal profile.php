<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your profile</title>
</head>

<body>
    <style>
        * {
            padding: 0%;
            margin: 0%;
            font-family: figtree;
            color: #353635;
        }

        body {
            display: grid;
            align-items: center;
            background-color: #fafafa;
        }

        main {
            display: grid;
        }

        #editbtn {
            border: #dbdbdb 1px solid;
            background-color: transparent;
            padding: 6px 10px;
            cursor: pointer;
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
        }

        #nav img {
            height: 24px;
            width: auto;
        }

        header {
            padding: 7px 32px;
            border-bottom: solid 1px #dbdbdb;
        }


        #profile {
            gap: 20px;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .postno {
            display: flex;
            flex-direction: row;
        }

        #tag {
            gap: 40px;
            display: flex;
            flex-direction: row;
            font-size: 15px;
        }

        #prnopic {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        #profilepic {
            width: 150px;
            height: 150px;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        #profilec {
            margin: 20px 0 40px 0;
            display: flex;
            align-items: center;
            flex-direction: row;
            gap: 100px;
            justify-content: center;
        }

        #statuscover {
            width: 64px;
            height: 64px;
            overflow: hidden;
            border-radius: 100%;
            display: flex;
            justify-content: center;
        }

        #prof {
            display: flex;
            flex-direction: column;
            align-items: center;
            align-self: center;
            justify-self: center;
            justify-content: center;
        }

        #posts {
            margin-top: 16px;
            border-top: 1px solid #dbdbdb;
            display: flex;
            gap: 60px;
            justify-content: center;
        }

        #posts h6 {
            font-size: 12px;
            font-family: poppins;
            font-weight: 300;
            color: #808180;
            width: 32px;
            padding: 17px 12px;
            cursor: pointer;
        }

        #posts h6:hover {
            font-weight: 500;
            color: #353635;
        }

        #gallery {
            display: grid;
            width: 879px;
            grid-template-columns: 1fr 1fr;
            place-self: center;
        }

        .post {
            width: 293px;
            height: 293px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        #bio {
            width: 613px;
            font-size: 15px;
        }

        #downloadapp {
            display: flex;
            flex-direction: column;
            gap: 25px;
            align-self: center;
            align-items: center;
        }

        #downloadapp h5 {
            font-size: 18px;
            font-weight: 600;
        }

        #downloadapp h6 {
            font-size: 16px;
            font-weight: 400;
        }

        #applinks {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        #apptexts {
            display: flex;
            align-items: center;
            flex-direction: column;
            gap: 10px;
        }

        @media only screen and (max-width: 1000px) {
            main {
                display: grid;
            }

            #nav {
                width: 100%;
                place-self: center;
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 16px;
                background-color: #ffffff;
                color: #fff;
                display: flex;
                justify-content: space-between;
                flex-direction: row;
            }
        }

        @media only screen and (max-width: 890px) {
            #gallery {
                display: grid;
                width: 100%;
                height: fit-content;
                grid-template-columns: 1fr 1fr 1fr;
                place-self: center;
            }

            .post {
                width: 100%;
                height: 100%;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }

            #profilepic {
                width: 100px;
                height: 100px;
            }

            #bio {
                width: 400px;
                font-size: 12px;
            }
        }

        @media only screen and (max-width: 605px) {
            #tag {
                gap: 20px;
            }

            #profilec {
                gap: 50px;
            }
        }

        @media only screen and (max-width: 550px) {

            #profilec {
                gap: 25px;
            }

            #bio {
                width: 200px;
                font-size: 10px;
            }

            .postno {
                flex-direction: column;
            }
        }

        @media only screen and (max-width: 721px) {
            #nav img {
                height: 20px;
                width: auto;
            }
        }
    </style>
    <header>
        <h1
            style="font-family: Salsa; background-image: linear-gradient(to right, #FB2943, #EDCB96); width: fit-content; background-clip: text; -webkit-text-fill-color: transparent; font-size: 29px;">
            Strawberry</h1>
    </header>
    <main>
        <div id="prof">
            <div id="profilec">
                <div id="profilepic" style="background-image: url(Images/pexels-northern-28283491.jpg);">
                </div>
                <div id="prnopic">
                    <div id="profile">
                        <h2>king_stephen</h2>
                        <button id="editbtn">Edit Profile</button>
                        <img src="Images/Options.svg" alt="" srcset="">
                    </div>
                    <div id="tag">
                        <div class="postno">
                            <pre style="font-weight: 800;">9 </pre>
                            <p>
                                posts
                            </p>
                        </div>
                        <div class="postno">
                            <pre style="font-weight: 800;">10M </pre>
                            <p>followers</p>
                        </div>
                        <div class="postno">
                            <pre style="font-weight: 800;">1063 </pre> following
                        </div>
                    </div>
                    <p id="bio"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Laboriosam
                        laudantium, architecto, dolores dolorum
                        temporibus expedita accusamus soluta facilis officia, natus quasi. Amet unde sequi illum
                        asperiores
                        magni
                        similique optio, praesentium consequuntur cumque fugit facere iusto soluta culpa, dolores
                        veniam!
                    </p>
                </div>

            </div>
            <div id="postssel">
                <div id="posts">
                    <h6 style="border-top: 2px solid #262626; color: #262626; font-weight: 700;">Post</h6>
                    <h6>Reels</h6>
                    <h6>Tagged</h6>
                </div>
                <div id="gallery">
                    <img src="Images/donotimg.svg" alt="" srcset="">
                    <div id="downloadapp">
                        <div id="apptexts">
                            <h5>Start capturing and sharing your moments.</h5>
                            <h6>Get the app to share your first photo or video.</h6>
                        </div>
                        <div id="applinks">
                            <a href=""><img src="Images/GooglePlay.svg" alt="" srcset=""></a>
                            <a href=""><img src="Images/AppStore.svg" alt="" srcset=""></a>

                        </div>

                    </div>
                </div>
            </div>
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