<?php
$lorem =                       
'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam assumenda quod tenetur excepturi, qui unde commodi velit alias, cum aut quia quisquam minima exercitationem expedita! Vel officia perspiciatis magnam temporibus!
Quibusdam ratione porro inventore repudiandae molestias officia possimus fugiat, eligendi pariatur unde odit soluta perferendis quidem impedit aspernatur sunt, doloremque tempora sit vel. Iste saepe sed numquam, suscipit quaerat incidunt.
Est nihil fugit, sunt cumque amet accusamus reprehenderit vero ipsam in repudiandae consequatur non, ex, excepturi totam? Laborum asperiores harum amet unde placeat id eaque, nihil perspiciatis culpa debitis odio.
Tempora recusandae placeat eveniet dolore ipsam illum dolor inventore debitis natus pariatur esse sint praesentium aperiam iusto excepturi non at perspiciatis, sequi illo! Accusamus perferendis excepturi quia sunt ad consequatur!
Ipsam atque enim aut dicta quas architecto magnam iusto cum nihil temporibus esse, eos quod porro facilis nisi rem, at corporis repudiandae explicabo! Dolores ullam necessitatibus, maxime dignissimos quisquam libero.
Quos corporis nesciunt natus, eum corrupti, numquam, veniam at aut facere inventore illo omnis cupiditate ducimus cumque quam eveniet tenetur modi distinctio voluptate repudiandae dolor sequi! Temporibus a qui mollitia.
Quidem harum ratione suscipit consequatur earum laborum veniam sed dignissimos optio repellat quibusdam libero, sequi voluptatem id enim eaque minima saepe! Fugiat beatae rem ea accusamus, dignissimos eos magnam cumque?
Ab, placeat tempore! Illum commodi minima pariatur modi dolor, doloremque, iste atque animi aliquam delectus voluptatem! Nesciunt veritatis ipsum amet debitis ullam explicabo, ex recusandae voluptas numquam eius, officia soluta.
Similique velit asperiores, itaque nesciunt quam expedita facilis animi, distinctio aperiam id corrupti ratione. Vel sapiente veritatis, nam temporibus cupiditate quos voluptatum animi amet illo porro dicta iure recusandae ab.
Laboriosam explicabo expedita quos autem officiis ad maxime eius sed consequatur doloribus quia nemo minima blanditiis libero itaque inventore possimus sit, saepe consequuntur aperiam error! Consectetur at soluta porro maiores.
Voluptatibus error natus culpa dignissimos hic rerum, quisquam, quibusdam consequatur in neque facilis! Distinctio quidem, unde sint nihil, explicabo similique, facilis beatae esse autem fugiat ipsum eius doloremque. Enim, unde.
Sed porro doloribus illum praesentium ratione possimus nobis modi dolor, quo, iste nam molestias pariatur veniam, quod accusamus aliquid vel error nesciunt earum eum inventore culpa quisquam necessitatibus. Dolor, nam!
Nemo velit vitae commodi ab et eius debitis incidunt ex est, sunt hic repellendus magni a accusamus rem, praesentium soluta aperiam suscipit blanditiis autem omnis eaque nobis. Unde, nemo dolorem!
Aliquid, nemo. Fuga ullam perspiciatis aspernatur, dolor officiis itaque odit voluptatum voluptate ratione neque totam sit deserunt nobis quasi est debitis! Natus labore dolorem rem quisquam consequuntur itaque assumenda nihil!
Sed, eius. Ab magnam eaque exercitationem optio architecto! Modi, perspiciatis sequi minima consectetur esse laudantium tenetur ratione beatae mollitia, laborum debitis error! Explicabo dignissimos assumenda officiis molestias magnam et repellat.
Amet deserunt voluptatum quo omnis temporibus a, cumque nobis dolorem cupiditate iste accusamus perferendis quas hic sit optio quod qui nihil recusandae maiores dolores quam asperiores. Earum aut vel asperiores.
Necessitatibus optio, reiciendis nobis deleniti rem aspernatur soluta culpa fugit atque maiores quos consectetur laudantium quae, eum omnis dicta cum voluptatibus aperiam vero quisquam, assumenda debitis pariatur officia modi. Molestias!
Officia, debitis! Quae explicabo natus aliquid. Molestias facilis obcaecati vero mollitia aperiam non placeat, recusandae repellendus reiciendis libero in, natus quasi beatae necessitatibus. Delectus voluptas repudiandae est veniam eaque quisquam!
Obcaecati vel praesentium, quasi dolore ullam veritatis pariatur sit laudantium rem amet doloremque! Magni tempore fugit expedita totam quae culpa atque velit repellat eos, blanditiis dolorum eius ipsam laborum at.'
;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>BadWords</title>
</head>
<body>
    <header>
        <div class="container my-5">
            <form action="./censuredText.php" method="GET">
                <div class="row">
                    <div class="col-3">
                        <div class="content">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Inserisci una parola da censurare:</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="badWord" placeholder="Per esempio 'Lorem'">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Scrivi un testo:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="paragraph" rows="10" cols="50"><?php echo $lorem ?></textarea>
                            </div>
                                <div class="col-12">
                                <button class="btn btn-primary" type="submit">Invia</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </header>
</body>
</html>