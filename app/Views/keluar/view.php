<title>Obat Keluar</title>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="card-header">
        <a href="<?=base_url('barang_keluar/tambah_barang')?>"><button class="btn btn-primary">+ Tambah</button></a>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Obat</th>
              <th>Jumlah</th>
              <th>Tanggal Keluar</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php
            $no=1;
            foreach ($a as $data) {
              ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?php echo $data->nama_brg?></td>
                <td><?php echo $data->jumlah?></td>
                <td><?php echo $data->tanggall?></td>
              <td>
                <a href="<?=base_url('barang_keluar/hapus/'. $data->id_brg_klr)?>"><button class="btn rounded-pill btn-danger my-1">Hapus</button></a>
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