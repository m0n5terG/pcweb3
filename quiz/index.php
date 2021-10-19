<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Fruktur&display=swap" rel="stylesheet">

</head>

<body>
    <div id="page-wrap">
        <form id="start-quiz" method="post" action="test.php">
            <div class="overlay index">
                <div class="quiz-overlay"></div>
                <h1 class="index-headline">Do you have good sense of humour?</h1>
                <p class="index-sell">Evidence suggests laughter changes your brain so that you become smarter, friendlier and more satisfied with life.</p>
                <label for="name"></label>
                <input class="input" type="text" id="name" name="name" required placeholder="Enter your name here" />

                <input type="submit" id="submit" class="take-quiz-btn index-btn" value="Take The Quiz" />
            </div>
        </form>
        <?php
        include("foot.php")
        ?>
    </div>
</body>

</html>