<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <div>
            <nav>
                <div>
                    <img src="/images/dc-logo.png" alt="">
                    @foreach($navLinks as $link )
                    <a href="">{{ $link }}</a>
                    @endforeach
                </div>
                <div>

                </div>
            </nav>
        </div>
    </header>
</body>

</html>