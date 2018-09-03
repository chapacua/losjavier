<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Premios</title>
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
    <h5 class="section-title h1"><?php echo $titulo; ?></h5>
    <p class="text-center"><?php echo $descripcion; ?></p>
    <div class="row">
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/alejandromira.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Alejandro Mira</h4>
                  <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Alejandro Mira">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/yecidrendon.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Yecid</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/luisaramirez.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Luisa</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/alexcano.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Alex Cano</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Alex Cano">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/alexpalacio.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Alex Palacio</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Alex Palacio">
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
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/jaidercano.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Jaider</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/danielcano.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Daniel Cano</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Daniel Cano">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/juandavid.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">David</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/danielfederico.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Daniel</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/camilodurango.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Camilo</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/brayanhernandez.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Brayan</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/dawinson.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Dawinson</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Dawinson">
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
                  <h4 class="card-title">Alejandro Velasco</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
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
      <!-- Team member -->
      <div class="col-xs-12 col-sm-6 col-md-4 card-main">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/esneyder.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Esneyder</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Esneyder">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/julian.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Julian</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Julian">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/juliana.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Juliana</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Juliana">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/leonardorestrepo.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Leonardo</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Leonardo">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/morantes.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Morantes</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Morantes">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/santiago.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Santiago</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Santiago">
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
                  <p><img class=" img-fluid" src="<?php echo base_url("application/views/public/img/fotos/baena.jpg"); ?>" alt="card image"></p>
                  <h4 class="card-title">Baena</h4>
                    <?php echo form_open('Votacion/guardar/'); ?>
                    <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                    <input type="hidden" name="participante" value="Baena">
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