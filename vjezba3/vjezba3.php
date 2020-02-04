<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="proces3.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required><!-- Za upload više fajlova se stavi file[] i multiple-->
        <br>
        <input type="submit" value="Upload file">
    </form>
</body>
</html>
