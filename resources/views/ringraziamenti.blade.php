<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="coloreBody">
    <div class="container-fluid ">
        <div class="row vh-100 align-items-center d-flex  justify-content-center ">
            <div class="col-12  " >
                <div class="align-items-center d-flex  justify-content-center">
                    <img src="./img/mail.svg" alt="" height="100px" width="100px" class="" >
                </div>
                <h3 class="fs-4 text-center ">
                    MESSAGGIO INVIATO CON SUCCESSO, VISUALIZZARE LA PROPRIA POSTA ELETTRONICA PER LA CONFERMA. <br>
                    <a href="{{route('welcome')}}" class="text-black fs-5 ">
                        Clicca qui per tornare nella home page
                    </a>
                </h3>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>