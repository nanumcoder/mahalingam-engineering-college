<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <form action="file/decrement.php" method="post">
        <button type="submit">Decrement</button>
    </form>
    <h1 id="number">
        <?php
        // $myfile = fopen("file/file.txt", "r") or die("Unable to open file!");
        // echo fread($myfile, filesize("file/file.txt"));
        // fclose($myfile);
        ?>
    </h1>
    <form action="file/increment.php" method="post">
        <button type="submit">Increment</button>
    </form>
    <form action="file/reset.php" method="post">
        <button type="submit">Reset</button>
    </form>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <script>
        $("#number").load("file/file.txt");
    </script>


</body>

</html>