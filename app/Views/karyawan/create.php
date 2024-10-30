<title>Tambah Karyawan</title>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Tambah <?=$title?></h4>

    <div class="row">
      <div class="card mb-4">
        <div class="row">
          <div class="col-md-6">
            <div class="card-body">
              <form action="<?= base_url('karyawan/aksi_create/')?>" method="post">

                <div class="mb-3">
                  <label for="email" class="form-label">Foto</label>
                  <input type="file" class="form-control" id="foto" placeholder="Masukkan Foto" name="foto" accept="image/*">
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">NIK</label>
                  <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" name="nik" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card-body">
                <div class="mb-3">
                  <label for="email" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">No. Telepon</label>
                  <input type="text" class="form-control" id="notel" placeholder="Masukkan No. Telepon" name="notel" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" id="jk" name="jk" required>
                    <option value="">- Pilih -</option>
                    <option value="1">Laki - laki</option>
                    <option value="2">Perempuan</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
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
            <!-- bagian tombol submit -->

