<?php get_header(); ?>
<!--Slider-->
<div id="carouselExampleFade" class="carousel slide carousel-fade mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1200.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/1200.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/1200.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
<!--Slider-->
<!--alerta
<div class="alert alert-dismissible alert-success">
    <div class="container my-5">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
</div>
</div>
      -->

      <!--contenido-->
<div class="container-fluid">
<div class="row">
    <!--entradas-->
    <div class="col-lg-9">
        <!--entrada individual-->
        <div class="card-body">
            <a href="single.html">
               <h2>Titulo Entrada</h2> 
            </a>
            <img src="img/1200.jpg" alt="" class="mb-3 img-fluid">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure reiciendis hic quidem. 
                Ducimus repellat, qui ullam, similique labore veniam aliquam sequi modi laborum saepe
                ipsum assumenda magnam quidem nulla atque.</p>
                <a href="single.html">
                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                </a>
        </div>
        <!--entrada individual-->

                <!--entrada individual-->
                <div class="card-body">
                    <a href="single.html">
                       <h2>Titulo Entrada</h2> 
                    </a>
                    <img src="img/1200.jpg" alt="" class="mb-3 img-fluid">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure reiciendis hic quidem. 
                        Ducimus repellat, qui ullam, similique labore veniam aliquam sequi modi laborum saepe
                        ipsum assumenda magnam quidem nulla atque.</p>
                        <a href="single.html">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                        </a>
                </div>
                <!--entrada individual-->

    </div>
    <!--entradas-->
    <!--side-->
    <div class="col-lg-3">
        <div class="card text-white bg-primary mb-1 mt-5" style="max-width: 20rem;">
            <div class="card-header">Seccion</div>
            <div class="card-body">
              <h4 class="card-title">Primary card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header">Seccion</div>
            <div class="card-body">
            <img src="img/vertical.jpg" class="img-fluid" alt="">
            </div>
          </div>
    
        
    </div>

    
</div>
  </div>
  <?php get_footer(); ?>