<?php
/* ----------- File upload ---------- */

// Check if form is submitted.
if(isset($_POST["submit"])) {
    // Allowed extensions.
    $allowed_exts = array('png', 'jpg', 'jpeg');
    
    // Check if file was uploaded.
    if(!empty($_FILES["upload"]["name"])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];

        // Target directory, where to store the uploaded file.
        $target_dir = "uploads/$file_name";

        // Get file extension.
        $file_ext = explode(".", $file_name);   // Splits a string, returns an array.
        $file_ext = strtolower(end($file_ext));        // Convert last element in array to lower-case.

        // echo $file_ext;

        // Validate file ext.
        if(in_array($file_ext, $allowed_exts)) {
            // Check file size.
            if($file_size <= 1000000) {         // in MB.
                move_uploaded_file($file_tmp, $target_dir);         // Moves uploaded file from temp directory to specified locations.
                $message = "<p style='color: green;'>Success! File uploaded!</p>";
            }
            else {
                $message = "<p style='color: red;'>File is too large...</p>";
            }

        }
        else {
            $message = "<p style='color: red;'>Invalid file type...</p>";
        }

    }
    else{
        $message = "<p style='color: red;'>Please choose a file...</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <?php echo $message ?? null; ?>
    <!-- enctype attribute is required when uploading file(s) -->
    <form action="<?php echo htmlspecialchars(
                        $_SERVER['PHP_SELF']
                    ); ?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>