<html>
    <head>
        <title>PHP Form Upload</title>
    </head>
    <body>
        <form method='post' action='15-upload.php' enctype='multipart/form-data'>
            Select a JPG, GIF, PNG or TIF File:
            <input type='file' name='filename'>
            <input type='submit' value='Upload'>
        </form>
    </body>
</html>

<?php
    if ($_FILES) {
        $name = $_FILES['filename']['name'];
        switch($_FILES['filename']['type']) {
            case 'image/jpeg': $ext = 'jpg'; break;
            case 'image/gif':  $ext = 'gif'; break;
            case 'image/png':  $ext = 'png'; break;
            case 'image/tiff': $ext = 'tif'; break;
            default:           $ext = '';    break;
        }
        if ($ext) {
            $n = "image.$ext";
            move_uploaded_file($_FILES['filename']['tmp_name'], $n);
            echo "Uploaded image '$name' as '$n':<br>";
            echo "<img src='$n'>";
        } else {
            echo "'$name' is not an accepted image file";
        }
    } else {
        echo "No image has been uploaded";
    }
    echo "</body></html>";
?>