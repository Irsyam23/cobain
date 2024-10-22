<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    .conten {
        height: 570px;
        align-content: center;
    }

    .conten .cardd {
        padding: 0 17px 0 17px;
    }

    .conten .cardd .isi {
        text-align: left;
        padding: 10px;
        background: #dadcda;
        border-radius: 10px;
        width: 300px;
        height: 370px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .conten .cardd .isi .image {
        height: 100px;
    }

    .conten .cardd .isi .tombol {
        text-align: center;
    }
</style>

<body>
    <div class="container text-center">
        <div class="conten">
            <div class="row">

                <div class="col-md-6 offset-md-4">
                    <div class="cardd">
                        <div class="isi">
                            <div class="image">

                            </div>
                            <form action="loginproses" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                                <br>
                                <div class="tombol">

                                    <button type="submit" class="btn btn-success">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>