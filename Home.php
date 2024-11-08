<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <style>
        * {
            padding: 0%;
            margin: 0%;
            font-family: figtree;
            color: #353635;
            fill: #353635;
        }

        body {
            display: grid;
            align-items: center;
            background-color: #fafafa;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
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

        #status {
            display: flex;
            flex-direction: column;
        }

        #statusPicB {
            height: 66px;
            width: 66px;
            border: 2.5px solid #60D394;
            border-radius: 100%;
            display: grid;
            place-content: center;

        }

        #statpic {
            border-radius: 100%;
            height: 56px;
            width: 56px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        #statusgroup {
            display: flex;
            gap: 14px;
            overflow-x: hidden;
            border: 1px #C0C0C0 solid;
            padding: 17px 21px;
            background-color: #fff;
            white-space: nowrap;
        }

        #status p {
            text-align: center;
            text-wrap: nowrap;
            width: 72px;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 12px;
        }

        #statusWrapper {
            width: 612px;
            position: relative;
        }

        #statusWrapper svg {
            top: 50%;
            width: 12px;
            border: #353635 1px solid;
            height: auto;
            background-color: #fff;
            border-radius: 100%;
            padding: 0px 6px;
            cursor: pointer;
            position: absolute;
        }

        #moveleft {
            left: 0%;
            transform: translate(-50%, -50%);
        }

        #moveright {
            left: 100%;
            transform: translate(-50%, -50%);
        }

        #post {
            box-sizing: border-box;
            width: 612px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: #C0C0C0 1px solid;
            margin-bottom: 50px;
        }

        #postHeaderPicB {
            height: 42px;
            width: 42px;
            border: 2.5px solid #60D394;
            border-radius: 100%;
            display: grid;
            place-content: center;

        }

        #postHeader {
            display: flex;
            width: 612px;
            box-sizing: border-box;
            justify-content: space-between;
            padding: 9px 16px;
            border: 1px #efefef solid;
        }

        #postHeaderpic {
            border-radius: 100%;
            height: 32px;
            width: 32px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        #postHeadertext {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        #postHeadertext p {
            font-size: 14px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        #postimg img {
            width: 612px;
        }

        #likeCommentShare {
            display: flex;
            gap: 16px;
        }

        #postBtn {
            display: flex;
            box-sizing: border-box;
            padding: 0px 16px 0px 24px;
            justify-content: space-between;
        }

        #likestext {
            display: flex;
            font-weight: 700;
            font-size: 14px;
        }

        #likesLikedBy,
        #likesNameDesc {
            display: flex;
            gap: 4px;
            text-wrap: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        #likedby,
        #description,
        #commentCount {
            color: #808180;
            font-size: 14px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        #postText {
            gap: 5px;
            margin-left: 16px;
        }

        #commentInput {
            display: flex;
            align-items: center;
            padding: 14px 16px;
            border-top: #C0C0C0 1px solid;
            gap: 16px;
        }

        #commentInput input {
            width: 100%;
            height: 40px;
            border: none;
            background: none;
        }

        #commentInput input:focus-visible {
            outline: none;
        }

        #commentSubmit {
            background: none;
            border: none;
            color: #FB2943;
            font-weight: 600;
        }

        #postBottom {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        @media only screen and (max-width: 721px) {
            #nav img {
                height: 20px;
                width: auto;
            }

            #statusWrapper {
                width: calc(100dvw - 25.6px);
            }

            #post {
                width: 100dvw;
            }

            #postimg img {
                width: 100dvw;
            }

            #postHeader {
                width: 100dvw;
            }
        }
    </style>
    <header>
        <h1
            style="font-family: Salsa; background-image: linear-gradient(to right, #FB2943, #EDCB96); width: fit-content; background-clip: text; -webkit-text-fill-color: transparent; font-size: 29px; align-self: start;">
            Strawberry</h1>
    </header>

    <main>
        <div id="statusWrapper">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" id="moveleft">
                <g class="nc-icon-wrapper">
                    <path
                        d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z">
                    </path>
                </g>
            </svg>

            <div id="statusgroup">
                <div id="status">
                    <div id="statusPicB">
                        <div id="statpic" style="background-image: url('Images/pexels-agneselunecka-20409572.jpg');">
                        </div>
                    </div>
                    <p>your story</p>
                </div>
                <div id="status">
                    <div id="statusPicB">
                        <div id="statpic" style="background-image: url('Images/pexels-cre8ivengine-9767204.jpg');">
                        </div>
                    </div>
                    <p>dan-da-dan</p>
                </div>
                <div id="status">
                    <div id="statusPicB">
                        <div id="statpic" style="background-image: url('Images/pexels-interwebly-27902293.jpg');"></div>
                    </div>
                    <p>your story</p>
                </div>
                <div id="status">
                    <div id="statusPicB">
                        <div id="statpic"
                            style="background-image: url('Images/pexels-lvu-image-1599405908-28570315.jpg');">
                        </div>
                    </div>
                    <p>your story</p>
                </div>
                <div id="status">
                    <div id="statusPicB">
                        <div id="statpic"
                            style="background-image: url('Images/pexels-mert-coskun-386432351-28223459.jpg');"></div>
                    </div>
                    <p>your story</p>
                </div>
                <div id="status">
                    <div id="statusPicB">
                        <div id="statpic" style="background-image: url('Images/pexels-northern-28283491.jpg');"></div>
                    </div>
                    <p>your story</p>
                </div>
                <div id="status">
                    <div id="statusPicB">
                        <div id="statpic" style="background-image: url('Images/pexels-rajaalemnari-20543294.jpg');">
                        </div>
                    </div>
                    <p>your story</p>
                </div>
                <div id="status">
                    <div id="statusPicB">
                        <div id="statpic"
                            style="background-image: url('Images/pexels-ruxandra-scutelnic-1470184397-27091195.jpg');">
                        </div>
                    </div>
                    <p>your story</p>
                </div>
                <div id="status">
                    <div id="statusPicB">
                        <div id="statpic" style="background-image: url('Images/pexels-interwebly-27902293.jpg');"></div>
                    </div>
                    <p>your story</p>
                </div>
            </div>


            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" id="moveright">
                <g class="nc-icon-wrapper" fill="#F7F7F7">
                    <path
                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                    </path>
                </g>
            </svg>
        </div>

        <div id="post">
            <div id="postHeader">
                <div id="postHeadertext">
                    <div id="postHeaderPicB">
                        <div id="postHeaderpic"
                            style="background-image: url('Images/pexels-agneselunecka-20409572.jpg');">
                        </div>
                    </div>
                    <p>terrylucas</p>
                    <p>2hrs ago</p>
                </div>
                <img src="Images/More.svg" alt="" srcset="">
            </div>

            <div id="postBottom">
                <div id="postimg">
                    <img src="Images/pexels-mert-coskun-386432351-28223459.jpg" alt="">
                </div>

                <div id="postBtn">
                    <div id="likeCommentShare">
                        <img src="Images/Icons/Lİke.svg" alt="" srcset="">
                        <img src="Images/Icons/Comment.svg" alt="" srcset="">
                        <img src="Images/Icons/SharePosts.svg" alt="" srcset="">
                    </div>
                    <img src="Images/Icons/Save.svg" alt="" srcset="">
                </div>


                <div id="postText">
                    <div id="likesLikedBy">
                        <div id="likestext">
                            <p>1069</p>
                            <pre> likes</pre>
                        </div>
                        <p id="likedby">Liked you and 1,068 others</p>
                    </div>
                    <div id="likesNameDesc">
                        <div id="likestext">
                            <p>terrylucas</p>
                        </div>
                        <p id="description">Happy birthday Shirley</p>
                    </div>
                    <p id="commentCount">View all 100 comments</p>
                </div>

                <form action="" id="commentInput">
                    <img src="Images/Icons/Emoji.svg" alt="">
                    <input type="text" placeholder="Add a comment.." name="comment" id="">
                    <button id="commentSubmit">Post</button>
                </form>
            </div>

        </div>
        <div id="post">
            <div id="postHeader">
                <div id="postHeadertext">
                    <div id="postHeaderPicB">
                        <div id="postHeaderpic"
                            style="background-image: url('Images/pexels-agneselunecka-20409572.jpg');">
                        </div>
                    </div>
                    <p>terrylucas</p>
                    <p>2hrs ago</p>
                </div>
                <img src="Images/More.svg" alt="" srcset="">
            </div>

            <div id="postBottom">
                <div id="postimg">
                    <img src="Images/Screenshot (12).png" alt="">
                </div>

                <div id="postBtn">
                    <div id="likeCommentShare">
                        <img src="Images/Icons/Lİke.svg" alt="" srcset="">
                        <img src="Images/Icons/Comment.svg" alt="" srcset="">
                        <img src="Images/Icons/SharePosts.svg" alt="" srcset="">
                    </div>
                    <img src="Images/Icons/Save.svg" alt="" srcset="">
                </div>


                <div id="postText">
                    <div id="likesLikedBy">
                        <div id="likestext">
                            <p>1069</p>
                            <pre> likes</pre>
                        </div>
                        <p id="likedby">Liked you and 1,068 others</p>
                    </div>
                    <div id="likesNameDesc">
                        <div id="likestext">
                            <p>terrylucas</p>
                        </div>
                        <p id="description">Happy birthday Shirley</p>
                    </div>
                    <p id="commentCount">View all 100 comments</p>
                </div>

                <form action="" id="commentInput">
                    <img src="Images/Icons/Emoji.svg" alt="">
                    <input type="text" placeholder="Add a comment.." name="comment" id="">
                    <button id="commentSubmit">Post</button>
                </form>
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
    </div>
    <script>
        const statusSlider = document.getElementById("statusgroup");

        let isDragStart = false, prevPageX, prevScrollLeft;

        const dragStart = (e) => {
            isDragStart = true;
            prevPageX = e.pageX;
            prevScrollLeft = statusSlider.ScrollLeft
        }

        const dragging = (e) => {
            if (!isDragStart) return;
            e.preventDefault();
            let positionDiff = e.pageX - prevPageX;
            statusSlider.scrollLeft = prevScrollLeft - positionDiff;
        }

        const dragStop = () => {
            isDragStart = false;
        }

        statusSlider.addEventListener("mousedown", dragStart)
        statusSlider.addEventListener("mousemove", dragging)
        statusSlider.addEventListener("mouseup", dragStop)
    </script>
</body>

</html>