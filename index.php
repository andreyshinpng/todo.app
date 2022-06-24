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
            <h1 class="header-h1"><a href="http://todo-app.local/">SIMPLE TODO APP</a></h1>
            <form action="handler.php" method="POST">
                <input type="text" name="what_to_do" placeholder="Enter case..."><input type="submit" name="btn-submit" value="Add">
            </form>
        </div>
    </div>
    <div class="cases_block">
        <div class="container">
            <?php
            require_once("dbconnect.php");
            $result = $conn->query("SELECT * FROM todolist");
            foreach($result as $row) {
                echo "<div class='cases_block_item'>";
                echo "<div class='cases_block_item_text'>";
                echo $row["what_to_do"];
                echo "</div>";
                echo "<form method='POST' class='cases_block_item_form'><input type='submit' name='btn-deletecase".$row["id"]."' value='Delete'></form>";
                echo "</div>";
            }
            for($i=1; $i<=100000; $i++){
                if(isset($_POST["btn-deletecase$i"]) && !empty($_POST["btn-deletecase$i"])){
                    $conn->query("DELETE FROM todolist WHERE id=".$i);
                    header("Location: $siteAddress");
                }
            }
            ?>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="created_by">
                Created by Andrey Shin
            </div>
            <div class="github_link">
                <a href="https://github.com/andreyshinpng" target="_blank">Github</a>
            </div>
        </div>
    </footer>
</body>
</html>

</div>

