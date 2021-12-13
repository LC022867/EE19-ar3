<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Enkel filuppladning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        // Skickas filer?
        if (isset($_POST['submit'])) {
            $file = $_FILES['file'];


            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png', 'pdf');


            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 1000000) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = 'uploads/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        header("Location: index.php?uploadsuccess");
                    } else {
                        echo "<p>Filen är för stor!</p>";
                    }
                } else {
                    echo "<p>Det blev ett fel: $fileError</p>";
                }
            } else {
                echo "<p>Du kan inte ladda filer av typen $fileActualExt</p>";
            }
        }
        ?>
    </div>
</body>
</html>