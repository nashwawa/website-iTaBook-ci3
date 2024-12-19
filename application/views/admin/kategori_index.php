<div class="container-fluid py-4">
    <div style="width:95%; margin-left:2rem;">
        <?= $this->session->flashdata('alert',true)?>
    </div>
</div>
 <div class="col-lg-12 col-md-12" >
        <div class="mt-4 mb-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Kategori
          </button>

         <!-- Modal Tambah Kategori -->
         <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-mb" role="document">
                <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mt-3">
                                    <label class="form-label">Nama Kategori</label>
                                    <div class="input-group input-group-outline mb-3">
                                      <input type="text" class="form-control" placeholder="Masukkan nama" name="nama_kategori" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

       

<div class="card">
  <h5 class="card-header">Kategori Konten</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php $no=1; foreach($kategori as $aa) {?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $aa['nama_kategori']?></td>
          <td>
            <a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']); ?>" class="btn btn-sm btn-danger" onClick="return confire('Apakah anda yakin ingin menghapus data ini?')">Hapus<span class="tf-icons bx bx-trash-alt"></span></a >
            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_kategori']?>">Edit
              <span class="tf-icons bx bx-edit"></span>
            </button>

            <div class="modal fade" id="edit<?= $aa['id_kategori']?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-mb" role="document">
            <form action="<?= base_url('admin/kategori/update')?>" method="post">
              <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori']?>">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Perbarui Kategori</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label class="form-label">Nama Kategori Konten</label>
                      <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" value="<?= $aa['nama_kategori']?>" name="nama_kategori" >
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
</div>