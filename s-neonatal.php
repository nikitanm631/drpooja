<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Neonatal Surgeries</title>
    <?php include 'includes/head.php' ?>
  </head>
  <body>
    <?php include 'includes/menu.php' ?>

    <!-- SINGLE HEADER -->
    <div class="banner-head single-header">
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12">
            <h2>Neonatal Surgeries</h2>
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="services.php">Services</a></li>
              <li class="active">Neonatal Surgeries</li>
            </ol>
          </div>
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
              <h2><span class="text-purple">Neonatal </span><span class="text-red">Surgeries</span> </h2>
              <img src="myimages/services/10.jpg" alt="Dr Pooja" class="img-responsive">
              <br>
              <p class="text-justify">Being told that your baby will need surgery can be a frightening and worrying experience for parents. The conditions that require surgery early in life represent a real spectrum from those that are relatively minor to some more major, complex conditions. Some conditions are detected during pregnancy, by routine scans, others are not obvious until after the baby has been born, or develop in the early weeks</p>
              <p class="text-justify">There is another range of conditions that can affect the baby after birth, and can present quite suddenly. These include a condition that affects premature babies in particular, necrotising enterocolitis or NEC, which is an inflammation and infection of the gut. Another is a condition called atresia which is a blockage somewhere in the bowels. Finally hernias in the groin, which can usually develop after birth and generally require only a minor operation to correct.</p>
              <p class="text-justify">It is not always clear what the progress of the baby will be after their operation. The conditions vary, and while sometimes surgeons will have a good idea about the operation they plan to do, in other situations they will only know exactly what they have to do once they have started operating. There is unfortunately uncertainty at every stage for parents.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    <!-- END CONTENT -->

    <?php include 'includes/footer.php' ?>
  </body>
</html>
