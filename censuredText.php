<?php
$badWord = $_GET['badWord'];
$paragraph = $_GET['paragraph'];

$strleng = strlen($paragraph);
$withoutSpaces = str_ireplace(" ", "", $paragraph);
$strlengWSpaces = strlen($withoutSpaces);

$censuredParagraph = str_ireplace($badWord, '<span class="text-danger fw-bold fs-5">***</span>', $paragraph);
$censuredleng = str_ireplace('<span class="text-danger fw-bold fs-5">***</span>', "", $censuredParagraph);
$strlengCensuredLeng = strlen($censuredleng);

$intStrleng = (int)$strleng;
$intCensuredleng = (int)$strlengCensuredLeng;

$calc = $intStrleng - $intCensuredleng;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CensuredBadWords</title>
</head>

<body>
    <main>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Questo paragrafo contiene: <?php echo $strleng; ?> caratteri (spazi inclusi) e <?php echo $strlengWSpaces; ?> caratteri (spazi esclusi)</h2>
                        <p class="my-3">
                            <?php echo $paragraph; ?>
                        </p>
                        <h2>Questo paragrafo CENSURATO contiene: <?php echo $strleng; ?> caratteri (spazi inclusi), <?php echo $strlengWSpaces; ?> caratteri (spazi esclusi) e <?php echo $calc; ?> caratteri censurati 🤬🙉</h2>
                        <p class="my-3">
                            <?php echo $censuredParagraph; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>