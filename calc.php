<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links/links.php' ?>
</head>

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
                    <a class="nav-link" aria-current="page" href="calc.php">Calculator</a>
				</li>	
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown"
                        aria-expanded="false">Other Sections</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown05">
                        <li><a class="dropdown-item" href="about.php">About</a></li>
                        <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                        <li><a class="dropdown-item" href="services.php">Booking</a></li>
                        <li><a class="dropdown-item" href="index.php">Home</a></li>
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

<body>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-image: url('images/cc5 nature.jpg');
        background-size: 100% 100%;
    }

    .centercalcy {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form.class-cal {
        width: 400px;
        height: 520px;
        box-shadow: 0 0 12px 4px #76538d;
    }

    #app_name {
        text-align: center;
        color: red;
        border-color: red;
        /* width: inherit;
    font-size: 0.8rem;
    padding: 2px 0 2px 10px;
    background-color: #303030;
    color: #fff;
    border: none;
    outline: none;
    font-family: sans-serif; */
    }

    #display_answer {
        width: inherit;
        height: 100px;
        background-color: #303030;
        font-size: 2rem;
        color: white;
        text-align: right;
        outline: none;
        border: none;
    }

    .layer1 {
        width: inherit;
        height: 90px;
        display: flex;
        justify-content: center;
    }

    .layer2 {
        width: inherit;
        height: 40px;
        display: flex;
        justify-content: center;
    }

    input.oper,
    input.main_num {
        flex: 1;
        font-size: 1.4rem;
        color: white;
        border: 1px solid #504f4f;
        outline: none;
    }

    .oper {
        background-color: #303030;
    }

    .main_num {
        background-color: #101011;
        color: white;
    }

    .layer2 #clear_button {
        font-size: 1rem;
    }

    input.oper:hover, input.main_num:hover {
        background-color: #474747;
        border: 1px solid grey;
    }
    </style>
    <div class="centercalcy">
        <form name="formcalci" class="class-cal">

            <h4 id="app_name">Windows Calculator</h4>

            <input type="text" name="answers" value="" id="display_answer">

            <div class="layer2">
                <input type="button" value="C" class="oper" id="clear_button" onclick="formcalci.answers.value = ''">
                <input type="button" value="=" class="oper"
                    onclick="formcalci.answers.value = eval(formcalci.answers.value) ">
            </div>

            <div class="layer1">
                <input type="button" name="" class="main_num" value="7" onclick="formcalci.answers.value += '7'">
                <input type="button" name="" class="main_num" value="8" onclick="formcalci.answers.value += '8'">
                <input type="button" name="" class="main_num" value="9" onclick="formcalci.answers.value += '9'">
                <input type="button" value="×" class="oper" onclick="formcalci.answers.value += '*'">
            </div>

            <div class="layer1">
                <input type="button" name="" class="main_num" value="4" onclick="formcalci.answers.value += '4'">
                <input type="button" name="" class="main_num" value="5" onclick="formcalci.answers.value += '5'">
                <input type="button" name="" class="main_num" value="6" onclick="formcalci.answers.value += '6'">
                <input type="button" value="+" class="oper" onclick="formcalci.answers.value += '+'">
            </div>

            <div class="layer1">
                <input type="button" name="" class="main_num" value="1" onclick="formcalci.answers.value += '1'">
                <input type="button" name="" class="main_num" value="2" onclick="formcalci.answers.value += '2'">
                <input type="button" name="" class="main_num" value="3" onclick="formcalci.answers.value += '3'">
                <input type="button" value="-" class="oper" onclick="formcalci.answers.value += '-'">
            </div>

            <div class="layer1">
                <input type="button" name="" class="oper" value="." onclick="formcalci.answers.value += '.'">
                <input type="button" name="" class="main_num" value="0" onclick="formcalci.answers.value += '0'">
                <input type="button" name="" class="oper" value="%" onclick="formcalci.answers.value += '%'">
                <input type="button" value="÷" class="oper" onclick="formcalci.answers.value += '/'">
            </div>
        </form>
    </div>
    <?php include 'redirect.php'; ?>
</body>

</html>