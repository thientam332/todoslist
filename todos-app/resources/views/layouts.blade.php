<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div>
        <nav class = "navbar navbar-light bg-light">
            <div class = "container">
            <a class = "navbar-brand-center" href = "#">
                <img src = "{{asset('images/MarketEnterprise-Vietnam-1568x706.png')}}" alt = "" width = "156,8" height = "70,6">
            </a>
            </div>
        </nav>
    </div>

    @yield('conten')
    
</body>
</html>