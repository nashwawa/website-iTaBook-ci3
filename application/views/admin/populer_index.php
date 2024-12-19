<div class="container-fluid py-4">
    <div style="width:95%; margin-left:2rem;">
        <?= $this->session->flashdata('alert',true)?>
    </div>
</div>
 <div class="col-lg-12 col-md-12" >
        <div class="mt-4 mb-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah populer
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <form action="<?= base_url('admin/populer/simpan')?>" method="post"  enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Tambah populer</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3 ">
                        <label class="form-label">Judul</label>
                        <div class="input-group input-group-outline mb-3">
                          <input type="text" class="form-control" placeholder="Masukkan nama" name="judul" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">Kategori</label>
                          <div class="input-group input-group-outline mb-3">
                            <select name="id_kategori" class="form-control">
                              <?php foreach($kategori as $pp) {?>
                                <option value="<?= $pp['id_kategori']?>"><?= $pp['nama_kategori']?></option>
                              <?php } ?>
                            </select>
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
                          <label class="form-label">Detail</label>
                          <!-- <div class="input-group input-group-outline mb-3">
                            <textarea name="detail" class="form-control"></textarea>
                          </div> -->
                          <select name="detail" id="detail">
                            <?php foreach ($detail_buku as $d_buku) { ?>
                                <option value="<?= $d_buku['id_detail']?>"><?= $d_buku['isbn']?></option>
                            <?php } ?>
                          </select>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3 ">
                        <label class="form-label">Karya</label>
                        <div class="input-group input-group-outline mb-3">
                          <input type="text" class="form-control" placeholder="Masukkan nama karya" name="karya" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3 ">
                        <label class="form-label">Nama</label>
                        <div class="input-group input-group-outline mb-3">
                          <input type="text" class="form-control" placeholder="Masukkan nama nama" name="nama" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">Harga</label>
                          <div class="input-group input-group-outline mb-3">
                            <input type="number" class="form-control" placeholder="Masukkan harga" name="harga" required>
                          </div>
                      </div>
                  </div>
                
                  <div class="row">
                      <div class="col mb-3">
                          <label class="form-label">foto</label>
                          <div class="input-group input-group-outline mb-3">
                            <input type="file" name="foto" class="form-control"
                            accept="image/png, image/jpg, image/jpeg,  ">
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
  <h5 class="card-header">Kategori populer</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Keterangan</th>
          <th>Detail</th>
          <th>Karya</th>
          <th>Nama</th>
          <th>Tanggal</th>
          <th>Harga</th>
          <th>Foto</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      <?php if (!empty($populer)): ?>
        

    <?php $no = 1; foreach ($populer as $pp): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $pp['judul']; ?></td>
        <td><?= $pp['nama_kategori']; ?></td>
        <td><?= $pp['keterangan']; ?></td>
        <td><?= $pp['detail']; ?></td>
        <td><?= $pp['karya']; ?></td>
        <td><?= $pp['nama']; ?></td>
        <td><?= $pp['tanggal']; ?></td>
        <td><?= isset($pp['harga']) ? $pp['harga'] : '-'; ?></td>
        <td>
            <a href="<?= base_url('assets/upload/populer/') . $pp['foto']; ?>" target="_blank">
                Lihat Foto
            </a>
        </td>
            <td>
                <!-- Tombol Hapus -->
                <a href="<?= site_url('admin/populer/delete_data/' . $pp['foto']); ?>" class="btn btn-sm btn-danger" 
                    onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                    Hapus
                    <span class="material-icons text-sm me-2t"></span>
                </a>
                
                <!-- Tombol Edit -->
                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" 
                    data-bs-target="#populer<?= $pp['id_populer']; ?>">
                    Edit <span class="tf-icons bx bx-edit"></span>
                </button>

                <!-- Modal Edit -->
                <div class="modal fade" id="populer<?= $pp['id_populer']; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <!-- Form Update -->
                        <form action="<?= base_url('admin/populer/update'); ?>" method="post" enctype="multipart/form-data">
                            <!-- Hidden Input untuk ID -->
                            <input type="hidden" name="id_populer" value="<?= $pp['id_populer']; ?>">
                            <input type="hidden" name="nama_foto" value="<?= $pp['foto']; ?>">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Populer: <?= $pp['judul']; ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <!-- Input Judul -->
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="judul" class="form-label">Judul</label>
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" class="form-control" placeholder="Masukkan nama" value="<?= $pp['judul']; ?>" name="judul" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Select Kategori -->
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="id_kategori" class="form-label">Kategori</label>
                                            <div class="input-group input-group-outline mb-3">
                                                <select name="id_kategori" class="form-control" required>
                                                    <?php if (isset($kategori) && count($kategori) > 0): // Validasi jika kategori tersedia ?>
                                                        <?php foreach ($kategori as $uu): ?>
                                                            <option value="<?= $uu['id_kategori']; ?>" <?= $uu['id_kategori'] == $pp['id_kategori'] ? 'selected' : ''; ?>>
                                                                <?= $uu['nama_kategori']; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <option value="" disabled>Tidak ada kategori tersedia</option>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Input Keterangan -->
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="keterangan" class="form-label">Keterangan</label>
                                            <div class="input-group input-group-outline mb-3">
                                                <textarea name="keterangan" class="form-control" required><?= $pp['keterangan']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Select Detail Buku -->
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Detail</label>
                                            <div class="input-group input-group-outline mb-3">
                                                <select name="detail" id="detail" class="form-control">
                                                    <?php if (isset($detail_buku) && count($detail_buku) > 0): // Validasi jika detail buku tersedia ?>
                                                        <?php foreach ($detail_buku as $d_buku): ?>
                                                            <option value="<?= $d_buku['id_detail']; ?>" <?= $d_buku['id_detail'] == $pp['detail'] ? 'selected' : ''; ?>>
                                                                <?= $d_buku['isbn']; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <option value="" disabled>Tidak ada detail buku tersedia</option>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Input Karya -->
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="karya" class="form-label">Karya</label>
                                            <div class="input-group input-group-outline mb-3">
                                                <input type="text" class="form-control" placeholder="Masukkan nama karya" value="<?= $pp['karya']; ?>" name="karya" required>
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
        <?php $no++; endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="10" class="text-center">Tidak ada data tersedia.</td>
        </tr>
    <?php endif; ?>
</tbody>

    </table>
  </div>
</div>
</div>