<html>
    <head>
        <title>Uploading files with PHP and MySQL</title>
    </head>

    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select Image File to Upload:
            <input type="file" name="file">
            <input type="submit" name="submit" value="Upload">
        </form>
    </body>
</html>