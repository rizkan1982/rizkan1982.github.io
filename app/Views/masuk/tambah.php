<title>Tambah Obat Masuk</title>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Tambah <?=$title?></h4>

    <div class="row">
      <div class="card mb-4">
        <div class="row">
          <div class="col-md-6">
            <div class="card-body">
              <form action="<?= base_url('barang_masuk/aksi_tambah/')?>" method="post">

                <div class="mb-3">
                  <label for="email" class="form-label">Nama Obat</label>
                  <select class="form-control" id="nama" placehoder="Masukkan Nama Obat" name="id_barang" required >
                <option value="<?php echo $a->barang?>">-PILIH-</option>
                <?php

                foreach ($a as $c) {
                  ?>
                  <option value ="<?= $c->id_barang?>"><?php echo $c->nama_brg?> 

                </option>
              <?php } ?>
            </select>
            </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Jumlah</label>
                  <input type="text" class="form-control" id="jumlah" placeholder="Masukkan Jumlah" name="jumlah" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Tanggal Masuk</label>
                  <input type="datetime-local" class="form-control" id="tanggall" placeholder="Masukkan Tanggal Keluar" name="tanggall" required>
              </div>
                </div>
                </div>


            <!-- bagian tombol submit -->
            <div class="col-12 d-flex justify-content-end">
              <div class="form-group mb-5">
                <div class="col-md-0 col-md-offset-0">
                  <a href="javascript:history.back()" class="btn btn-danger me-2">Cancel</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </div>