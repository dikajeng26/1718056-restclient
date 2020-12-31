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
                <h3 class="card-title">Tambah Data Jenis Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" name="id" class="form-control" id="id">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_pengguna" class="col-sm-2 col-form-label">Jenis Pengguna</label>
                    <div class="col-sm-10">
                      <input type="text" name="jenis_pengguna" class="form-control" id="jenis_pengguna">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hak_akses" class="col-sm-2 col-form-label">Hak Akses</label>
                    <div class="col-sm-10">
                      <input type="text" name="hak_akses" class="form-control" id="hak_akses">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Tambah Data</button>
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
</script> -->