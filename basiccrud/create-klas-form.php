<?php include "templates/header.php" ?>
<body>
    <div class="container" id="modal-confirm">
        <form action="create-student.php" method="post">
            <div class="form-group">
                <label for="voornaam"> code: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="code" id="code" placeholder="Enter Code">
            </div>
            <div class="form-group">
                <label for="achternaam"> vesteging: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="vesteging" id="vesteging" placeholder="Enter Vesteging">
            </div>
            <div class="form-group">
                <label for="email"> sectie: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="sectie" id="sectie" placeholder="Enter Sectie">
                <small id="emailHelp" class="form-text text-muted">Let op met sectie invullen.</small>

            </div>
            <div class="form-group">
                <label for="phone"> cohort: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="number" name="cohort" id="cohort" placeholder="Cohort">
            </div>
            <br /><br />
                <input type="submit" name="submit" class="btn btn-primary"  value="Opslaan">
        </form>
    </div>
</body>
<?php include "templates/footer.php" ?>

