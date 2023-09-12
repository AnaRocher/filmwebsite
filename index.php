<?php

$db_host="localhost";
$db_username="root";
$db_password="root";
$db_name="film_website";
$db_port="8889";

$pdo = new PDO("mysql:host=$db_host;dbname=$db_name;port=$db_port", $db_username, $db_password);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="page-intro">
        <div class="container">
            <p>Movies</p>
        </div>
    </div>

    <main>
        <header class="main-header">
            <div class="container clearfix">
                <img class="movie-poster" src="images/poster.jpg" alt="Spider-man: Homecoming" />

                <!-- user score 6/10 -> omzetten naar een cijfer met max 5 sterren en het aantal afdrukken -->
                <div class="score">
                    <div class="star"></div>
                    <div class="star"></div>
                    <div class="star"></div>
                </div>

                <h1 class="movie-title">Spider-man: Homecoming</h1>
                <p class="movie-synopsis">Peter Parker balances his life as an ordinary high school student in Queens
                    with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the
                    skies of New York City.</p>

                <div class="tag-list">
                    <a class="tag" href="#">marvel</a>
                    <a class="tag" href="#">spider-man</a>
                    <a class="tag" href="#">comics</a>
                </div>
            </div>
        </header>

        <div class="main-content">
            <div class="container clearfix">
                <div class="content">

                    <!-- Als de user score hoger is dan 8/10 -->
                    <div class="recommended">
                        This movie is highly recommended!
                    </div>
                    <!--  -->

                    <p>In the aftermath of Captain America: Civil War (2016), the fifteen-year-old sophomore and Tony
                        Stark's protégé, Peter Parker, finds himself back to his hometown of Queens, New York, trying to
                        juggle high school and his super-hero alter-ego. On pins and needles, waiting for his mentor to
                        give him a chance to prove his mettle and become an official Avenger, instead, Stark, intent on
                        protecting him, keeps Peter on a short leash, fearful that, one of these days, the boy may bite
                        off more than he can chew. And then, the Vulture, a winged super-criminal brandishing advanced
                        Chitauri weaponry, emerges, and of course, Parker sees his arrival as a golden opportunity to
                        demonstrate that he has what it takes to be part of the Earth's mightiest team of super-heroes.
                    </p>
                    <p>Is Spider-Man ready to be more than the neighbourhood's friendly, web-slinging defender?</p>

                    <div class="directors">
                        <p><b>Directors:</b> Jon Watts, Jonathan Goldstein</p>
                    </div>
                    <div class="actors">
                        <p><b>Actors:</b></p>
                        <table class="actors-table">
                            <tr>
                                <td class="actors-table-actor">Tom Holland</td>
                                <td class="actors-table-character">Peter Parker</td>
                            </tr>
                            <tr>
                                <td class="actors-table-actor">Michael Keating</td>
                                <td class="actors-table-character">Adrian Toomes</td>
                            </tr>
                            <tr>
                                <td class="actors-table-actor">Robert Downey Jr.</td>
                                <td class="actors-table-character">Tony Stark</td>
                            </tr>
                            <tr>
                                <td class="actors-table-actor">Marisa Tomei</td>
                                <td class="actors-table-character">May Parker</td>
                            </tr>
                        </table>
                    </div>
                    <div class="screenshots">
                        <img src="images/screenshot1.jpg" />
                        <img src="images/screenshot2.jpg" />
                        <img src="images/screenshot3.jpg" />
                        <img src="images/screenshot4.jpg" />
                    </div>
                </div>
                <aside class="reviews">
                    <h1>Reviews</h1>

                    <!-- Gemiddelde van alle scores -->
                    <p>User score: <b>6/10</b></p>

                    <article class="review">
                        <header class="review-header">
                            <h1 class="review-title">Lorem, ipsum.</h1>
                            <p class="review-author">Geschreven door <a href="mailto:blabla@test.com">blempens</a></p>
                            <p class="review-date">Gepubliceerd op <time>21-11-2021</time></p>
                        </header>
                        <div class="review-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, culpa cum. Et tempora
                                facilis necessitatibus quaerat nobis iste sint vitae.</p>
                        </div>
                        <div class="review-score">
                            6/10
                        </div>
                    </article>
                    <article class="review">
                        <header class="review-header">
                            <h1 class="review-title">Lorem, ipsum.</h1>
                            <p class="review-author">Geschreven door <a href="mailto:blabla@test.com">blempens</a></p>
                            <p class="review-date">Gepubliceerd op <time>21-11-2021</time></p>
                        </header>
                        <div class="review-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, culpa cum. Et tempora
                                facilis necessitatibus quaerat nobis iste sint vitae.</p>
                        </div>
                        <div class="review-score">
                            6/10
                        </div>
                    </article>
                </aside>
            </div>
        </div>
    </main>

    <footer class="main-footer">
        Movies - 2021 &copy; CVO De Verdieping
    </footer>

</body>

</html>