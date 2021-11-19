<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>

    <section class="d-flex align-items-center flex-column" style='background-color: #a8c7e8;'>
        <div class="w-100 pb-5" style=" background-color: #3257a8;">

        </div>
        <div class="d-flex justify-content-center align-items-center w-75" style="background-color: #a8c7e8; height: 85vh;">
            <div class="d-flex justify-content-center align-items-center position-relative w-75" style=' background-color: #6b93c6; height:72vh;  border-radius: 57px'>
                <img class="position-absolute top-0 mt-1 end-0 pt-0" src="css/img/cancel.png" style=' width:35px'>
                <div class="d-flex flex-column justify-content-center align-items-center w-100" style=>
                    <div class="form-floating m-2" style="width:80%">
                        <input type="text" class="form-control" id="floatingInput" placeholder="nombre y apellido">
                        <label for="floatingInput">nombre y apellido</label>
                    </div>
                    <div class="form-floating m-2" style="width:80%">
                        <input type="email" class="form-control" id="floatingPassword" placeholder="Email con el que se registró la consulta">
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating m-2" style="width:80%">
                        <input style='height:28vh' type="text" class="form-control " id="floatingPassword" placeholder="Motivo del cambio de cita">
                        <label for="floatingPassword">Motivo del cambio de cita</label>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="border-0" style="background-color: #3157a8; color:white; height: 35px; border-radius: 20px;">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 position-absolute bottom-0" style="background-color: #3257a8; height: 8vh">
        </div>
    </section>
</body>

</html>