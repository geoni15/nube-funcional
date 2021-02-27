<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--para que chrome no guarde el codigo en cache-->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
</head>
<div href="" class="col-12" style="float: rigth;  position:absolute;"> <img class="col-12" style=" height: 130px; width: 200px; margin:auto; display: block; margin-top: 200px;" src="img/kisspng-upload-computer-icons-computer-file-icon-drawing-upload-5ab11ede692b92.1547431915215572144308.png" alt=""> <label for="" style="text-align: center; margin:auto; display: block; text-decoration: none; color: gray; top: 20px; font-size: 20px;">da click o arrastra un archivo</label></div>

<link rel="stylesheet" href="css/index.css">
<div class="container">
<form action="upload.php" style="background-color: white; border-radius: 20px;" id="form_subir">
    
    <div class="form-1-2 col-12">
        <input type="file" class="col-12" style=" opacity: 0%; height: 500px;" name="file" required multiple> </input>
    </div>
    <div class="barra">
        <div class="barra_azul" id="barra_estado">
            <span></span>
        </div>
    </div>
    <div class="acciones">
        <input type="submit" class="btn col-lg-9 col-sm-12 col-xs-12 mt-0" style="font-size: 30px; value="enviar">
        <input type="button" class="cancel col-lg-2 col-sm-12 col-xs-12 mt-2" style=" top: 5px; font-size: 30px;" id="cancelar" value="cancelar">
    </div>
</form>
</div>
<div class="container">
<h1 style="font-size: 40px; padding: 10px; background: white; width: 200px; text-align: center; border-radius: 20px;" class="col-12">archivos</h1>
</div>
<br>
<script src="js/main.js"></script>
<div class="container" style="background: white; border-radius: 20px; padding: 10px; padding-bottom: 1px;">
<?php

$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++)
{
    ?>
    
    <p >
        <?php echo $files[$a]; ?>

        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>

        <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
            Delete
        </a>
    </p>
    
    <?php
}

?>
</div>
<style>
    .fixed-bottom {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: lightseagreen;
        color: white;
        text-align: center;
        padding: 25px;
        font-size: 20px;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>