<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiupload File</title>
</head>
<body>
    <h2>Upload Document</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf,.doc,.docx">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>