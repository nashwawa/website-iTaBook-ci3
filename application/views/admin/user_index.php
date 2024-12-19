
<div class="container-fluid py-4" id="ngilang">
    <div style="width:95%; margin-left:2rem;">
        <?= $this->session->flashdata('alert',true)?>
    </div>
</div>
       <div class="col-lg-12 col-md-12" >
        <div class="mt-4 mb-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah User
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-mb" role="document">
            <form action="<?= base_url('admin/user/simpan')?>" method="post" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Tambah User</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                  <div class="col mb-3 ">
                      <label class="form-label">Username</label>
                      <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" placeholder="Masukkan username" name="username" required>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3 ">
                      <label class="form-label">Nama</label>
                      <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" placeholder="Masukkan nama" name="nama" required>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3 ">
                      <label class="form-label">Password</label>
                      <div class="input-group input-group-outline mb-3">
                        <input type="password" class="form-control" placeholder="Masukkan password" name="password" required>
                      </div>
                  </div>
                </div>
              
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="card">
  <h5 class="card-header">Data Pengguna</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Nama</th>
         
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php $no=1; foreach($user as $aa) {?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $aa['username']?></td>
          <td><?= $aa['nama']?></td>
         
          <td>
           
            <!-- <a href="<?php echo site_url('admin/user/edit'.$aa['id_user']); ?>" class="btn btn-sm btn-danger"><span class="tf-icons bx bx-trash"></span></a>
            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalCenter">
               <span class="tf-icons bx bx-edit"></span>
            </button> -->
            <a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']); ?>" class="btn btn-sm btn-danger" onClick="return confire('Apakah anda yakin ingin menghapus data ini?')">Hapus<span class="tf-icons bx bx-trash-alt"></span></a >
            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_user']?>">
               <span class="tf-icons bx bx-edit">Edit</span>
            </button>

            <div class="modal fade" id="edit<?= $aa['id_user']?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-mb" role="document">
            <form action="<?= base_url('admin/user/update')?>" method="post">
              <input type="hidden" name="id_user" value="<?= $aa['id_user']?>">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Tambah User</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label class="form-label">Username</label>
                      <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" value="<?= $aa['username']?>" name="username" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label class="form-label">Nama</label>
                      <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" value="<?= $aa['nama']?>" name="nama" >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          </td>
        </tr>
        <?php $no++; } ?>
      </tbody>
    </table>
  </div>
</div>
