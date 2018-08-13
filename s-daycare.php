<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Day Care Surgery</title>
    <?php include 'includes/head.php' ?>
  </head>
  <body>
    <?php include 'includes/menu.php' ?>

    <!-- SINGLE HEADER -->
    <div class="banner-head single-header">
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12">
            <h2>Day Care Surgery</h2>
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="services.php">Services</a></li>
              <li class="active">Day Care Surgery</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- END SINGLE HEADER -->

    <!-- CONTENT -->
    <section class="service-page">
      <div class="container pad ">
        <div class="row">
          <div class="col-md-4">
            <?php include 'list-services.php'; ?>
          </div>
          <div class="col-md-8">
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h2><span class="text-purple">Day </span><span class="text-red">Care Surgery</span> </h2>
                <img src="myimages/services/cystoscopy.jpg" alt="Dr Pooja" class="img-responsive">
                <br>
                <p class="text-justify">We provide day care facilities for surgeries like Hernia, Undescended testis, Cystoscopy etc. The surgery is done under general/ local anesthesia and requires hospitalization for 8 – 10 hrs. Patients are admitted early in the morning and after the post operative observation, they are discharged home.</p>
                <ul>
                  <li>Hernia (Inguinal and Umbilical)</li>
                  <li>Hydrocele</li>
                  <li>Orchidopexy for Undescended Testis</li>
                  <li>Circumscision</li>
                  <li>Soft Tissues Swelling like Hemangioma and Lymphangioma</li>
                </ul>
              </div>
            </div>
          </div>
          </div>
        </div>
    </section>
    <!-- END CONTENT -->

    <?php include 'includes/footer.php' ?>
  </body>
</html>
