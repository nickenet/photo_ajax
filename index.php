<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gallery</title>
        <link rel="shortcut icon" type="image/png" href="icons/favicon.png"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>        
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <form action="addphoto.php" id="photo" method="post" enctype="multipart/form-data">
            <input type="file" name="photo"/>
            <input type="submit"/>
        </form>
        <div class="gallery"></div>
        
    </body>
</html>
