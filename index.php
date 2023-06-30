<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./server.php" method="get">
        <div>
            <div>
                <label for="paragraph">Inserisci una frase</label>
            </div>
            <textarea name="paragraph" id="paragraph" cols="30" rows="5"></textarea>
        </div>
        <div>
            <div>
                <label for="censuredWord">Inserisci una parola da censurare</label>
            </div>
            <input type="text" name="censuredWord">
        </div>

        <input type="submit" value="Invia">
    </form>
</body>

</html>