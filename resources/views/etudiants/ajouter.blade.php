<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud en laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col s12">
                <h1>AJOUTER UN ETUDIANT - laravel 11</h1>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="Nom" >Nom: </label>
                        <input type="text" class="form-control" id="Nom" name="nom">

                    </div>
                    <div class="form-group">
                        <label for="Nom" >Prenom: </label>
                        <input type="text" class="form-control" id="Prenom" name="prenom">

                    </div>
                    <div class="form-group">
                        <label for="Classe">Classe: </label>
                        <input type="text" class="form-control" id="Class" name="class">

                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>
                    <br>
                    <br>
                    <a href="/etudiant" class="btn btn-danger">Revenir a la liste des étudiants</a>
                </form>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
