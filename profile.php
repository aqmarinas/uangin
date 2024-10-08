<?php
  require 'cek-sesi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kelola Admin</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <?php require 'koneksi.php'; ?>
  <?php require 'sidebar.php'; ?>
    <!-- Main Content -->
      <div id="content">
        <?php require 'navbar.php'; ?>
        <!-- Begin Page Content -->
        <div class="container">
          <?php
            if ($_SESSION['id'] == true) {
              $lihat = 'none';
            } else {
              $lihat = 'hidden';
            };
          ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Kelola Admin</h6>
            </div>
            <div class="card-body">
                  <?php 
                    $id = $_SESSION['id'];
                    if ($id == 1) {
                      $query = mysqli_query($koneksi,"SELECT * FROM admin");
                    } else {
                      $query = mysqli_query($koneksi,"SELECT * FROM admin where id_admin = '$id'");
                    }

                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>">

                                    <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" value="<?php echo $data['id_admin']; ?>" disabled>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" disabled>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>" disabled>
              </div>
            </div>

            <!-- Button untuk modal -->
            <div class="col-12">
              <a href="#" type="button" class="fa fa-edit btn btn-success btn-md" data-toggle="modal" data-target="#myModal<?php echo $data['id_admin']; ?>"></a>
            </div>
          </div>

                <!-- Modal Edit Mahasiswa-->
                <div class="modal fade" id="myModal<?php echo $data['id_admin']; ?>" role="dialog">
                  <div class="modal-dialog">
                  <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      <h4 class="modal-title">Ubah Data Admin</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <form role="form" action="proses-edit-admin.php" method="get">

                        <?php
                          $id = $data['id_admin']; 
                          $query_edit = mysqli_query($koneksi,"SELECT * FROM admin WHERE id_admin='$id'");
                          //$result = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>


                          <input type="hidden" name="id_admin" value="<?php echo $row['id_admin']; ?>">

                          <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control" value="<?php echo $row['id_admin']; ?>" disabled>      
                          </div>

<!--nama ga keganti di navbar-->
                          <!--<div class="form-group">-->
                          <!--  <label>Nama</label>-->
                          <!--  <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">      -->
                          <!--</div>-->

                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">      
                          </div>

                        <!-- pw ga bisa ke hash-->
                          <!--<div class="form-group">-->
                          <!--  <label>Password</label>-->
                          <!--  <input type="text" name="pass" class="form-control" value="<?php echo $row['pass']; ?>"   -->
                          <!--</div>-->

                          <div class="modal-footer">  
                            <button type="submit" class="btn btn-success">Ubah</button>
                          </div>

                          <?php 
                          }
                          ?>  
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php               
                } 
                ?>

                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
      <!-- End of Main Content -->

      <?php require 'footer.php'?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php require 'logout-modal.php';?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>
</html>
