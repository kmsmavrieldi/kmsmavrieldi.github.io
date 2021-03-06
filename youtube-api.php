<?php
function get_URL($url){ 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER =>true,
));
$result = curl_exec($curl);
return json_decode($result, true);
}

$data = get_URL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCZLEB_Oux4yjwV2YIhAlPyQ&key=AIzaSyBTpyWMMNZzkZfasCzV0e2-yAlBmROawz8');

$imgYT = $data['items'][0]['snippet']['thumbnails']['default']['url'];
$titleYT = $data['items'][0]['snippet']['title'];
$descriptionYT = $data['items'][0]['snippet']['description'];
$subscribersYT = $data['items'][0]['statistics']['subscriberCount'];

$data = get_URL('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCZLEB_Oux4yjwV2YIhAlPyQ&key=AIzaSyBTpyWMMNZzkZfasCzV0e2-yAlBmROawz8&maxResults=1&order=date');

$thumbVideoYT = $data['items'][0]['snippet']['thumbnails']['medium']['url'];
$linkVideoYT = $data['items'][0]['id']['videoId'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Kms M Avrieldi</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/"> -->

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Kms M Avrieldi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://kmsmavrieldi.github.io/my-profile/">Profile</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
</header>

<main>




  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/pexels-monoar-rahman-109371.jpg" alt="website" width="100%" height="100%">  

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Website</h1>
            <p>Collection of web pages and related content that is identified by a common domain name and published on at least one web server.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Lear more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/pexels-danny-meneses-943101.jpg" alt="website" width="100%" height="100%"> 

        <div class="container">
          <div class="carousel-caption">
            <h1>Programming</h1>
            <p> The process of designing and building an executable computer program to accomplish a specific computing result or to perform a particular task.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/pexels-manuel-geissinger-325229.jpg" alt="website" width="100%" height="100%"> 

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>SQL Database</h1>
            <p>SQL: Structured Query Language. Tables: Database objects that carry data.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>





  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
    <h1 class="text-center my-4">3 Best PHP Frameworks</h1>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="https://tse4.mm.bing.net/th?id=OIP.LNokfwWMXsFjrloMVj5D_gHaHa&pid=Api&P=0&w=300&h=300" class="rounded" width="140" height="140" alt="">
        <h2>Laravel</h2>
        <p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.</p>
        <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img src="https://tse4.mm.bing.net/th?id=OIP.md8PU20AkBJ8qTyAx9OlawHaHa&pid=Api&P=0&w=300&h=300" class="rounded" width="140" height="140" alt="">
        <h2>CodeIgniter</h2>
        <p>CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.</p>
        <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        
        <img src="https://symfony.com/images/opengraph/symfony.png" class="rounded" width="100%" alt="">

        <h2>Symfony</h2>
        <p>Symfony is a PHP web application framework and a set of reusable PHP components/libraries. It was published as free software on October 18, 2005 and released under the MIT license.</p>
        <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
    <div class="bg-light rounded p-3">
    <h1 class="text-center">3 Best Javascript Frameworks</h1>
    <hr class="featurette-divider">
    
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Angular</h2>
        <p class="lead">Google operates this framework and is implemented to use for developing a Single Page Application (SPA). It extends the HTML into the application and interprets the attributes to perform data binding.</p>
      </div>
      <div class="col-md-5">
        <img src="https://cdn-images-1.medium.com/max/1200/1*GmMtKznzJ1dS8sSzxzR3ow.png" width="500" height="500" alt="">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">React</h2>
        <p class="lead">Created by Facebook, the React framework has earned popularity within a short period. It is used to develop and operate the dynamic User Interface of the web pages with high incoming traffic.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="http://ih0.redbubble.net/image.127584817.4804/sticker,375x360.u2.png" width="500" height="500" alt="">        
      
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Vue JS</h2>
        <p class="lead">Though developed in the year 2016, this JavaScript framework has already made its way into the market and has proven its worth by offering various features.</p>
      </div>
      <div class="col-md-5">
        <img src="  https://www.proximitycr.com/wp-content/uploads/2018/11/1200px-Vue.js_Logo_2.svg_.png" width="500" height="500" alt="">        

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
</div> 
  </div><!-- /.container -->

  
</main>
  <!-- FOOTER -->
  <footer class="container">
    <!-- Youtube  -->
    <div class="container">
      <h1 class="text-center my-4">My Favourite Youtube Channel</h1>
      <div class="row d-flex justify-content-center">
        <div class="col-md-4">
          <a href="https://www.youtube.com/watch?v=<?= $linkVideoYT ?>" target="_blank">
            <img src="<?= $thumbVideoYT; ?>" class="rounded img-thumbnail img-fluid" width="100%"  alt="">
          </a>
        </div>
        <div class="col-md-8">
            <p style='text-align:justify'><?= $descriptionYT; ?></p>
        </div>  
      </div>
      <div class="row d-flex justify-content-start">
        <div class="col-md-1">
          <img src="<?= $imgYT; ?>" class="img-fluid rounded-circle img-thumbnail float-start"> 
        </div>
        <div class="col-md-3">
          <h5><?= $titleYT; ?></h5>
          <p> <?= number_format($subscribersYT); ?> Subscribers </p>
        </div>           
        <div class="col-md-8">
          <div class="g-ytsubscribe" data-channelid="UCZLEB_Oux4yjwV2YIhAlPyQ" data-layout="default" data-count="default"></div>
        </div>
      </div>
    </div>
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017???2021 PT Berkah Project &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://apis.google.com/js/platform.js"></script>

  
      
  </body>
</html>
