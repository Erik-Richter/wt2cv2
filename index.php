<!doctype html>

<html lang="sk">
<head>
    <meta charset="utf-8">

    <title>File upload</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <script src="js/sorttable.js"></script>
</head>

<body>
<h2><img id="oo" src="img/icon/cloud-services-icon.png" width="60" height="38" alt="ikonaOblak">  RichClouder</h2>
<a id="upl" href="#section1"><img src="img/icon/cloud_upload_arrow-512.png" alt="nahrat" width="80" height="80"></a>


<div id="tabulka" class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="sortable table table-striped table-hover">
    <thead>
        <tr> <th>Názov súboru</th> <th class="zarovnanieP">Veľkosť súboru</th> <th class="zarovnanieP">Dátum nahratia</th> </tr>
    </thead>

    <tbody>
    <?php
    include "generovanie.php";
    ?>
    </tbody>
</table>
</div>




    <form class="form-outline container" action="upload.php" method="post" enctype="multipart/form-data" id="vkladanie">
        <br>
        <div class="row">
            <div class="col-lg-6">
                <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" >
                <label class="form-label" for="fileToUpload">Pridať súbor</label><br>
            </div>

            <div class="col-lg-6">
                <input class="form-control" type="text" name="nameOfFile" id="novyNazov" placeholder="Záloha PC">
                <label class="form-label" for="novyNazov">Názov súboru</label>
            </div>

            <div class="col-lg-6">
                <input class="btn btn-success" type="submit" value="Nahrať vložený súbor" name="submit">
            </div>

        </div>

    </form>
    <h1 id="section1"></h1>




<!--?php
    include "tabulka.php";
?-->
<div id="demo"></div>

<script src="js/script.js"></script>
</body>
</html>