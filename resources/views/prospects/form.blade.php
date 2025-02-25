<html>
    <head>
        <title>Contact</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/contact" method="post">
                @csrf
                <div class="mb-3">
                    <label for="input-firstname" class="form-label">Prénom</label>
                    <input type="text" name="firstname" class="form-control" id="input-firstname">
                </div>
                <div class="mb-3">
                    <label for="input-lastname" class="form-label">Nom</label>
                    <input type="text" name="lastname" class="form-control" id="input-lastname">
                </div>
                <div class="mb-3">
                    <label for="input-email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="input-email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="input-phone" class="form-label">Téléphone</label>
                    <input type="text" name="phone" class="form-control" id="input-phone">
                </div>
                <div class="mb-3">
                    <label for="input-shoesize" class="form-label">Pointure</label>
                    <input type="number" name="shoesize" class="form-control" id="input-shoesize">
                </div>
                <div class="mb-3">
                    <label for="input-shoesize" class="form-label">Message</label>
                    <textarea name="message" class="form-control" id="input-message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </body>
</html>