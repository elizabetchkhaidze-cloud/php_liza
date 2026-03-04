<?php
    include "questions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Page</title>
</head>
<body>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            margin: auto;
            width: 40%;
            height: 40px;
            position: relative;
            padding: 9px;
}
    </style>
    <form action="lecturer.php" method="post">
  <table>
    <tr>
        <td>Questions</td>
        <td>Answers</td>
        <td>Max Point</td>
    </tr>

    <?php
        for($i=0;$i<5;$i++){

    ?>
    <tr>
        <td><?=($questions[$i]['question'])?></td>
        <td><input type="text" name="Answer"></td>
        <td><?= ($questions[$i]['Max Point']) ?></td>
    </tr>

    <?php
        }
    ?>

    <tr>
        <td colspan="3">
        Student: <input type="text" placeholder="FirstName" name="Fname">
        <input type="text" placeholder="LastName" name="Lname">
        <button>Send</button>
        </td>
    </tr>
  </table>
  </form>
</body>
</html>