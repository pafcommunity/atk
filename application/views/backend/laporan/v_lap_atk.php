<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('backend/komponen/basic'); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>AdminLTE 2 | LAPORAN ATK</title>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        LAPORAN ATK
        <small>Control panel</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href="<?php echo base_url("index.php/laporan/c_lap_atk/cetak"); ?>"><button class="btn btn-success btn">Cetak Data</button></a>
              <table id="tbl_produk" class="table table-bordered table-striped tbl_produk">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ATK ID</th>
                  <th>Produk ID</th>
                  <th>Nomor PO</th>
                  <th>Unit</th>
                  <th>Stock</th>
                </tr>
                </thead>

                <tbody>
                <?php
                    ob_start();
                    if(!empty($atk)){
                        $no = 1;
                        foreach($atk as $data){
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$data->atk_id."</td>";
                            echo "<td>".$data->produk_id."</td>";
                            echo "<td>".$data->nomor_po."</td>";
                            echo "<td>".$data->unit."</td>";
                            echo "<td>".$data->stock."</td>";
                            echo "</tr>";
                            $no++;
                        }
                    }
                    ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
  </div>
  
<!-- Footer -->

<?php $this->load->view('backend/komponen/footer'); ?>

</body>
</html>
