<title>Edit Level</title>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Tambah <?=$title?></h4>

    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
            <form action="<?= base_url('level/aksi_edit/')?>" method="post">
              <input type="hidden" name="id" value="<?php echo $dar->id_level ?>">
              <div class="mb-3">
                <label for="email" class="form-label">Nama Level</label>
                <input type="text" class="form-control" id="nama_level" placeholder="Masukkan Nama Level" name="nama_level" value="<?php echo $dar->nama_level?>" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" name="keterangan" value="<?php echo $dar->keterangan?>" required>
              </div>

              <!-- bagian tombol submit -->
              <div class="col-12 d-flex justify-content-end">
                <div class="form-group mb-2">
                  <div class="col-md-0 col-md-offset-0">
                    <a href="javascript:history.back()" class="btn btn-danger me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
              <!-- bagian tombol submit -->

