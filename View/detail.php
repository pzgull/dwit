<!doctype html>
<html lang="en" ng-app="diwit">
<head>
    <meta charset="UTF-8">
    <title>DWIT - Details</title>
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
            <li><a href="#" id="addadwit"><img src="../assets/img/svg/cancel.svg" alt="Add a dwit">Add a dwit</a></li>
            <li>
                <a href="../"><img src="../assets/img/logo.png" alt="Logo de DWIT"></a>
                <div></div>
            </li>
            <li>
                <ul>
                    <li><a href="#" id="search"><img src="../assets/img/svg/magnifying-glass.svg" alt="Search">Search</a></li>
                    <li><a href="#"><img src="../assets/img/svg/chat-2.svg" alt="Notifications">Notification</a></li>
                    <li><a href="#" id="account"><img src="../assets/img/svg/avatar.svg" alt="Account">My account</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<section class="add-dwit">
    <div class="row">
        <form action="/?a=add" method="post" id="addDwit" class="col s12">
            <!--TITLE-->
            <div class="row">
                <div class="input-field col s6">
                    <input id="title" name="titre" type="text" class="validate" required>
                    <label for="title">Title of your challenge</label>
                </div>
            </div>
            <!--DESCRIPTION-->
            <div class="row">
                <div class="input-field col s6">
                    <textarea id="description" name="description" class="materialize-textarea" required></textarea>
                    <label for="description">Describe your challenge</label>
                </div>
            </div>
            <!--CATEGORIES-->
            <div class="row categories">
                <p>Categories:
                    <label id="icon-art"><input type="radio" name="category" id="art" value="art"><i class="icon-art"></i>Art</label><!--ART-->
                    <label id="icon-cooking"><input type="radio" name="category" id="cooking" value="cooking"><i class="icon-cooking"></i>Cooking</label><!--COOKING-->
                    <label id="icon-crafting"><input type="radio" name="category" id="crafting" value="crafting"><i class="icon-crafting"></i>Crafting</label><!--CRAFTING-->
                    <label id="icon-dance"><input type="radio" name="category" id="dance" value="dance"><i class="icon-dance"></i>Dance</label><!--DANCE-->
                    <label id="icon-gaming"><input type="radio" name="category" id="gaming" value="gaming"><i class="icon-gaming"></i>Gaming</label><!--GAMING-->
                    <label id="icon-headphones"><input type="radio" name="category" id="musical" value="musical"><i class="icon-headphones"></i>Musical</label><!--MUSICAL-->
                    <label id="icon-sport"><input type="radio" name="category" id="sport" value="sport"><i class="icon-sport"></i>Sport</label><!--SPORT-->
                    <label id="icon-weird"><input type="radio" name="category" id="wtf!?" value="wtf!?"><i class="icon-weird"></i>WTF!?</label><!--WTF-->
                </p>
            </div>
            <div class="row">
                <div class="input-field col s9 offset-s5">
                    <input type="submit" value="Add my challenge" class="waves-effect waves-light btn">
                </div>
            </div>
        </form>
    </div>
</section>
<section class="search">
    <form action="">
        <div class="search-frame">
            <div class="search-for">
                <label for="searchFor">You are searching for:</label>
                <input type="search" id="searchFor">
            </div>
            <div class="sorted-by">
                <p>Sorted by:</p>
                <label for="byDate"><input type="radio" id="byDate">Date</label>
                <p>or</p>
                <label for="byLike"><input type="radio" id="byLike">Like</label>
            </div>
        </div>
        <div class="row categories">
            <p>Categories:
                <label id="icon-art"><input type="radio" name="category" id="art" value="art"><i class="icon-art"></i>Art</label><!--ART-->
                <label id="icon-cooking"><input type="radio" name="category" id="cooking" value="cooking"><i class="icon-cooking"></i>Cooking</label><!--COOKING-->
                <label id="icon-crafting"><input type="radio" name="category" id="crafting" value="crafting"><i class="icon-crafting"></i>Crafting</label><!--CRAFTING-->
                <label id="icon-dance"><input type="radio" name="category" id="dance" value="dance"><i class="icon-dance"></i>Dance</label><!--DANCE-->
                <label id="icon-gaming"><input type="radio" name="category" id="gaming" value="gaming"><i class="icon-gaming"></i>Gaming</label><!--GAMING-->
                <label id="icon-headphones"><input type="radio" name="category" id="musical" value="musical"><i class="icon-headphones"></i>Musical</label><!--MUSICAL-->
                <label id="icon-sport"><input type="radio" name="category" id="sport" value="sport"><i class="icon-sport"></i>Sport</label><!--SPORT-->
                <label id="icon-weird"><input type="radio" name="category" id="wtf!?" value="wtf!?"><i class="icon-weird"></i>WTF!?</label><!--WTF-->
            </p>
        </div>
        <div class="button-search">
            <input type="submit" value="Search" class="waves-effect waves-light btn">
        </div>
    </form>
</section>
<!--End of Add a DWIT Section-->
<section class="account">
    <div class="row">
        <form class="col s12 offset-s1" action="/?a=connect" method="post">
            <div class="row">
                <div class="input-field col s10">
                    <input id="login" type="text" class="validate" name="pseudo" required>
                    <label for="login">Login</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10">
                    <input id="password" type="text" class="validate" name="password" required>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input type="submit" value="Connect" class="waves-effect waves-light btn">
                </div>
            </div>
        </form>
    </div>
</section>
<!--End of Account Section-->
    <section class="details-challenge" ng-controller="DetailController">
        <div class="inner-details">
            <h1> {{ details.titre }} <span>CHALLENGES</span></h1>
            <div class="wrapper-details">
                <div class="photo-frame">
                    <figure>
                        <img src="../assets/img/image1.png" alt="Photo of challenge">
                    </figure>
                    <div class="succeed" ng-click="addSuccess()">
                        <h2>Succeed</h2>
                        <p> {{ details.success }} <i class="icon-like"></i></p>
                    </div>
                    <div class="failed" ng-click="addFailed()">
                        <h2>Failed</h2>
                        <p> {{ details.failed }} <i class="icon-dislike"></i></p>
                    </div>
                </div>
                <div class="text-frame">
                    <div class="content-frame">
                        <h2>Author: <span>{{ details.author }}</span></h2>
                        <h2>Published on: <span>{{ details.date | date: 'dd/MM/yyyy' }}</span></h2>
                        <h2>Category: <span><i class="icon-headphones-yellow"></i>{{ details.name }}</span></h2>
                    </div>
                    <div class="buttons">
                        <button class="btn waves-effect waves-light" ng-click="addLike()">I like it<i class="icon-heart"></i></button>
                        <button class="btn waves-effect waves-light">Share it <i class="icon-share"></i></button>
                    </div>
                </div>
                <div class="description-frame">
                    <h2>Description:</h2>
                    <p>{{ details.description }}</p>
                </div>
        </div>
        </div>
        <div class="arrow-down"></div>
    </section>
    <section class="challengers">
        <div class="inner-details">
            <h1>Challengers</h1>
            <div class="wrapper-details">
                <article>
                    <img src="../assets/img/image1.png" alt="Photo du challenger">
                    <div class="button-succeed">
                        <h2>Succeed</h2>
                        <p>+1 <i class="icon-like"></i></p>
                    </div>
                    <div class="button-failed">
                        <h2>Failed</h2>
                        <p>-1 <i class="icon-dislike"></i></p>
                    </div>
                </article>
                <article>
                    <img src="../assets/img/image1.png" alt="Photo du challenger">
                    <div class="button-succeed">
                        <h2>Succeed</h2>
                        <p>+1 <i class="icon-like"></i></p>
                    </div>
                    <div class="button-failed">
                        <h2>Failed</h2>
                        <p>-1 <i class="icon-dislike"></i></p>
                    </div>
                    <div class="challenger-frame">
                        <p>16<i class="icon-like-green"></i></p>
                        <div>
                            <h3>David Poche</h3>
                            <p>32/10/2016</p>
                        </div>
                        <p>23<i class="icon-dislike-red"></i></p>
                    </div>
                </article>
            </div>
        </div>
    </section>
<footer>
    <nav>
        <ul>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Copyright DWIT ©2016</a></li>
            <li><a href="#">Privacy Notice</a></li>
        </ul>
    </nav>
</footer>
<!--Import jQuery before materialize.js-->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/Materialize/dist/js/materialize.min.js"></script>
<script src="../bower_components/angular/angular.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/controller/detailController.js" charset="utf-8"></script>
<script src="../assets/js/scripts.js"></script>

</body>
</html>
