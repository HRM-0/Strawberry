<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stephen Asila's profile</title>
</head>

<body>
    <style>
        * {
            padding: 0%;
            margin: 0%;
            font-family: figtree;
        }

        main {
            display: grid;
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

        #followBtn {
            width: fit-content;
            color: white;
            padding: 6px 24px;
            border: none;
            background-image: linear-gradient(to bottom right, #FB2943, #EDCB96);
            font-size: 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        #submitBtn:hover {
            background-image: linear-gradient(to bottom right, #F47A6D, #EDCB96);
            transition: 4s linear;
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

        h6 {
            font-size: 12px;
            font-family: poppins;
            font-weight: 300;
            color: #808180;
            width: 32px;
            padding: 17px 12px;
            cursor: pointer;
        }

        h6:hover {
            font-weight: 500;
            color: #353635;
        }

        #gallery {
            display: grid;
            width: 879px;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
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

        @media only screen and (max-width: 890px) {
            main {
                display: grid;
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
                        <button id="followBtn">Follow</button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" class="nc-icon-wrapper">
                                <path stroke="#020402" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 12h.01M8 12h.01M16 12h.01"></path>
                            </g>
                        </svg>
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
                    <div class="post" style="background-image: url(Images/pexels-agneselunecka-20409572.jpg);"></div>
                    <div class="post" style="background-image: url(Images/pexels-cre8ivengine-9767204.jpg);"></div>
                    <div class="post" style="background-image: url(Images/pexels-interwebly-27902293.jpg);"></div>

                    <div class="post" style="background-image: url(Images/pexels-lvu-image-1599405908-28570315.jpg);">
                    </div>

                    <div class="post" style="background-image: url(Images/pexels-mert-coskun-386432351-28223459.jpg);">
                    </div>
                    <div class="post" style="background-image: url(Images/pexels-northern-28283491.jpg);"></div>
                    <div class="post" style="background-image: url(Images/pexels-rajaalemnari-20543294.jpg);"></div>
                    <div class="post"
                        style="background-image: url(Images/pexels-ruxandra-scutelnic-1470184397-27091195.jpg);"></div>
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