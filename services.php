<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Services</title>
    <?php include 'includes/head.php' ?>
  </head>
  <body>
    <?php include 'includes/menu.php' ?>

    <!-- SINGLE HEADER -->
    <div class="container-fluid pad single-header">
      <div class="row">
        <div class="col-md-3 col-md-offset-1">
          <h3 class="text-light"> <b>Services</b> </h3>
          <ul class="breadcrumb">
            <li> <a href="index.php">Home</a> </li>
            <li class="active"><a href="#">Services</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END SINGLE HEADER -->

    <!-- CONTENT -->
    <div class="container pad ">
      <div class="row">
        <div class="col-md-4">
          <?php include 'list-services.php'; ?>
        </div>
        <div class="col-md-8">
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <h2><span class="text-green"> </span>Services </h2>
              <img src="images/ent/10.jpg" alt="Dr Pooja" class="img-responsive">
              <br>
              <p class="text-justify">Ear discharge can arise from the outer ear canal or from the middle ear through the perforation in the ear drum known as otitis media. Otitis externa is the condition when there is infection in the external ear canal skin, it can be a generalised swelling in the canal skin or a furuncle. If the hair follicle of the canal skin is infected, it forms a small localised painful swelling called furunculitis, and when it ruptures there is discharge from the ear.</p>
              <p class="text-justify">Chronic otitis media lasts for a long time or keeps coming back. As the symptoms are often less severe than those of an acute infection, the infection may go unnoticed and untreated for a long time. This may cause more damage than an acute infection.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    <!-- END CONTENT -->

    <?php include 'includes/footer.php' ?>
  </body>
</html>
