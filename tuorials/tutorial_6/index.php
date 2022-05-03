<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        <h1>Image Upload</h1>
        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
        <div class="input-group">
            <label>Upload this file:</lable>
            <input name="userfile" type="file" required />
        </div>
        <div class="input-group">
            <label>Folder Name :</lable>
            <input type="text" name="idtest" required>
        </div>
        <div class="input-btn">
            <input type="submit" value="Send File" multiple />
        </div>
    </form>
</body>

</html>
