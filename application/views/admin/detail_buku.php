<div class="container-fluid py-4">
    <div style="width:95%; margin-left:2rem;">
        <?= $this->session->flashdata('alert',true)?>
    </div>
</div>
 <div class="col-lg-12 col-md-12" >
        <div class="mt-4 mb-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Detail Buku
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <form action="<?= base_url('admin/detail_buku/simpan')?>" method="post"  enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Tambah Detail Buku</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3 ">
                        <label class="form-label">Penerbit</label>
                        <div class="input-group input-group-outline mb-3">
                          <input type="text" class="form-control" placeholder="Masukkan penerbit" name="penerbit" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3 ">
                        <label class="form-label">ISBN</label>
                        <div class="input-group input-group-outline mb-3">
                          <input type="number" class="form-control" placeholder="Masukkan ISBN" name="isbn" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3 ">
                        <label class="form-label">bahasa</label>
                        <div class="input-group input-group-outline mb-3">
                          <input type="text" class="form-control" placeholder="Masukkan Bahasa" name="bahasa" required>
                        </div>
                    </div>
                  </div>
                 
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">Lebar</label>
                          <div class="input-group input-group-outline mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan Lebar" name="lebar" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">Tanggal Terbit</label>
                          <div class="input-group input-group-outline mb-3">
                            <input type="date" class="form-control" placeholder="Masukkan Tanggal Terbit" name="tanggal" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">Halaman</label>
                          <div class="input-group input-group-outline mb-3">
                            <input type="number" class="form-control" placeholder="Masukkan Halaman" name="halaman" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">Panjang</label>
                          <div class="input-group input-group-outline mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan Panjang" name="panjang" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">Berat</label>
                          <div class="input-group input-group-outline mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan Berat" name="berat" required>
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
  </div>
      

<div class="card">
  <h5 class="card-header">Kategori Detail Buku</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Penerbit</th>
          <th>ISBN</th>
          <th>Bahasa</th>
          <th>Lebar</th>
          <th>Tanggal</th>
          <th>Halaman</th>
          <th>Panjang</th>
          <th>Berat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php $no=1; foreach($detail_buku as $aa) {?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $aa['penerbit']?></td>
          <td><?= $aa['isbn']?></td>
          <td><?= $aa['bahasa']?></td>
          <td><?= $aa['lebar']?></td>
          <td><?= $aa['tanggal']?></td>
          <td><?= $aa['halaman']?></td>
          <td><?= $aa['panjang']?></td>
          <td><?= $aa['berat']?></td>
          <td>
          
            <a href="<?php echo site_url('admin/detail_buku/delete_data/')?>" class="btn btn-sm btn-danger" 
              onClick="return confire('Apakah anda yakin ingin menghapus data ini?')"> Hapus
              <span class="material-icons text-sm me-2t"></span></a>
            <!-- Modal Edit -->
            <div class="modal fade" id="konten<?= $aa['id_detail']; ?>" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                
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