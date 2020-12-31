<!-- Horizontal Form -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Jenis Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="virtual" class="col-sm-2 col-form-label">Virtual</label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id" value="<?= $datajenispembayaran['id']; ?>">
                      <input type="text" name="virtual" class="form-control" id="virtual" value="<?= $datajenispembayaran['virtual']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_pembayaran" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                    <div class="col-sm-10">
                      <input type="text" name="jenis_pembayaran" class="form-control" id="jenis_pembayaran" value="<?= $datajenispembayaran['jenis_pembayaran']; ?>">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button onclick="goForward()" type="submit" class="btn btn-info">Ubah Data</button>
                  <!-- <button onclick="goBack()" class="btn btn-default float-right">Cancel</button> -->
                </div>
                <!-- /.card-footer -->
              </form>
          </div>
         </div>
        </div>
       </div>
     </div>
    </div>

<!-- <script>
function goBack() {
  window.history.-1();
}

function goForward() {
  window.history.go(2);
}
</script> -->
            <!-- /.card -->