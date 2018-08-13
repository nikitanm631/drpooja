<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Neonatal Surgery</title>
    <?php include 'includes/head.php' ?>
  </head>
  <body>
    <?php include 'includes/menu.php' ?>

    <!-- SINGLE HEADER -->
    <div class="banner-head single-header">
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12">
            <h2>Neonatal Surgery</h2>
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="services.php">Services</a></li>
              <li class="active">Neonatal Surgery</li>
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
                <h2><span class="text-purple">Neonatal </span><span class="text-red">Surgery</span> </h2>
                <img src="myimages/services/neonatal.jpg" alt="Dr Pooja" class="img-responsive">
                <br>
                <p class="text-justify">Neonatal Surgery deals exclusively with newborns who are born with congenital problems and require surgical correction. These babies require intensive care, beginning prenatally. At the time of prenatal screening, if any anomalies are discovered, a pediatric surgeon meets with the expecting families to counsel them regarding the way forward. The prenatal visits are used to plan and prepare for the operationthat will be needed after birth.</p>
                <p class="text-justify">We offer the best possible care for the newborn during the entire process of surgery. Our state-of-the-art operating room and neonatal intensive care unit provide the latest advances in equipment. In addition, we have fully equipped newborn transport team that can safely bring the newborn for specialised care.</p>
                <p class="text-justify"><b>Commonly performed newborn surgeries -</b> </p>
                <ul>
                  <li>Tracheo-esophagealfistula</li>
                  <li>Diaphragmatic Hernia</li>
                  <li>Duodenal and otherintestinal atresia</li>
                  <li>Anorectal malformation</li>
                  <li>Hirschsprungs Disease</li>
                  <li>Malrotation</li>
                  <li>Pyloric stenosis</li>
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
