<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= 'About us!' ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="assets/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<main class="main content">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="assets/img2/11.jpg" class="d-block w-100" alt="carousel1">
    </div>
    <div class="carousel-item">
      <img src="assets/img2/22.jpg" class="d-block w-100" alt="carousel2">
    </div>
    <div class="carousel-item">
      <img src="assets/img2/3.jpg" class="d-block w-100" alt="carousel3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.carousel-item img {
    max-width: 500px; /* Максимальна ширина зображення */
    max-height: 400px; /* Максимальна висота зображення */
}

.carousel-control-prev,
.carousel-control-next {
    width: auto;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 30px; /* Розмір стрілок керування */
    height: 30px; /* Розмір стрілок керування */
}

</style>


</main>
</body>
</html>
