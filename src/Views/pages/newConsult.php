<?php require_once __DIR__ . '/../layout/default.php'?>

<div class="h-100" style='background-color: rgba(171,198,230,100);'> 

      <form action="/consultas" method="POST" class="d-flex flex-column align-items-center position-absolute top-50 start-50 translate-middle" 
      style='width: 70%; height: auto; background-color: rgba(113, 144, 195, 100); border-radius:20px;'>
        <div class="container d-flex justify-content-end" style="width: 100%;">
          <div style='width: 100%;'>
            <header class="d-flex justify-content-end">
              <a class="btn pintar text-white mt-2" href="#" role="button" style="border-radius: 100px;">X</a>
            </header>
          </div>
        </div>

        <main class="p-2 w-75">
          <div class="mb-3">
            <label for="inputUsername" class="form-label"></label>
            <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" />
          </div>

          <div class="d-flex justify-content-between">
            <label for="inputEmail" class="form-label"></label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" />
          </div>

          <div class="mb-3">
            <label for="inputTema" class="form-label"></label>
            <input type="text" name="tema" class="form-control" id="inputTema" placeholder="Tema" />
          </div>

          <div class="mb-3">
            <label for="inputConsulta" name="consulta" class="form-label"></label>
            <textarea class="form-control is-invalid" id="inputConsulta" placeholder="Tell me more..."
              required></textarea>
          </div>
        </main>

        <footer>
          <div class="mb-3">
            <button class="rounded border-0 pintar text-white p-2" type="reset">Borrar</button>
            <button class="rounded border-0 pintar text-white p-2" type="submit">Enviar</button>
          </div>
        </footer>
      </form>

</div>

<?php require_once __DIR__ . '/../layout/emptybottom.php' ?>
