<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Team 3 CSS -->
    <link rel="stylesheet" href="css/template.css">

</head>

<body>
<?php require('header.php'); ?>

<section>
    <!-- carousel images -->
    <div id="euratechCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#euratechCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#euratechCarousel" data-slide-to="1"></li>
            <li data-target="#euratechCarousel" data-slide-to="2"></li>
        </ol>
        <!-- The slideshow -->
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x150" alt="first slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x150" alt="second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x150" alt="third slide">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#euratechCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#euratechCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- carousel chiffres clé-->
    <div class="container mt-5">
        <div id="keyFigures" class="carousel slide" data-ride="carousel" data-interval="5000" data-wrap="true">
            <!-- The slideshow -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item text-center active">
                    <p>wow really?!</p>
                </div>
                <div class="carousel-item text-center">
                    <p>I didn't know that!</p>
                </div>
                <div class="carousel-item text-center">
                    <p>You learn something new every day</p>
                </div>
                <div class="carousel-item text-center">
                    <p>This is the best key figure yet</p>
                </div>
                <div class="carousel-item text-center">
                    <p>good one. I wonder what's next</p>
                </div>
                <div class="carousel-item text-center">
                    <p>crazy figures!</p>
                </div>
            </div>
        </div>
    </div>

</section>>


<!--section plan+texte-->
<hr>
<br>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-11">
                <div class="media">
                    <img class="align-self-start mr-5" src="https://via.placeholder.com/350x150" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0">Euratechnologies</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require('footer.php'); ?>


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!--Old script (popper) that did not appear in the new documentation that I just put here between-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>