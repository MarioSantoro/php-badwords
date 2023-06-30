        <?php
        $paragraph = $_GET['paragraph'];
        $censuredWord = $_GET['censuredWord'];
        $paragraphCensured = str_replace($censuredWord, '***', $paragraph);
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>
            <div>
                <h1>La Frase è:</h1>
                <p>
                    <?php
                    echo $paragraph;
                    ?>
                </p>
                <h1>Lunghezza :</h1>
                <p>
                    <?php
                    echo strlen($paragraph);
                    ?>
                </p>
            </div>
            <div>
                <h1>La parola da censurare è:</h1>
                <p>
                    <?php
                    echo $censuredWord;
                    ?>
                </p>
            </div>

            <div>
                <h1>La Frase con la parola censurata è:</h1>
                <p>
                    <?php
                    echo $paragraphCensured;
                    ?>
                <h1>Lunghezza :</h1>
                <p>
                    <?php
                    echo strlen($paragraphCensured);
                    ?>
                </p>
                </p>
            </div>
        </body>

        </html>