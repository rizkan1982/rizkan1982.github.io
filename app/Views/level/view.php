<title>Level</title>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="card-header">
        <a href="<?=base_url('level/create')?>"><button class="btn btn-primary">+ Tambah</button></a>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Level</th>
              <th>Keterangan</th>
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
                <td><?php echo $data->nama_level?></td>
                <td><?php echo $data->keterangan?></td>
              <td>
                <a href="<?=base_url('level/edit/'. $data->id_level)?>"><button class="btn rounded-pill btn-warning my-1">Edit</button></a>
                <a href="<?=base_url('level/hapus/'. $data->id_level)?>"><button class="btn rounded-pill btn-danger my-1">Hapus</button></a>

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