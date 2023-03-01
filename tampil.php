<?php
extract ($_GET);
extract($_POST);
include "koneksi.php";
error_reporting(0)
?>
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
  <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
  <div id="right-panel" class="right-panel">
  <!-- Header-->
    <header id="header" class="header">
      <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" alt="Logo">SIPMABA</a>
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
                    <li class="active">
                        <a href="tampil.php"<class="menu-icon"><i class="menu-icon fa fa-bar-chart"></i>Prediksi</a>
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
            <!-- 2colom -->
            <div class="row">
                    <div class="col-lg-8">
                        <section class="card">
                          <div class="card-header">
                            <strong class="card-title">Tampil Data</strong>
                          </div>
                          <div class="card-body">
                            <div id="tampil">
                              <table class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Tahun Akademik</th>
                                    <th scope="col">Jumlah PMB (Y)</th>
                                    <th scope="col">X (Periode)</th>
                                    <th scope="col">XY</th>
                                    <th scope="col">X Kuadrat</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $sql = mysqli_query($koneksi, "SELECT * FROM db_pmb ORDER BY periode_pmb ASC") or die (mysqli_error($koneksi)); {
                                        $no = 1;
                                        $x = 0;
                                        $xy = 0;
                                        $xkua = 0;
                                        while ($data = mysqli_fetch_array($sql)) {
                                          $xy = $x*$data['jumlah_pmb'];
                                          $xkua = $x*$x;
                                          ?>
                                            <tr>
                                              <td><?=$no;?>.</td>
                                              <td><?=$data['periode_pmb'];?></td>
                                              <td><?=$data['jumlah_pmb'];?></td>
                                              <td><?=$x;?></td>
                                              <td><?=$xy;?></td>
                                              <td><?=$xkua;?></td>
                                            </tr>
                                            <?php
                                            $jumlah_x += $x;
                                            $jumlah_y += $data['jumlah_pmb'];
                                            $jumlah_xx += $xkua;
                                            $jumlah_xy += $xy;

                                            $no++;
                                            $x++;
                                          }
                                          ?>
                                          <tr>
                                            <td colspan="2">Jumlah</td>
                                            <td><?=$jumlah_y;?></td>
                                            <td><?=$jumlah_x;?></td>
                                            <td><?=$jumlah_xy;?></td>
                                            <td><?=$jumlah_xx;?></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">Rata2</td>
                                            <td>
                                              <?php
                                              $rata2_y = $jumlah_y / $x;
                                              echo round($rata2_y);
                                              ?>
                                            </td>
                                            <td>
                                              <?php
                                              $rata2_x = $jumlah_x / $x;
                                              echo round($rata2_x);
                                              ?>
                                            </td>
                                            <td>
                                              <?php
                                              $rata2_xy = $jumlah_xy / $x;
                                              echo round($rata2_xy);
                                              ?>
                                            </td>
                                            <td>
                                              <?php
                                              $rata2_xx = $jumlah_xx / $x;
                                              echo round($rata2_xx);
                                              ?>
                                            </td>
                                          </tr>
                                            <?php
                                          }
                                          ?>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </section>
                              </div>

                    <?php
                    if (isset($_POST['periode_pmb'])) {
                    ?>
                    <div class="col-lg-4 ">
                      <section class="card bg-danger">
                        <div class="card-body">
                          <div class="text-light">
                            <?php
                              $prediksi = $_POST['periode_pmb'];
                            ?>
                            Hasil forecast <?php echo $prediksi; ?> tahun kedepan : 
                            <br>
                            <?php
                              $jum = mysqli_query($koneksi, "SELECT count(periode_pmb) as jml_data FROM db_pmb");
                              $jumlah = mysqli_fetch_array($jum);
                              
                              $rata_x = $jumlah_x / $jumlah['jml_data']; 
                              $rata_y = $jumlah_y / $jumlah['jml_data'];

                              //persamaan 1 = $jumlah['jml_data']A + $jumlah_xB = jumlah_y
                              //persamaan 2 = $jumlah_xA + jumlah_xxB = jumlah_xy
                              $nilai_b1 = (($jumlah['jml_data'] * $jumlah_x) - ($jumlah_x * $jumlah['jml_data']));
                              $nilai_b2 = (($jumlah_x * $jumlah_x) - ($jumlah_xx * $jumlah['jml_data']));
                              $nilai_b3 = (($jumlah_y * $jumlah_x) - ($jumlah_xy * $jumlah['jml_data']));
                              $nilai_b = $nilai_b3 / $nilai_b2;

                              $nilai_a1 = $jumlah_xy - ($jumlah_xx * $nilai_b);
                              $nilai_a = $nilai_a1 / $jumlah_x; 

                              // $$nilai_b = round((($jumlah['jml_data']*$jumlah_xy)-($jumlah_x-$jumlah_y)) / (($jumlah['jml_data']*$jumlah_xy)-($jumlah_x-$jumlah_x)));
                              // $$nilai_a = round($rata_y-($nilai_b*$rata_x));

                              $nilai_x = ($x-1)+$prediksi;

                              $hasil_forecast = round($nilai_a+($nilai_b*$nilai_x));
                            ?>
                          </div>
                          <div class="text-light">
                            Prediksi PMB untuk <?=$prediksi;?> tahun berikunya  adalah <?=$hasil_forecast;?> pendaftar
                          </div>
                        </div>
                      </section>
                    </div>
                    <?php
                      }
                    ?>
                </div>
                <!-- 2colom-->
          </div>
        </div>
        <div class="clearfix"></div>
        <?php include "assets/footer.php" ?>
      </div>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
  <script src="assets/js/lib/data-table/datatables.min.js"></script>
  <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
  <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
  <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/lib/data-table/jszip.min.js"></script>
  <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
  <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
  <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
  <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
  <script src="assets/js/init/datatables-init.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
    });
  </script>
</body>
</html>
