<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIPMABA</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
  <div id="right-panel" class="right-panel">

          <!-- Header-->
          <header id="header" class="header">
              <div class="top-left">
                  <div class="navbar-header">
                     <a class="navbar-brand" alt="Logo">Aplikasi PMB</a>
                  </div>
              </div>
              
          </header>
  <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"<class="menu-icon"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <!--<li class="menu-title">UI elements</li>--><!-- /.menu-title -->
                    <li>
                        <a href="input.php"<class="menu-icon"><i class="menu-icon  fa fa-forward"></i>Input PMB</a>
                    </li>
                    <li>
                        <a href="tampil.php"<class="menu-icon"><i class="menu-icon fa fa-users"></i>Tampil Data</a>
                    </li>
                    <li class="active">
                        <a href="prediksi.php"<class="menu-icon"> <i class="menu-icon fa fa-bar-chart"></i>Prediksi</a>
                    </li>

                    <!--<li class="menu-title">Icons</li>--><!-- /.menu-title -->

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    
    <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Prediksi</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="prediksi">
                                    <div class="card-body">
                                        <!--<div class="card-title">
                                            <h3 class="text-center">Prediksi</h3>
                                        </div>-->

                                          <form id="form1" name="form1" action="tampil.php" method="post">
                                            Peramalan PMB untuk
                                            <select name="periode_pmb" required>
                                              <?php
                                              for ($i=1; $i <=10 ; $i++) {
                                                // code...
                                                echo "<option value='$i'>$i</option>";
                                              }
                                               ?>
                                             </select>
                                             Tahun akademik berikutnya <input type="submit" name="prediksi" id="prediksi"class="btn btn-primary btn-sm" value="Prediksi"/>
                                          </form>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

            <div class="clearfix"></div>

            <?php include "assets/footer.php" ?>


            </div><!-- /#right-panel -->

            <!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
