<!DOCTYPE html>
<html lang = 'eng'>
    <head>
        <title>Lab6_q1</title>
</head>
<body>
    <?php
    $name = "Hanis Izzati";
    $matricNumber = "AI220244";
    $course = "BIT";
    $yearOfStudy = "2";
    $address = "701, Kuala Rompin, Pahang";
    ?>
    <table border = "1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric number</td>
            <td><?php echo "$matricNumber"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>

</body>
</html>   

