<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php' ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mohammed Ali</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="about.php">About</a>
					</li>	
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown"
                            aria-expanded="false">Other Sections</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li><a class="dropdown-item" href="index.php">Home</a></li>
                            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                            <li><a class="dropdown-item" href="services.php">Booking</a></li>
                            <li><a class="dropdown-item" href="calc.php">Calculator</a></li>
                            <li><a class="dropdown-item" href="download.php">Downloads</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <input type="submit" value="Search" class="btn btn-outline-primary my-2 my-sm-0">
                </form>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1>Mohammed Ali :)</h1>
        <p>We the web developers. LIKE | SHARE | SUBSCRIBE.</p>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/cc1.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <h1 class="display-4">I am Mohammed Ali.</h1>
                    <p class="py-4">I am mohammed ali. I am code medium and student. I know PHP, mySQL, HTML, CSS,
                        Javascript.
                        I do coding every day.
                        My default code is HTML and CSS.</p>
                    <a href="about.php" class="btn btn-success"> Check more. </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'redirect.php'; ?>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@mohammedAli</p>
    </footer>
</body>

</html>