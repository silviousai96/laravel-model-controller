<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    
    <h1>MOVIES</h1>

    <div class="container">
        <ul>
            @foreach ($movies as $movie)
                
            <div>
                    <li> <span>Titolo:</span> {{ $movie->title }}</li> 
                
                    <li> <span>Titolo originale:</span> {{ $movie->original_title }}</li> 
    
                    <li> <span>Nazionalità:</span> {{ $movie->nationality }}</li>
    
                    <li> <span>Data:</span> {{ $movie->date }}</li>
    
                    <li> <span>Voto:</span> {{ $movie->vote }}</li>
            </div>
                                        
            @endforeach
        </ul>
    </div>

</body>
</html>
