<!-- https://stackoverflow.com/questions/18902887/how-to-configuring-a-xampp-web-server-for-different-root-directory -->
<!-- https://stackoverflow.com/questions/812571/how-to-create-friendly-url-in-php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/article-section.css">
    <link rel="stylesheet" href="css/article-contents.css">
</head>
<body>
    <div id="background-image"></div>
    <?php require '../php/navbar.php'; ?>

    <div class="display">
        <div class="pad"></div>
        <div id="article"> 
            <p>This is the home page</p>
        </div>
        <div class="pad"></div>
    </div>    
</body>
</html>