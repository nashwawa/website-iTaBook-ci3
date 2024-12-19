<div class="container-fluid py-4">
    <div style="width:95%; margin-left:2rem;">
        <?= $this->session->flashdata('alert',true)?>
    </div>
</div>
 <div class="col-lg-12 col-md-12" >
        <div class="mt-4 mb-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Berita
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <form action="<?= base_url('admin/berita/simpan')?>" method="post"  enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Tambah Berita</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3 ">
                        <label class="form-label">Judul</label>
                        <div class="input-group input-group-outline mb-3">
                          <input type="text" class="form-control" placeholder="Masukkan judul" name="judul" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">Keterangan</label>
                          <div class="input-group input-group-outline mb-3">
                            <textarea name="keterangan" class="form-control"></textarea>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">Tengah</label>
                          <div class="input-group input-group-outline mb-3">
                            <textarea name="tengah" class="form-control"></textarea>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">Akhir</label>
                          <div class="input-group input-group-outline mb-3">
                            <textarea name="akhir" class="form-control"></textarea>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">foto</label>
                          <div class="input-group input-group-outline mb-3">
                            <input type="file" name="foto" class="form-control"
                            accept="image/png, image/jpeg, image/jpg">
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
  <h5 class="card-header">Kategori Berita</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Keterangan</th>
          <th>Tengah</th>
          <th>Akhir</th>
          <th>Tanggal</th>
          <th>Foto</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php $no=1; foreach($berita as $aa) {?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $aa['judul']?></td>
          <td><?= $aa['keterangan']?></td>
          <td><?= $aa['tengah']?></td>
          <td><?= $aa['akhir']?></td>
          <td><?= $aa['tanggal']?></td>
          <td>
            <a href="<?= base_url('assets/upload/berita/') . $aa['foto'] ?>" target="_blank">
              <span class="tf-icons bx bx-search"></span> Lihat Foto
            </a>
          </td>
          <td>
            <a href="<?php echo site_url('admin/berita/delete_data/'.$aa['foto']); ?>" class="btn btn-sm btn-danger" 
              onClick="return confire('Apakah anda yakin ingin menghapus data ini?')"> Hapus
              <span class="material-icons text-sm me-2t"></span></a>
            
            <!-- Tombol Edit -->
            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" 
              data-bs-target="#berita<?= $aa['id_berita']; ?>">Edit
              <span class="tf-icons bx bx-edit"></span>
            </button>

            <!-- Modal Edit -->
            <div class="modal fade" id="berita<?= $aa['id_berita']; ?>" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <!-- Form Update -->
                <form action="<?= base_url('admin/berita/update') ?>" method="post" enctype="multipart/form-data">
                  <!-- Hidden Input untuk ID -->
                  <input type="hidden" name="id_berita" value="<?= $aa['id_berita'] ?>">
                  <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">

                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalCenterTitle">Edit berita: <?= $aa['judul'] ?></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                      <!-- Input Judul -->
                      <div class="row">
                        <div class="col mb-3">
                          <label for="judul" class="form-label">Judul</label>
                          <div class="input-group input-group-outline mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan nama" value="<?= $aa['judul'] ?>" name="judul" required />
                          </div>
                        </div>
                      </div>

                      <!-- Input Keterangan -->
                      <div class="row">
                        <div class="col mb-3">
                          <label for="keterangan" class="form-label">Keterangan</label>
                          <div class="input-group input-group-outline mb-3">
                            <textarea name="keterangan" class="form-control" required><?= $aa['keterangan'] ?></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col mb-3">
                          <label for="tengah" class="form-label">tengah</label>
                          <div class="input-group input-group-outline mb-3">
                            <textarea name="tengah" class="form-control" required><?= $aa['tengah'] ?></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col mb-3">
                          <label for="akhir" class="form-label">akhir</label>
                          <div class="input-group input-group-outline mb-3">
                            <textarea name="akhir" class="form-control" required><?= $aa['akhir'] ?></textarea>
                          </div>
                        </div>
                      </div>

                      <!-- Input Foto -->
                      <div class="row">
                        <div class="col mb-3">
                          <label for="foto" class="form-label">Foto</label>
                          <div class="input-group input-group-outline mb-3">
                            <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
                            <br>
                            <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengganti foto.</small>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
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