<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des commandes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Commentaire</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->lastname }}</td>
                        <td>{{ $order->firstname }}</td>
                        <td>{{ $order->email }}</td>
                        <td>
                            <select name="status" id="status">
                                <option value="new" {{ $order->status === 'new' ? 'selected' : '' }}>Nouvelle</option>
                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>En attente</option>
                                <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>En cours de traitement</option>
                                <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Terminée</option>
                            </select>
                        </td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->comment }}</td>
                    </tr>
                @endforeach
            </tbody>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $("#status").change(function() {
                $.ajax({
                    url: '{{route('orders.changeStatus', [$order])}}',
                    type: 'put',
                    data: {
                        status: $(this).val(),
                        _token: '{{ csrf_token() }}'
                    },
                    success: function() {
                        alert('Status mis à jour');
                    }
                });
            });
        });
    </script>
</body>
</html>