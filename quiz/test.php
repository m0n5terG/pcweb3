<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Humour Quiz</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Fruktur&display=swap" rel="stylesheet">
</head>

<body>
    <div id="page-wrap">
        <form action="result.php" method="post" id="quiz">
            <ul id="test-questions">
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Hello <?php echo $_POST["name"]; ?> </h3>

                    <h3>How many months have 28 days in them?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">a. 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">b. 12</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">c. 9</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld">d. 6</em></label>
                    </div>
                    <p class="quiz-progress">1 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>What is the main ingredient of Bombay Duck?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">a. Fish</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">b. Duck</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">c. Chicken</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld">d. Beef</label>
                    </div>
                    <p class="quiz-progress">2 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Uncle Choon's farm had a terrible storm hit and all but 7 sheep were killed. How many sheep are left?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">a. 0</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-6-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">b. 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc">c. 7</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld">d. 9</label>
                    </div>
                    <p class="quiz-progress">3 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>What gets wetter the more it dries?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">a. Swimsuit</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">b. Mug</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">c. Dryer</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld">d. Towel</label>
                    </div>
                    <p class="quiz-progress">4 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>If there's a bowl of 5 apples and you took away 3, how many do you have?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">a. 2</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">b. 3</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">c. 4</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">d. 5</label>
                    </div>
                    <p class="quiz-progress">5 of 5</p>
                </li>
                <li>

                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">Now it’s time to see your results...</h3>
                    <input type="submit" value="Submit Quiz" id="submit-quiz" />
                </li>
            </ul>
        </form>

        <?php
        include("foot.php")
        ?>

    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        (function($) {
            var timeout = null;
            var $mt = 0;
            $("#quiz .fwrd").click(function() {
                clearTimeout(timeout);
                timeout = setTimeout(function() {
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt);
                }, 333);
            });
        }(jQuery))
    </script>
</body>

</html>