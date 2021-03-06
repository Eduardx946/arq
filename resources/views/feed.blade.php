@extends('layouts.app')

@section('content')

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">ArqExplorer</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{route('home.inicio')}}">Home</a></li>
          <li><a href="{{route('dev')}}">Sobre nós</a></li>
          <li><a href="{{route('galeria.inicio')}}">Galeria</a></li>
          <li><a href="{{route('feed.inicio')}}">Publicação</a></li>
          <li><a href="{{route('contato.inicio')}}">Contato</a></li>
          <li><a href="{{route('perfil.inicio')}}">Perfil</a></li>
          <li><a href="{{ url('/logout') }}">Sair</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <img src="img/logo.png" width=150 height=150>
                <h2>ArqExplorer</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <img src="img/logo.png" width=150 height=150>
                <h2>ArqExplorer</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <img src="img/logo.png" width=150 height=150>
                <h2>ArqExplorer</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <img src="img/logo.png" width=150 height=150>
                <h2>ArqExplorer</h2>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >

      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Novas Postagens</h3>
        </header>

<div class="text-center">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="color: white; background: #18d26e; border: none;"> Nova Publicação </button>
</center>
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova Postagem</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="{{route('texto.salvar')}}">
          {{ csrf_field() }}

          
          <div class="form-group">
            <label for="formGroupExampleInput2">Postagem</label>
            <input  class="form-control" id="formGroupExampleInput2" placeholder=""
            				type='textarea' name='texto'>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="input" class="btn btn-primary" style="color: white; background: #18d26e; border: none;">Salvar</button>
      </div>
        </form>
    </div>
    </div>
  </div>
</div>
</div>
<br><br>


      

      <br>


		@foreach ($publicacoes as $pub)

	<div class="row" style="margin: 0px">

        <div class="card col-lg-6 col-md-8 container">
       
        <div class="card-body">

        	
        		<h5 class="card-title text-center">{{$pub->usuario['name']}}</h5>
          	<p class="card-text text-justify">{{$pub->texto}} </p>
        </div>
        </div>
      </div>

      <br>
      @endforeach


  
    <br><br>

      </section>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>ArqExplorer</h3>
            <p>Somos apenas um grupo de estudantes do curso Técnico em Informática do IFRN - Campus Caicó vivenciando uma longa jornada em busca do tão sonhado diploma, tropeçando em mil e uma displinas, principalmente nas técnicas, porque todos estamos no curso só de passagem. Que Deus nos ajude. </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="indexreal.html">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="desenvolvedores.html">Sobre nós</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contato</h4>
            <p>
              Endereço do IFRN <br>
              Caicó, RN 535022<br>
              Brasil <br>
              <strong>Phone:</strong> +55 84 9999-9999<br>
              <strong>Email:</strong> arqexplorer@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>


        </div>
      </div>
    </div>

    
 



</body>
</html>


@endsection