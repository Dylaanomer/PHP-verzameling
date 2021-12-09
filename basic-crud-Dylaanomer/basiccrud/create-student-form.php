<?php include "templates/header.php" ?>
<body>
    <div class="container">
        <form action="create-student.php" method="post">
            <div class="form-group">
                <label for="voornaam"> Voornaam: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="voornaam" id="voornaam" placeholder="Enter Voornaam">
            </div>
            <div class="form-group">
                <label for="achternaam"> Achternaam: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="achternaam" id="achternaam" placeholder="Enter Achternaam">
            </div>
            <br /><br />
                <input type="submit" name="submit" class="btn btn-primary"  value="Opslaan">
        </form>
    </div>
</body>
<?php include "templates/footer.php" ?>

