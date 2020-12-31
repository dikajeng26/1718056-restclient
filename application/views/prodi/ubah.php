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
                <h3 class="card-title">Ubah Data Prodi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jenjang</label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id" value="<?= $dataprodi['id']; ?>">
                      <input type="text" name="jenjang" class="form-control" id="jenjang" value="<?= $dataprodi['jenjang']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                      <input type="text" name="prodi" class="form-control" id="prodi" value="<?= $dataprodi['prodi']; ?>">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button onclick="goForward()" type="submit" class="btn btn-info">Ubah Data</button>
                  <button onclick="goBack()" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
          </div>
         </div>
        </div>
       </div>
     </div>
    </div>

<script>
function goBack() {
  window.history.-1();
}

function goForward() {
  window.history.go(2);
}
</script>
            <!-- /.card -->