<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    
    <div class="container p-2">
        <div class="row">
            <div class="col-12 my-5 p-3">
                <h1 class="display-3">Abbiamo ricevuto una richiesta</h1>
            </div>
            <div class="row card-work p-4">
                <div class="col-12">
                    <h4>Richiesta per il ruolo {{$info['role']}}</h4>
                    <p><em>Ricevuta da {{$info['email']}}</em></p>
                </div>
                <div class="col-12">
                    <h4>Messaggio:</h4>
                    <p>{{$info['message']}}</p>
                </div>
            </div>
        </div>
    </div>
    

    
    




</body>
</html>


