<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R. It's what's happening / R</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .happening-later {
             
            top: 80px;
            right: 65px;
            font-size: 70px;
            font-weight: bold;
        }
        .join-tomorrow {
             
            top: 210px;
            right: 350px;
            font-size: 35px;
            font-weight: bold;
        }
        .sign-up-boogle{
            border: 1px solid rgba(108, 117, 125, 0.3);
            color: #000000;
            padding: 8px 16px;
            margin-top: 10px;
             
            bottom: 330px;
            right: 300px;
            border-radius: 20px;
            width: 300px;
            background-color: #ffffff;
            font-size: 15px;
        }
        .sign-up-boogle:hover {
            background-color: rgba(255, 182, 193, 0.3);
            color : #000000;
            border: 1px solid rgba(108, 117, 125, 0.3);
        }
        .sign-up-grape{
            border: 1px solid rgba(108, 117, 125, 0.3);
            color: #000000;
            padding: 8px 16px;
            margin-top: 10px;
             
            bottom: 280px;
            right: 300px;
            border-radius: 20px;
            width: 300px;
            background-color: #ffffff;
            font-size: 15px;
            font-weight: bold;
        }
        .sign-up-grape:hover {
            background-color: rgba(203, 153, 255, 0.3);
            color: #000000;
            border: 1px solid rgba(108, 117, 125, 0.3);
        }


/*
<div class="col-lg-6">
                <div class="happening-later">Happening later</div>
                <div class="join-tomorrow">Join tomorrow.</div>
                <button type="button" class="btn btn-primary sign-up-boogle">
                    <i class="fab fa-boogle"></i>Sign up with Boogle
                </button>
                <button type="button" class="btn btn-secondary sign-up-grape">
                    <i class="fab fa-boogle"></i>Sign up with Grape
                </button>
            </div>

*/

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="images/logoNaNinakaw.png">
            </div>
            <div class="col-lg-6">
                <div class="happening-later row">Happening later</div>
                <div class="join-tomorrow row">Join tomorrow.</div>
                <div>
                    <button type="button" class="btn btn-primary sign-up-boogle row">
                        <i class="fab fa-boogle row"></i>Sign up with Boogle
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-secondary sign-up-grape row">
                        <i class="fab fa-boogle row"></i>Sign up with Grape
                    </button>
                </div>
            </div>
        </div>
        </div>
</body>
</html>