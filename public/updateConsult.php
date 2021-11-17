<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>

    <section class="d-flex align-items-center flex-column" style='background-color: #a8c7e8;'>
        <div class="header">

        </div>
        <div class="first-layer-editar w-75">
            <div class="second-layer-editar position-relative w-75" style='height:72vh'>
                <img class="position-absolute " src="cancel.png" style='top:1rem; right:1rem;' width='30' class="d-flex ">
                <div class=third-layer-editar>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="nombre y apellido">
                        <label for="floatingInput">nombre y apellido</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" id="floatingPassword" placeholder="Email con el que se registró la consulta">
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating">
                        <input style='height:28vh' type="text" class="form-control " id="floatingPassword" placeholder="Motivo del cambio de cita">
                        <label for="floatingPassword">Motivo del cambio de cita</label>
                    </div>
                    <div class="editar-cita-div">
                        <button class="editar-cita-button">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <img class="footer-img" src="next.png" style='' class="d-flex ">

        </div>
    </section>
</body>

</html>