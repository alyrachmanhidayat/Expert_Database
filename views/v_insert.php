<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap 5.0 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\CSS\v_insert_CSS.css">
</head>

<body>
    <?php
    //
    $action = 'insert.php';
    ?>

    <!--form input data-->
    <div class="row justify-content-center container-fluid col-auto">
        <!--action="insert.php" method="POST" untuk memanggil insert.php lalu inputnya di post ke DB-->
        <form class="outerForm row g-3" action="insert.php" method="POST">
            <legend style="font-size: xx-large">Input Data</legend>
            <form class="row g-3 form-floating">
                <div class="col-12">
                    <label for="inputOccupation" class="form-label">Name</label>
                    <input name="name" value="<?= @$experts['name'] ?>" type="text" class="form-control" id="inputOccupation">
                </div>
                <div class="col-md-6">
                    <label for="inputPhone" class="form-label">Phone</label>
                    <input name="phone" value="<?= @$experts['phone'] ?>" type="tel" class="form-control" id="inputPhone" placeholder="+62xxxxxxxxxxx">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input name="email" value="<?= @$experts['email'] ?>" type="email" class="form-control" id="inputEmail4" placeholder="name@example.com">
                </div>
                <div class="col-12">
                    <label for="inputOccupation" class="form-label">Occupation</label>
                    <input name="occupation" value="<?= @$experts['occupation'] ?>" type="text" class="form-control" id="inputOccupation">
                </div>
                <div class="col-12">
                    <label for="inputExpertise" class="form-label">Area Of Expertise</label>
                    <input name="expertise" value="<?= @$experts['expertise'] ?>" type="text" class="form-control" id="inputExpertise">
                </div>
                <div class="col-12">
                    <label for="inputWithCECCEP" class="form-label">Work Area With CECCEP</label>
                    <input name="workarea_ceccep" value="<?= @$experts['workarea_ceccep'] ?>" type="text" class="form-control" id="inputWithCECCEP" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputArticle" class="form-label">Article or Presentation</label>
                    <input name="article_presentation" value="<?= @$experts['article_presentation'] ?>" type="text" class="form-control" id="inputArticle" placeholder="">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" value="Simpan">Submit form</button>
                </div>
            </form>
    </div>

</body>

</html>