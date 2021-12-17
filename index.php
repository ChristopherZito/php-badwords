<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <!-- 
    Creare una variabile con un paragrafo di testo a vostra scelta. 
    Stampare a schermo il paragrafo e la sua lunghezza. (vedi le funzioni stringhe nelle sliedes)
    [OPZIONALE] 
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, 
    dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    -->
    
</head>
<body>
    
    <?php 

        $x = "I'm sitting here in a boring room
        It's just another rainy Sunday afternoon
        I'm wasting my time I got nothing to do
        I'm hanging around I'm waiting for you
        But nothing ever happens
        And I wonder";

        $car = strlen($x);
    ?>
    <section class="container">
        <h1>
            <?php echo $x?>
            
        </h1>
        <h2>
            Lunghezza strofa: <?php echo $car ?>
        </h2>
    </section>
    
</body>
</html>