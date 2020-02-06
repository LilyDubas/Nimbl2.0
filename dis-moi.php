<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MDB</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/mdb.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!--Navbar -->
  <?php include 'header.php' ?>
  <!-- question de la semaine -->

  <h1 class="text-center p-3 font-weight-bold">La question de la semaine</h1>
  <div class="container mt-5 p-3">
    <section class="mx-md-5 dark-grey-text">
      <div class="row">
        <div class="col-md-12">

          <!-- Card -->
          <div class="card card-cascade wider reverse">

            <!-- Card image -->
            <div class="view view-cascade overlay">
              <img class="card-img-top" src="assets/img/see-in-the-dark.jpg" alt="Sample image">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

          <!-- Card text -->
          <div class="mt-5 p-3">
            <h2 class="text-center">Pourquoi ne voit-on pas dans le noir?</h2>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui praesentium voluptatum deleniti atque
              corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
              sunt in culpa nemo enim ipsam voluptatem quia voluptas sit qui officia deserunt mollitia animi, id
              est laborum et dolorum fuga quidem rerum facilis est distinctio.
            </p>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
              maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Quis autem vel
              eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur. Temporibus
              autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates
              repudiandae sint et molestiae non recusandae itaque earum rerum.</p>

          </div>
        </div>
      </div>
      <hr class="mb-5 mt-4">

    </section>
  </div>
  <div class="container mt-5">


    <!--Section: Content-->
    <section class="dark-grey-text">

      <!-- Section heading -->
      <h2 class="text-center font-weight-bold mb-4 pb-2">Vos questions</h2>
      <!-- Section description -->
      <p class="text-center mx-auto w-responsive mb-5">Science, actualités, nature, mathématiques, psychologie... Nimbl réponds à toutes vos questions.</p>
      <!-- questions -->
      <div class="row align-items-center">
        <div class="col-lg-5 col-xl-4">
          <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
            <img class="img-fluid" src="assets/img/sea-lion.jpg" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <div class="col-lg-7 col-xl-8">
          <h4 class="font-weight-bold mb-3"><strong>Quelle est la différence entre un phoque et une otarie?</strong></h4>

          <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
            quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
            et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
          <!-- Post data -->
          <p>question posée par <a class="font-weight-bold">Pierre Monvoisin</a>, le 05/04/2020</p>
          <!-- Read more button -->
          <a class="btn btn-primary btn-md mx-0 btn-rounded">Read more</a>

        </div>
      </div>
      <hr class="my-5">
      <div class="row align-items-center">
        <div class="col-lg-5 col-xl-4">
          <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
            <img class="img-fluid" src="assets/img/seasons.jpg" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <div class="col-lg-7 col-xl-8">
          <h4 class="font-weight-bold mb-3"><strong>Pourquoi y a-t-il des saisons?</strong></h4>

          <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
            quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
            et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
          <!-- Post data -->
          <p>question posée par <a class="font-weight-bold">Séverine Picot</a>, le 05/02/2020</p>
          <!-- Read more button -->
          <a class="btn btn-primary btn-md mx-0 btn-rounded">Read more</a>

        </div>
      </div>
      <hr class="my-5">
    </section>
  </div>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="assets/js/script.jsassets/"></script>

  </body>
  <!-- Footer -->
  <?php include 'footer.php' ?>
  </html>
