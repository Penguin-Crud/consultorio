<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/bootstrap.css">
</head>
<body>
    <div class="contenedor " style="height:100vh;" >
        <header class="pb-5 mb-3 bg-primary"></header>
        <div class='container d-flex justify-content-center' style='height:80%;'>
            <div id='POPup' class=" d-flex justify-content-center " style='display:none!important;'>
                <div class="rounded bg-primary" style='display:flex; flex-direction:column; align-items: center; '>
                    <div style='width: 90%;'>
                        <header class="d-flex justify-content-between"> 
                            <p class='text-white display-6 ml-1 mt-2'>Tema de Consulta</p>
                            <p class='text-white mr-1 mt-2'>00:00</p>
                        </header>
                    
                        <main class='flex-column rounded bg-info p-2 '>
                            <p class=" mb-1"> Name LastName </p>
                            <p> example@email.com </p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </main>
                
                        <footer class='d-flex justify-content-center mt-3 mb-4 ml-4 position-relative'>
                            <button type="button" class="btn p-0 position-absolute start-0">
                                <img src="styles/icons/btn-back.png" class="img-fluid" style='width:70%;' alt="btn-back">
                            </button>
                            <button type="button" class="btn btn-primary btn-lg">Actualizar</button>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        




        <?php 
        /*
        include_once('conexion.php');

        consultationDB :: crearInstancia();
        */
        ?>
    <footer class="bg-primary position-absolute bottom-0 d-flex justify-content-center" style='width:100%;'>
            <button type="button" class="btn " style="width:10%;">
                <img src="styles/icons/btn-add.png" class="img-fluid" style='width:40%;' alt="btn-add">
            </button>
    </footer>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
