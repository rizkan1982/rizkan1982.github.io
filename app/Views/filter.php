<!-- Content wrapper -->
<title>Laporan</title>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
      <div class="card mb-4">
        <div class="row">
          <div class="col-md-6">
            <div class="card-body">
            <form class="form-horizontal form-label-left" novalidate
            action="
            <?php if ($kunci=='c_b') {
            echo base_url('home/cari_b');
            }else if ($kunci=='c_bm') {
            echo base_url('home/cari_bm');
            }else{
            echo base_url('home/cari_p');
            }
            ?>" method="post">

                <div class="mb-3">
                  <label for="email" class="form-label">Tanggal Awal</label>
                  <input type="date" class="form-control" id="awal" placeholder="Masukkan Tanggal Awal" name="awal" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Tanggal Akhir</label>
                  <input type="date" class="form-control" id="akhir" placeholder="Masukkan Tanggal Akhir" name="akhir" required>
                </div>


            <!-- bagian tombol submit -->
            <div class="col-12 d-flex justify-content-end">
              <div class="form-group mb-5">
                <div class="col-md-0 col-md-offset-0">
                  <button id="send" type="submit" class="btn btn-primary">PRINT</button>
                </div>
              </div>
            </div>
        </form>
            <!-- Content wrapper -->


            <form class="form-horizontal form-label-left" novalidate
                action="
                <?php if ($kunci=='c_b') {
                echo base_url('home/pdf_b');
                }else if ($kunci=='c_bm') {
                echo base_url('home/pdf_bm');
                }else{
                echo base_url('home/pdf_p');
                }
                ?>" method="post">
                <div class="mb-3">
                  <label for="email" class="form-label">Tanggal Awal</label>
                  <input type="date" class="form-control" id="awal" placeholder="Masukkan Tanggal Awal" name="awal" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Tanggal Akhir</label>
                  <input type="date" class="form-control" id="akhir" placeholder="Masukkan Tanggal Akhir" name="akhir" required>
                </div>


            <!-- bagian tombol submit -->
            <div class="col-12 d-flex justify-content-end">
              <div class="form-group mb-5">
                <div class="col-md-0 col-md-offset-0">
                  <button id="send" type="submit" class="btn btn-danger">PRINT PDF</button>
                </div>
              </div>
            </div>
            </form>
            <!-- Content wrapper -->

            <form class="form-horizontal form-label-left" novalidate
            action="
            <?php if ($kunci=='c_b') {
            echo base_url('home/excel_barang');
            }else if ($kunci=='c_bm') {
            echo base_url('home/excel_bm');
            }else{
            echo base_url('home/excel_p');
            }
            ?>" method="post">
                <div class="mb-3">
                  <label for="email" class="form-label">Tanggal Awal</label>
                  <input type="date" class="form-control" id="awal" placeholder="Masukkan Tanggal Awal" name="awal" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Tanggal Akhir</label>
                  <input type="date" class="form-control" id="akhir" placeholder="Masukkan Tanggal Akhir" name="akhir" required>
                </div>


            <!-- bagian tombol submit -->
            <div class="col-12 d-flex justify-content-end">
              <div class="form-group mb-5">
                <div class="col-md-0 col-md-offset-0">
                  <button id="send" type="submit" class="btn btn-success">PRINT EXCEL</button>
                </div>
              </div>
            </div>
        </form>