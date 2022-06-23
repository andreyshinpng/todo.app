<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo web-application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form_block">
        <div class="container">
            <form action="handler.php" method="POST">
                <input type="text" name="what-todo">
                <input type="submit" name="btn-submit" value="Add">
            </form>
        </div>
    </div>
</body>
</html>