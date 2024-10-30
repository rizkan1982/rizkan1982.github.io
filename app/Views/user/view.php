<title>User</title>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="card-header"></div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Foto</th>
              <th>Username</th>
              <th>Email</th>
              <th>Level</th>
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
                <td style="width: 100px; height: 100px; overflow: hidden; border-radius: 5px;">
                  <img src="<?php echo base_url('images/' . $data->foto) ?>" style="width: 100%; height: 100%; object-fit: contain;" alt="Foto">
                </td>
                <td><?php echo $data->username?></td>
                <td><?php echo $data->email?></td>
                <td><?php echo $data->nama_level?></td>
                <td>
                  <a href="<?=base_url('user/reset_password/'. $data->id_user)?>"><button class="btn rounded-pill btn-danger my-1">Reset Password</button></a>
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