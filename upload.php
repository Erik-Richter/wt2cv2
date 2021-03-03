<!doctype html>

<html lang="sk">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=1.0">
</head>

<body>
<h2><img src="img/icon/cloud-services-icon.png" width="60" height="38" alt="ikonaOblak">  RichClouder</h2>
<main>
    <?php



    $target_dir = "files/";
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //$_nameOfFile
    $nameOfFile = $_POST['nameOfFile'];


    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $pripona = "." . $imageFileType;
    $novySubor = $nameOfFile.'_'.time().$pripona;

    if (strlen($nameOfFile)==0){
        $novySubor = $fileName;
        $novySubor = str_replace($pripona, "", $novySubor);
        $novySubor = $novySubor.'_'.time().$pripona;
    }




    //var_dump($_FILES);

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<p>Nahrávaný súbor už existuje. Skúste to znovu, alebo použite iný názov súboru</p>";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "<p>Súbor je príliš veľký.</p>";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<p>Vyskytla sa chyba, skúste to znovu</p>";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$novySubor)) {
            echo "Súbor ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " bol nahratý a uložený pod novým názvom: ";
            echo $novySubor;
        } else {
            echo "<p>Vyskytla sa chyba, skúste to znovu</p>";
        }
    }

    ?>


</main>
<a class="btn btn-primary" href="../uploadovanieZ1">Návrat na zoznam súborov</a>

<script src="js/script.js"></script>
</body>
</html>

