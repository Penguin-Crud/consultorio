<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./boostrap.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Document</title>
</head>
<body>
    <header></header>


    <form class="was-validated">
        
        <header>
        <a class="btn btn-primary" href="#" role="button">X</a>
        </header>
       
        <main>
            <div class="mb-3">
                <label for="validationCustom01" class="form-label"></label>
                <input type="email" class="form-control" id="validationCustom01" placeholder="Nombre y Apellido"/>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo electrónico"/>
            </div>
    
            <div class="mb-3" style="height: 100%;">
                <label for="validationTextarea" class="form-label" ></label>
                <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
              </div>
        </main>

       <footer>
        <div class="mb-3">
            <button class="btn btn-primary" type="reset">Borrar</button>
            <button class="btn btn-primary" type="submit">Enviar</button>

          </div>
       </footer>

      
        
      </form>
      <footer>
        <a class="btn btn-primary" href="#" role="button"><</a>
      </footer>
</body>
</html>