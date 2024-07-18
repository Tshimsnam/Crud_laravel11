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
    
    <div class="container text-center">
        <div class="row">
            
            <div class="col s12">
                <h1>Crud laravel 11</h1>  
                <hr>   
                <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Class</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Manassé</td>
                            <td>Tshims</td>
                            <td>L2/info</td>
                            <td>
                                <a href="#" class="btn btn-info">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                            <tr>
                                <td>2</td>
                                <td>Emmanuel</td>
                                <td>bands</td>
                                <td>L3/Lmd</td>
                                <td>
                                    <a href="#" class="btn btn-info">Update</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
    
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>David</td>
                                <td>djim</td>
                                <td>L3/lmd</td>
                                <td>
                                    <a href="#" class="btn btn-info">Update</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
    
                            </tr>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
