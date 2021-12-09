<?php include "templates/header.php" ?>
<body>
    <div class="container" id="modal-confirm">
        <form action="create-student.php" method="post">
            <div class="form-group">
                <label for="voornaam"> Voornaam: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="voornaam" id="voornaam" placeholder="Enter Voornaam">
            </div>
            <div class="form-group">
                <label for="achternaam"> Achternaam: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="achternaam" id="achternaam" placeholder="Enter Achternaam">
            </div>
            <div class="form-group">
                <label for="email"> Email: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="email" id="email" placeholder="Enter Email">
                <small id="emailHelp" class="form-text text-muted">We delen nooit je email met anderen.</small>

            </div>
            <div class="form-group">
                <label for="phone"> telefoonummer: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="number" name="telefoonummer" id="telefoonummer" placeholder="Enter Nummer">
            </div>
            <div class="form-group">
                <label for="straat"> straatnaam: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="straatnaam" id="straatnaam" placeholder="Enter Street">
            </div>
            <div class="form-group">
                <label for="Huisnummer"> Huis Nummer: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="number" name="Huisnummer" id="Huisnummer" placeholder="Enter Huisnummer">
            </div>
            <div class="form-group">
                <label for="woonplaats"> Woonplaats: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="woonplaats" id="woonplaats" placeholder="Enter Woonplaats">
            </div>
            <div class="form-group">
                <label for="Postcode"> postcode: </label>
                <input required pattern="\S(.*\S)?" title="This field is required" class="form-control" type="text" name="postcode" id="postcode" placeholder="Enter postcode">
            </div>
           

           <select>

           <option selected="selected"> Kies een Klas</option>

           <?php include "klassen.php"; ?>

            </select>
            <br /><br />
                <input type="submit" name="submit" class="btn btn-primary"  value="Opslaan">
        </form>
    </div>
</body>
<?php include "templates/footer.php" ?>

