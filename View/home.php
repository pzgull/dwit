<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DWIT</title>
    <!--Import materialize.css-->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link type="text/css" rel="stylesheet" href="../bower_components/Materialize/dist/css/materialize.min.css"  media="screen,projection"/>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#"><img src="../assets/img/svg/cancel.svg" alt="Add a dwit">Add a dwit</a></li>
                <li>
                    <a href="#"><img src="../assets/img/logo.png" alt="Logo de DWIT"></a>
                    <div></div>
                </li>
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
        <h1>Hot <span>Challenge</span></h1>
        <div class="wrapper">
            <a href="">
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
                                <li>16<i class="icon-like"></i></li>
                                <li>23<i class="icon-dislike"></i></li>
                            </ul>
                        </li>
                        <li>Musical<i class="icon-headphones-orange"></i></li>
                        <li>112<i class="icon-heart"></i></li>
                    </ul>
                </article>
            </a>
            <a href="">
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
                                <li>16<i class="icon-like"></i></li>
                                <li>23<i class="icon-dislike"></i></li>
                            </ul>
                        </li>
                        <li>Musical<i class="icon-headphones-orange"></i></li>
                        <li>112<i class="icon-heart"></i></li>
                    </ul>
                </article>
            </a>
            <a href="">
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
                                <li>16<i class="icon-like"></i></li>
                                <li>23<i class="icon-dislike"></i></li>
                            </ul>
                        </li>
                        <li>Musical<i class="icon-headphones-orange"></i></li>
                        <li>112<i class="icon-heart"></i></li>
                    </ul>
                </article>
            </a>
        </div>
    </section>
    <!--End of Hot Challenge Section-->
    <section class="recent-challenge">
        <h1>Recent <span>challenges</span></h1>
    </section>
    <!--End of Recent Challenge Section-->
    <section class="add-dwit">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="title" type="text" class="validate" required>
                        <label for="title">Title of your challenge</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <textarea id="description" class="materialize-textarea" required></textarea>
                        <label for="description">Describe your challenge</label>
                    </div>
                </div>
                <!--CATEGORIES-->
                <p>Categories:
                    <label><input type="radio" name="category" id="art" value="art"><i class="icon-art"></i>Art</label><!--ART-->
                    <label><input type="radio" name="category" id="cooking" value="cooking"><i class="icon-cooking"></i>Cooking</label><!--COOKING-->
                    <label><input type="radio" name="category" id="crafting" value="crafting"><i class="icon-crafting"></i>Crafting</label><!--CRAFTING-->
                    <label><input type="radio" name="category" id="dance" value="dance"><i class="icon-dance"></i>Dance</label><!--DANCE-->
                    <label><input type="radio" name="category" id="gaming" value="gaming"><i class="icon-gaming"></i>Gaming</label><!--GAMING-->
                    <label><input type="radio" name="category" id="musical" value="musical"><i class="icon-headphones"></i>Musical</label><!--MUSICAL-->
                    <label><input type="radio" name="category" id="sport" value="sport"><i class="icon-sport"></i>Sport</label><!--SPORT-->
                    <label><input type="radio" name="category" id="wtf!?" value="wtf!?"><i class="icon-weird"></i>WTF!?</label><!--WTF-->
                </p>
                <!--BUTTON-->
                <input type="submit" value="Add my challenge" class="waves-effect waves-light btn">
            </form>
        </div>
    </section>
    <!--End of Add a DWIT Section-->
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../bower_components/Materialize/dist/js/materialize.min.js"></script>
</body>
</html>