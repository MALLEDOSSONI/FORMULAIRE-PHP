<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire de Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>formulaire de contact</h1>
    <form class="row g-3" action="action.php" method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="validationDefault01" placeholder="Votre nom" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adrress Email</label>
            <input type="email" class="form-control" name="email" id="validationDefault02" placeholder="Votre Email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Téléphone</label>
            <input type="phone" class="form-control" name="phone" id="validationDefault03" placeholder="Votre numero" required>
        </div>
        <div class="col-md-3">
            <label for="ville" class="form-label">ville de départ</label>
            <select class="form-select" name="ville" required>
                <option selected disabled value="">Choose...</option>
                <option value="Paris">Paris</option>
                <option value="Orléans">Orléans</option>
                <option value="Dublin">Dublin</option>
                <option value="Nice">Nice</option>
                <option value="Tours">Tours</option>
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-success" type="submit">Submit form</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>