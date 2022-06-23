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
            <h1 class="header-h1">TODO APP</h1>
            <form action="handler.php" method="POST">
                <input type="text" name="what_to_do">
                <input type="submit" name="btn-submit" value="Add">
            </form>
        </div>
    </div>
    <div class="cases_block">

    </div>
</body>
</html>