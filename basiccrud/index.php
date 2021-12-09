<?php include "templates/header.php" ?>
<body>
    <div clas="container">
        <a href="create-student-form.php" class="btn btn-secondary mt-2 mb-2">Student toevoegen</a>
        <a href="indexklas.php" class="btn btn-secondary mt-2 mb-2">Lijst van Klassen</a>
        <a href="create-klas-form.php" class="btn btn-secondary mt-2 mb-2">Klas toevoegen</a>

<?php include "list-students.php"; ?>

    </div>

</body>
<?php include "templates/footer.php" ?>
