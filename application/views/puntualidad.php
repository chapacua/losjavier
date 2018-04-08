<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Los Javier</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Css propio -->
    <link rel="stylesheet" href="<?php echo base_url("application/views/public/css/votoStyle.css"); ?>">
</head>
<body>
<!-- Team -->
<section id="team" class="pb-5">
  <div class="container">
    <h5 class="section-title h1">puntualidad</h5>
    <p class="text-center">¿Quíen es esa persona que siempre llega a tiempo a las clases, tanto al inicio de la jornada como luego de los descansos?</p>
    <div class="row">
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/yosman.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Yosman</h4>
                  <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Yosman">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/yecid.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Yecid</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Yecid">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/luisa.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Luisa</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Luisa">
                    <button type="submit" class="btn btn-primary btn-sm">Esta es la mia</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/gloria.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Gloria</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Gloria">
                    <button type="submit" class="btn btn-primary btn-sm">Esta es la mia</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/kevin.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Kevin</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Kevin">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/jeraldine.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Jeraldine</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Jeraldine">
                    <button type="submit" class="btn btn-primary btn-sm">Esta es la mia</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/jaider.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Jaider</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Jaider">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/estive.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Estiven</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Estiven">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/david.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">David</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="David">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/daniel.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Daniel</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Daniel">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/camilo.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Camilo</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Camilo">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/brayan.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Brayan</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Brayan">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/anderson.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Anderson</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Anderson">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/alejandro.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Alejandro</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="puntualidad">
                    <input type="hidden" name="participante" value="Alejandro">
                    <button type="submit" class="btn btn-primary btn-sm">Este es el mio</button>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
    </div>
  </div>
</section>
<!-- Team -->
</body>
</html>