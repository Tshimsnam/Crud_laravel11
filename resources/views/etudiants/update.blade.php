<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD en Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <h1 class="text-center mb-4">Modifier un étudiant - Laravel 11</h1>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>

                <form action="/update/traitement" method="POST" class="form-group">
                    @csrf

                    <input type="text" name="id" style="display: none;" value="{{$etudiants->id}}">
                    <div class="form-group mb-3">
                        <label for="nom" class="form-label">Nom:</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiants->nom}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="prenom" class="form-label">Prénom:</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="{{$etudiants->prenom}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="class" class="form-label">Classe:</label>
                        <input type="text" class="form-control" id="classe" name="classe" value="{{$etudiants->classe}}">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Modifier un étudiant</button>
                        <a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>