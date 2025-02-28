<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Fill The Form</h1>
    <form method="post">
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" required><br><br>

        <label for="nim">Nama :</label>
        <input type="text" name="nama" id="nama" required><br><br>
       

        <input type="submit" value="Submit">
    </form>

    <?php
    if (!empty($_POST)) {
    echo "Hello, ", $_POST["nim"], " - ", $_POST['nama'];
    }
    ?>
    
</body>
</html>