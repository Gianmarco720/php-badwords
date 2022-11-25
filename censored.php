<?php

$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];
$textlength = 'La lunghezza del testo è di ' . strlen($paragraph) . ' caratteri';

$newtext = str_ireplace($badword, '***', $paragraph);
$newlength = 'La lunghezza del testo censurato è di ' . strlen($newtext) . ' caratteri';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <main>
        <div class="container mt-5">
            <!-- Paragrafo senza censure -->
            <div class="mt-3 border border-2">
                <h1 class="text-success pb-3">Ecco il tuo testo senza censura</h1>
                <p class="fs-3 fw-semibold"><?php echo $paragraph ?></p>
                <h3 class="fw-normal"><?php echo $textlength ?></h3>
            </div>

            <!-- Paragrafo con censure -->
            <div class="mt-5 border border-2">
                <h1 class="text-danger pb-3">Ecco il tuo testo censurato</h1>
                <p class="fs-3 fw-semibold"><?php echo $newtext ?></p>
                <h3 class="fw-normal"><?php echo $newlength ?></h3>
            </div>
        </div>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>