<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a1a84ee869.js" crossorigin="anonymous"></script>
    <title>Tienda de calzados</title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-success rounded-bottom">
        <a href="#" class="navbar-brand col-auto">TIENDA STAR</a>
        <button class="btn btn-primary navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <i class="fas fa-list-ul"> Servicios</i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Item 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Item 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Item 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Item 4</a>
              </li>
            </ul>
        </div>
      </nav>
    </header>

    <div id="carouselExampleCaptions" class="carousel slide carosel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
          <img src="img/otros/bienvenido1.jpg" class="d-block w-100" height="560px">
          <div class="carousel-caption d-none d-md-block">
            <h5>Primer anuncio</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item" data-interval="10000">
          <img src="img/otros/calzados.jpg" class="d-block w-100" height="560px">
          <div class="carousel-caption d-none d-md-block">
            <h5>Segundo anuncio</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item" data-interval="10000">
          <img src="img/otros/bootstrap.png" class="d-block w-100" height="560px">
          <div class="carousel-caption d-none d-md-block">
            <h5>Tercer anuncio</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



    <main class="container mt-4">
      <div class="row">
        <div class="col-3">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
              <div class="row row-cols-3">
                <div class="col border card">
                  <img src="img/productos/ejemplo1.jpg" class="card-img-top" height="200px">
                  <div class="card-body">
                    <h6>Articulo 1</h6>
                    <p>Descripción: Lorem ipsum dolor sit amet,udiandae,</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
                <div class="col border card">
                  <img src="img/productos/ejemplo1.jpg" class="card-img-top" height="200px">
                  <div class="card-body">
                    <h6>Articulo 1</h6>
                    <p>Descripción: Lorem ipsum dolor sit amet,udiandae,</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
                <div class="col border card">
                  <img src="img/productos/ejemplo1.jpg" class="card-img-top" height="200px">
                  <div class="card-body">
                    <h6>Articulo 1</h6>
                    <p>Descripción: Lorem ipsum dolor sit amet,udiandae,</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
                <div class="col border card">
                  <img src="img/productos/ejemplo1.jpg" class="card-img-top" height="200px">
                  <div class="card-body">
                    <h6>Articulo 1</h6>
                    <p>Descripción: Lorem ipsum dolor sit amet,udiandae,</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
                <div class="col border card">
                  <img src="img/productos/ejemplo1.jpg" class="card-img-top" height="200px">
                  <div class="card-body">
                    <h6>Articulo 1</h6>
                    <p>Descripción: Lorem ipsum dolor sit amet,udiandae,</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate reiciendis alias ut asperiores, eligendi animi deleniti eveniet in vero quo ullam beatae architecto eum laboriosam impedit iusto est autem! A.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores doloremque eius tenetur, aspernatur ipsum soluta tempore natus omnis optio neque mollitia facere repellat veniam magnam enim cum numquam, perferendis voluptatibus.
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque saepe error tempora soluta nisi obcaecati voluptate repellendus et dolorum ut voluptas nostrum eaque quo vitae, iste ad. Recusandae, beatae commodi?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab tenetur vel, fugiat sequi rerum eveniet eos facere maxime sint nesciunt. Tenetur ab suscipit, qui cum nesciunt aut temporibus natus labore.
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, placeat eaque enim magni quam debitis assumenda ipsam, necessitatibus officiis earum autem, quibusdam provident numquam aspernatur. Quidem aliquam doloribus itaque debitis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore tempore sapiente sit. Quis accusantium cumque voluptates modi rerum porro qui magnam. Unde blanditiis tenetur ab incidunt modi earum repudiandae dignissimos!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos optio ipsum accusantium dignissimos ab dolorem excepturi esse, sunt nisi dolor modi repudiandae consequatur fugiat, inventore quaerat, illum eum, magnam voluptate?
            </div>
          </div>
        </div>
      </div>
    </main>


    <footer class="bg-info mt-5">
      <div class="container p-4">
        <div class="row row-cols-3 mx-auto">
          <div class="col">
            <h6>Contactame</h6>
            <ul>
              <li>+51 987456321</li>
              <li>email.123@star.com</li>
            </ul>
          </div>
          <div class="col">
            <h6>Información</h6>
            <ul>
              <li>Más información</li>
              <li>Eventos</li>
              <li>Testimonios</li>
            </ul>
          </div>
          <div class="col">
            <h6>Otros</h6>
            <ul>
              <li>Ayuda</li>
              <li>Terminos y condiciones</li>
              <li>Politica de privacidad</li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row row-cols-2">
          <div class="col">

          </div>
          <div class="col">
            &copy;TIENDA STAR
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
