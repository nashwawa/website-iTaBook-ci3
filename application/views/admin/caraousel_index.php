<div class="container-fluid py-4">
    <div style="width:95%; margin-left:2rem;">
        <?= $this->session->flashdata('alert',true)?>
    </div>
</div>

<div class="col-xl-12"> 
    <div class="mt-4 mb-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Caraousel
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <form action="<?= base_url('admin/caraousel/simpan')?>" method="post"  enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Tambah Caraousel</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                
                    <div class="col mb-3">
                        <label class="form-label">Judul</label>
                        <div class="input-group input-group-outline mb-3">
                          <input type="text" class="form-control" placeholder="Judul foto" name="judul" required>
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

                    <div class="mb-4">
                        <label for="formFile" class="form-label">Pilih Foto dengan ukuran (1:3)</label>
                        <div class="input-group input-group-outline mb-3">
                          <input class="form-control" type="file" name="foto" accept="image/*" required>
                        </div>
                    </div>
                
           
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>  

<div class="row mt-3">
    <?php if (!empty($caraousel)) { ?>
        <?php foreach ($caraousel as $aa) { ?>
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>" 
                         alt="<?= htmlspecialchars($aa['judul'], ENT_QUOTES, 'UTF-8') ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($aa['judul'], ENT_QUOTES, 'UTF-8') ?></h5>
                        <p class="card-text">
                            <?= htmlspecialchars($aa['keterangan'], ENT_QUOTES, 'UTF-8') ?>
                        </p>
                        <a href="<?= base_url('admin/caraousel/delete_data/' . $aa['foto']) ?>" 
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                           <span class="tf-icons bx bx-trash-alt"></span> Hapus
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <p class="text-center">Tidak ada data caraousel.</p>
    <?php } ?>
</div>
