        
        <?php require_once __DIR__ . '/../layout/default.php'?>
        <!-- 
            style='display:none!important;'   
        -->
        <div class='container d-flex justify-content-center' style='height:80%;'>
            <div id='POPup' class=" d-flex justify-content-center " >
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
                                <img src="css/icons/btn-back.png" class="img-fluid" style='width:70%;' alt="btn-back">
                            </button>
                            <button type="button" class="btn btn-primary btn-lg">Actualizar</button>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require_once __DIR__ . '/../layout/defaultFooter.php'?>