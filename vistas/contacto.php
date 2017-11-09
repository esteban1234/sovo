<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
    
    <div class="banners">
  <div class="fondo">
    <div class="container" style="margin-top: 2%;">
     <div class="col-md-3" >
        <a class="btn btn-block btn-lg btn-success" href="../index.php" >
            <i class="fa fa-bars" id="icone_grande"></i> <br><br>
            <span class="texto_grande"> INDEX</span></a>
      </div>
      <div class="col-md-3">
        <a class="btn btn-block btn-lg btn-danger" href="nosotros.php">
            <i class="fa fa-users" id="icone_grande"></i> <br><br>
            <span class="texto_grande"> NOSOTROS</span></a>
      </div>
      <div class="col-md-3">
        <a class="btn btn-block btn-lg btn-primary" href="servicios.php">
            <i class="fa fa-cog" id="icone_grande"></i> <br><br>
            <span class="texto_grande"> SERVICIOS</span></a>
      </div>
      <div class="col-md-3">
        <a class="btn btn-block btn-lg btn-warning" href="contacto.php"  id="select">
            <i class="fa fa-phone" id="icone_grande"></i> <br><br>
            <span class="texto_grande"> CONTACTO</span></a>
      </div> 
    </div>

    <p>EN SOVO TRANSPORTADORA Y LOGISTICA SA DE CV <br>QUEREMOS CONTRIBUIR AL EXITO DE TU EMPRESA</p>
    <figure class="logo">
      <img src="../img/sovo.png" alt="SOVO" class="img-responsive">
    </figure>
  </div>
</div>

<div class="container" style="padding: 5% 0%;">
    <p class="texto">Si necesita ayuda o ponerse en contacto con nosotros, a continuación listamos la información de contacto pertinente o si lo prefiere, envíenos un mensaje a través de nuestra pagina usando la forma adjunta. Por favor incluya su información para poder ponernos en contacto con Usted.</p>
    <div class="row">
        <form role="form" id="contact-form" class="contact-form">
                    <div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Escribe tu nombre completo">
                        </div>
                    </div>
                        <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="Escribe tu correo completo">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" autocomplete="off" id="email" placeholder="Escribe tu número teléfonico">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Escribe tu comentario"></textarea>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <button type="submit" class="btn main-btn pull-right">ENVIAR MENSAJE</button>
                  </div>
                  </div>
                </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d675.2930413314666!2d-93.1274615724434!3d16.774968511746223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd8c338bc3471%3A0x1b324e03b19e1090!2sPomarrosa+46%2C+Pomarrosa%2C+29014+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1510269995347" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        <div class="col-md-4">
            <h2>Datos Empresa</h2>
            <address>
                <strong>Dirección</strong><br>
                C.Pomarrosa #6 MZ 46 por Esq. Pomarrosa y Amapola.<br> COL. Potinaspak, Tuxtla Gutierrez, Chiapas.<br> C.P. 29018
            </address>
            <address>
                <strong>Teléfono</strong><br>
                PENDIENTE
            </address>
            <address>
                <strong>Correo</strong><br>
                info@transportesovo.com
            </address>
            <address>
                <strong>Dirección</strong><br>
                Lunes a Viernes de 9 am a 6 pm
            </address>
        </div>
    </div>
</div>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/requerido.js"></script>
<script src="../js/sendCORREO.js"></script>

</body>
</html>