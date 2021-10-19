<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Quiz Results</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Fruktur&display=swap" rel="stylesheet">
</head>

<body>
    <div id="page-wrap">
        <h1 class="transparent index-headline">Do you have good sense of humour?</h1>

        <?php
        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];

        $total = 0;

        if ($answer1 == "B") {
            $total++;
        }

        if ($answer2 == "A") {
            $total++;
        }

        if ($answer3 == "C") {
            $total++;
        }

        if ($answer4 == "D") {
            $total++;
        }

        if ($answer5 == "B") {
            $total++;
        }

        ?>


        <div class="results-overlay">

            <?php
            if ($total >= 4) {
                echo '<div class="quiz-overlay result einstein"></div>
                        <div class="results-text">
                            <p class="you-chose">You Scored: </p>
                            <img src="https://ichef.bbci.co.uk/news/976/mcs/media/images/82399000/jpg/_82399978_75952740.jpg" alt="einstein!" class="results-img" />
                            <div class="results test-results2">
                                <p class="score">Einstein </p>
                                <p class="score-details">
                                    Albert Einstein attributed his brilliant mind to having a child-like sense of humour. Indeed, a number of studies have found an association between humour and intelligence.
                                </p>
                                <a id="replay" class="take-quiz-btn" href="test.php">Play Again?</a>
                            </div>';
                echo "<p>Your score: $total / 5</p>";
            } elseif ($total <= 2) {
                echo '<div class="quiz-overlay result humourless"></div>
                        <div class="results-text">
                            <p class="you-chose">You Scored: </p>
                            <img src="https://ih1.redbubble.net/image.2570468988.2512/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" alt="humourless" class="results-img" />
                            <div class="results test-results2">
                                <p class="score">Humourless</p>
                                <p class="score-details">
                                     Not to worry too much. If you lose one sense, your other sense are enhanced. That is why people with no sense of humour have an increased sense of self-importance.
                                </p>
                                <a id="replay" class="take-quiz-btn" href="test.php">Play Again?</a>
                            </div>';
                echo "<p>Your score: $total / 5</p>";
            } elseif ($total = 3) {
                echo '<div class="quiz-overlay result normal"></div>
                        <div class="results-text">
                            <p class="you-chose">You scored: </p>
                            <img src="https://cdn.boldomatic.com/content/post/CnDeaQ/Life-is-so-much-better-with-a-sense-of-humour?size=800" alt="normal" class="results-img" />
                            <div class="results test-results2">
                                <p class="score">Normal</p>
                                <p class="score-details">
                                    Laughter is a way to connect, and a good sense of humour can make ones smarter, healthier and better able to cope with challenges. Humour is what makes something funny.
                                </p>
                                <a id="replay" class="take-quiz-btn" href="test.php">Play Again</a>
                            </div>';
                echo "<p>Your score: $total / 5</p>";
            }

            ?>
        </div>
    </div>
    <?php
    include("foot.php")
    ?>