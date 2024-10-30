<title>Karyawan</title>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="card-header">
        <a href="<?=base_url('karyawan/create')?>"><button class="btn btn-primary">+ Tambah</button></a>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No. Telpon</th>
              <th>Jenis Kelamin</th>
              <th>Tempat & Tanggal Lahir</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php
            $no=1;
            foreach ($jojo as $data) {
              ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?php echo $data->nik?></td>
                <td><?php echo $data->nama?></td>
                <td><?php echo $data->alamat?></td>
                <td><?php echo $data->no_telepon?></td>
                <td><?php 
                if ($data->jenis_kelamin == '1') {
                  echo "Laki-laki";
                }else{
                  echo "Perempuan";
                }
              ?></td>
              <td><?php echo $data->tempat_lahir . ', ' . date('d F Y', strtotime($data->tanggal_lahir)) ?></td>
              <td>
                <a href="<?=base_url('karyawan/edit/'. $data->id_karyawan)?>"><button class="btn rounded-pill btn-warning my-1">Edit</button></a>
                <a href="<?=base_url('karyawan/hapus/'. $data->user)?>"><button class="btn rounded-pill btn-danger my-1">Hapus</button></a>
              </div>
            </div>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>
</div>