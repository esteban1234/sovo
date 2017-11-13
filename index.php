
<?php include 'vistas/encabezado.php' ?>
<body>

<div class="banneri">
  <div class="fondo">
    <div class="container cont-menu" style="margin-top: 2%;">
     <div class="col-sm-12 col-md-3" >
        <a class="btn btn-block btn-lg btn-success delete-br" href="index.php" id="select" >
            <i class="fa fa-bars oculto-i" id="icone_grande"></i> <br><br>
            <span class="texto_grande"> INDEX</span></a>
      </div>
      <div class="col-sm-12 col-md-3">
        <a class="btn btn-block btn-lg btn-danger delete-br" href="vistas/nosotros.php">
            <i class="fa fa-users oculto-i" id="icone_grande"></i> <br><br>
            <span class="texto_grande"> NOSOTROS</span></a>
      </div>
      <div class="col-sm-12 col-md-3">
        <a class="btn btn-block btn-lg btn-primary delete-br" href="vistas/servicios.php">
            <i class="fa fa-cog oculto-i" id="icone_grande"></i> <br><br>
            <span class="texto_grande"> SERVICIOS</span></a>
      </div>
      <div class="col-sm-12 col-md-3">
        <a class="btn btn-block btn-lg btn-warning delete-br" href="vistas/contacto.php">
            <i class="fa fa-phone oculto-i" id="icone_grande"></i> <br><br>
            <span class="texto_grande"> CONTACTO</span></a>
      </div> 
    </div>

    <p class="acbm">ASEGURAMOS TU CARGA CON LA TASA MAS BAJA DEL MERCADO <br> ¡GARANTIZADO!</p>
    <figure class="logo">
      <img src="img/sovo.png" alt="SOVO" class="img-responsive">
    </figure>
    <div class="boton" style="text-align: center; margin-top: 3%;">
      <a href="vistas/contacto.php"><button type="button" class="btn btn-danger btn-lg">CONTACTANOS</button></a>
    </div>
    
  </div>
</div>

<div class="op-menu">
  <i class="fa fa-bars fa-1x" aria-hidden="true"></i>
</div>
<div class="section del-padd height-total" style="padding: 5% 0px;">
  <div class="container delete-br">
    <h1 class="tit-pe">¿PORQUE ELEGIRNOS?</h1>
    <hr class="linea"> <br><br>
      <div class="row new-format">
        <div class="div1">
          <figure class="imagen"></figure>
          <p class="texto delete-br" style="background-color: #333; color: #fff;height:200px;">¡Aseguramos tu carga por menos del 1%! <br><br>
            
            Contamos con distintas soluciones especializadas para adaptarnos a los requerimientos de cada cliente, lo que genera un diseño operativo de excelencia para poder cubrir todas tus necesidades especificas. El seguro para tu carga por menos del 1% del valor factura declarado, servicio garantizado.</p>
        </div>
        <div class="div2">
          <div class="div2-1">
            <p class="texto tamano">
              ¡Somos tu mejor opción! <br><br>
              
              Ofrecemos soluciones tangibles a todos tus problemas de transporte de carga y logística, nuestra experiencia lo avala.
            </p>
            <figure class="imagen2">
              
            </figure>
          </div>
          <div class="div2-2">
            <figure class="imagen3">
              
            </figure>
            <p class="texto tamano">
              Transporte de carga <br><br>

              Ofrecemos transporte de carga urgente a toda la República Mexicana, contamos con trailers, thorton, rabón, camionetas, lowboy y grúas.
            </p>
          </div>
        </div>
      </div>
  </div>
</div>


<div class="section" style="padding: 5% 0%; background-color: #333;">
  <div class="container">
    <div class="row">
          <div class="col-sm-12 col-md-5 col-md-offset-1 delete-br">
            <h1 class="tit-fc" style="color: #fff; text-transform: uppercase;">¡Fletes a credito!</h1>
            <p class="texto" style="color: #fff;">Realiza tus pagos via teléfonica o acude a nuestras oficinas, <br>
            3, 6, 9 y 12 meses sin intereses con tus tarjetas de crédito participantes.</p>
            <figure class="bancos">
              <img src="img/logo1.png" class="img-responsive" alt="">
            </figure>
            <figure class="bancos">
              <img src="img/logo2.jpg" class="img-responsive" alt="">
            </figure>
            <figure class="bancos">
              <img src="img/logo3.png" class="img-responsive" alt="">
            </figure>
            <figure class="bancos">
              <img src="img/logo4.png" class="img-responsive" alt="">
            </figure>
          </div>
          <div class="col-sm-12 col-md-6">
            <img src="img/credito.jpg" class="img-responsive img-fc">
          </div>
      </div>
      <div class="boton" style="text-align: center; margin-top: 3%;">
      <a href="vistas/servicios.php"><button type="button" class="btn btn-danger btn-lg">SERVICIOS</button></a>
    </div>
  </div>
</div>




<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/bootstrap.js"></script>
<!-- <script src="js/slide.js"></script> -->

</body>
</html>