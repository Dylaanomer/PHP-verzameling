<?php include "connectdb.php";
$sql = "SELECT * FROM student";
$sth = $db->prepare($sql);
$sth->execute();
?>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Acties</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row = $sth->fetch()) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["voornaam"]; ?></td>
            <td><?php echo $row["achternaam"]; ?></td>
            <td>
                <a href="update-student-form.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a>
                <a href="delete-student.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
