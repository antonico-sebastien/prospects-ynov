<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Liste des prospects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Pointure</th>
                    <th scope="col">Message</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prospects as $prospect)
                    <tr>
                        <td>{{ $prospect->firstname }}</td>
                        <td>{{ $prospect->lastname }}</td>
                        <td>{{ $prospect->email }}</td>
                        <td>{{ $prospect->phone }}</td>
                        <td>{{ $prospect->shoesize }}</td>
                        <td>{{ $prospect->messages->last()->message }}</td>
                        <td>
                            <form action="{{route('prospects.transform', [$prospect])}}" method="post" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-success">Transformer en commande</button>
                            </form>
                            <form action="/prospects/{{ $prospect->id }}" method="post" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
    </div>
</body>
</html>