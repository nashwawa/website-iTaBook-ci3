<div class="container-fluid py-4">
    <div style="width:95%; margin-left:2rem;">
        <?= $this->session->flashdata('alert',true)?>
    </div>
</div>
<div class="col-lg-12 col-md-12">
    <div class="mt-4 mb-3">
        <!-- Button trigger modal -->
        <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#modalCenter">
            Tambah Konfigurasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-mb" role="document">
                <form
                    action="<?= base_url('admin/konfigurasi/update')?>"
                    method="post"
                    enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Konfigurasi</h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Judul Website</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="judul_website"
                                            value="<?= $konfig->judul_website; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Profile</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?>"</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Instagram</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="instagram"
                                            value="<?= $konfig->instagram; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Facebook</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="facebook"
                                            value="<?= $konfig->facebook; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Email</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            value="<?= $konfig->email; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Alamat</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="alamat"
                                            value="<?= $konfig->alamat; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Whattsapp</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="no_wa"
                                            value="<?= $konfig->no_wa; ?>">
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
</div>