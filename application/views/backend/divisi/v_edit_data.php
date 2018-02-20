<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('backend/komponen/basic'); ?>
  <title>AdminLTE 2 | Header</title>
  <!-- Tell the browser to be responsive to screen width -->
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!-- Header -->
<?php $this->load->view('backend/komponen/header'); ?>
<!-- End Header -->

<!-- Side Bar -->
<?php $this->load->view('backend/komponen/sidebar'); ?>
<!-- End Side Bar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="col-sm-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Data Produk</h3>
            </div>
            <script type="text/javascript" language="JavaScript">
             function konfirmasi()
             {
             tanya = confirm("Anda Yakin Data Sudah Benar?");
             if (tanya == true) return true;
             else return false;
             }
            </script>

            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/divisi/c_divisi/do_edit";?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Kode Divisi</label>
                  <div class="col-sm-10">
                    <input type="text" name="kd_divisi" class="form-control" value="<?php echo $kd_divisi; ?>" placeholder="Kode Divisi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Nama Divisi</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_divisi" class="form-control" value="<?php echo $nama_divisi; ?>" placeholder="Nama Divisi">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info" onclick="return konfirmasi()">Update</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
    </section>
  </div>
  
<!-- Footer -->

<?php $this->load->view('backend/komponen/footer'); ?>

<!-- End Footer -->

  
  <div class="control-sidebar-bg"></div>
</div>

</body>
</html>
