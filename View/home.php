<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DWIT</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#"><img src="../assets/img/svg/cancel.svg" alt="Add a dwit">Add a dwit</a></li>
                <li><a href="#"><img src="../assets/img/logo.png" alt="Logo de DWIT"></a></li>
                <li>
                    <ul>
                        <li><a href="#"><img src="../assets/img/svg/magnifying-glass.svg" alt="Search">Search</a></li>
                        <li><a href="#"><img src="../assets/img/svg/chat-2.svg" alt="Notifications">Notification</a></li>
                        <li><a href="#"><img src="../assets/img/svg/avatar.svg" alt="Account">My account</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <section class="hot-challenge">
        <h1>Hot Challenge</h1>
        <div class="wrapper">
        <article>
            <h2>Subway bag <span>challenge</span></h2>
            <img src="../assets/img/image1.png" alt="Image 1">
            <div class="author-article">
                <h3>Author : Jean Bon</h3>
                <p>28/05/2016</p>
            </div>
            <ul>
                <li>
                    <ul>
                        <li>16<img src="../assets/img/svg/like.svg" alt="Success"></li>
                        <li>23<img src="../assets/img/svg/dislike.svg" alt="Fail"></li>
                    </ul>
                </li>
                <li>Musical<img src="../assets/img/svg/headphones.svg" alt="Category"></li>
                <li>112<img src="../assets/img/svg/heart.svg" alt="Like"></li>
            </ul>
        </article>
        <article>
            <h2>GIF <span>challenge</span></h2>
            <img src="../assets/img/image2.gif" alt="Image 2">
            <div class="author-article">
                <h3>Author : Jean Bon</h3>
                <p>29/05/2016</p>
            </div>
            <ul>
                <li>
                    <ul>
                        <li>16<img src="../assets/img/svg/like.svg" alt="Success"></li>
                        <li>23<img src="../assets/img/svg/dislike.svg" alt="Fail"></li>
                    </ul>
                </li>
                <li>Art<img src="../assets/img/svg/headphones.svg" alt="Category"></li>
                <li>112<img src="../assets/img/svg/heart.svg" alt="Like"></li>
            </ul>
        </article>
        <article>
            <h2>Yann's head <span>challenge</span></h2>
            <img src="../assets/img/image3.png" alt="Image 3">
            <div class="author-article">
                <h3>Author : Jean Bon</h3>
                <p>30/05/2016</p>
            </div>
            <ul>
                <li>
                    <ul>
                        <li>16<img src="../assets/img/svg/like.svg" alt="Success"></li>
                        <li>23<img src="../assets/img/svg/dislike.svg" alt="Fail"></li>
                    </ul>
                </li>
                <li>Wtf!?<img src="../assets/img/svg/headphones.svg" alt="Category"></li>
                <li>112<img src="../assets/img/svg/heart.svg" alt="Like"></li>
            </ul>
        </article>
        </div>
    </section>
    <!--End of Hot Challenge Section-->
    <section class="recent-challenge">
        <h1>Recent challenges</h1>
    </section>
    <!--End of Recent Challenge Section-->
    <section class="add-dwit">
        <form action="" id="addDwit">
            <fieldset>
                <!--DATE-->
                <label for="date">Date</label>
                <input type="date" name="date" id="date">
                <!--AUTHOR-->
                <label for="author">Author</label>
                <input type="text" name="author" id="author" placeholder="Nickname">
                <!--TITLE-->
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Your title" required>
                <!--DESCRIPTION-->
                <label for="description">Description of your challenge:</label>
                <textarea id="description" name="description" form="addDwit" placeholder="Your description" required></textarea>
                <!--CATEGORIES-->
                <label>Categories:</label>
                <label><input type="radio" name="category" id="art" value="art"><img src="../assets/img/picto/art.svg" alt="Art">Art</label>
                <label><input type="radio" name="category" id="cooking" value="cooking"><img src="../assets/img/picto/cooking.svg" alt="Cooking">Cooking</label>
                <label><input type="radio" name="category" id="crafting" value="crafting"><img src="../assets/img/picto/crafting.svg" alt="Crafting">Crafting</label>
                <label><input type="radio" name="category" id="dance" value="dance"><img src="../assets/img/picto/dance.svg" alt="Dance">Dance</label>
                <label><input type="radio" name="category" id="gaming" value="gaming"><img src="../assets/img/picto/gaming.svg" alt="Gaming">Gaming</label>
                <label><input type="radio" name="category" id="musical" value="musical"><img src="../assets/img/svg/headphones.svg" alt="Musical">Musical</label>
                <label><input type="radio" name="category" id="sport" value="sport"><img src="../assets/img/picto/sport.svg" alt="Sport">Sport</label>
                <label><input type="radio" name="category" id="wtf!?" value="wtf!?"><img src="../assets/img/picto/weird.svg" alt="WTF!?">WTF!?</label>
                <!--BUTTON-->
                <input type="submit" value="Add my challenge">
            </fieldset>
        </form>
    </section>
    <!--End of Add a DWIT Section-->
    <script src="../bower_components/angular/angular.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
