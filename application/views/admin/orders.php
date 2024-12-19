
    <style>
        .keterangan-col {
            max-width: 350px;
            /* Sesuaikan dengan lebar yang diinginkan */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .keterangan-full {
            white-space: normal;
            max-width: 100%;
            /* Agar dapat diperluas penuh saat 'Baca selengkapnya' diklik */
        }
    </style>
   
       
<!-- End Navbar -->


    <!-- End Navbar -->

    <div class="row">
    <div class="col-lg-12 col-md-12" >
    <div class="mt-4 mb-3">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Detail Orders</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table id="myTable" class="table align-items-center mb-0">
                            <thead>
                                <tr>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                  
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bukti</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Struk</th>

                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">
                                <?php 
                            $no =1;
                            foreach ($orders as $aa) { ?>
                                <tr>

                                    <td class="align-middle text-center"><?= $aa['tanggal'] ?></td>
                                    <td class="align-middle text-center"><?= $aa['email'] ?></td>
                                  
                                    <td class="align-middle text-center">Rp
                                        <?= number_format($aa['total'], 0, ',', '.') ?></td>
                                    <td>

                                        <a
                                            href="<?= base_url('assets/upload/pembayaran/' . $aa['foto']) ?>"
                                            target="_blank"
                                            style="color: blue; text-decoration: underline;">
                                            <div>Bukti Pembayaran</div>
                                        </a>
                                    </td>
                                    <td class="align-middle text-center"><?= $aa['payment'] ?></td>
                                    <td class="align-middle text-center">
                                        <div class="btn btn-<?=$aa['status'] == 'pending' ? 'danger' : 'success'?>">
                                            <?= $aa['status'] ?>
                                        </div>
                                        <button
                                            type="button"
                                            class="btn btn-sm btn-info"
                                            data-bs-toggle="modal"
                                            data-bs-target="#konten<?= $no; ?>"
                                            fdprocessedid="iw7x2p">
                                            <span class="tf-icons bx bx-edit">Konfirm</span>
                                        </button>

                                        <!-- Modal -->
                                        <div
                                            class="modal fade"
                                            id="konten<?= $no; ?>"
                                            tabindex="-1"
                                            style="display: none;"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <form
                                                    action="<?= base_url('admin/orders/update') ?>"
                                                    method="post"
                                                    enctype="multipart/form-data">
                                                    <input type="hidden" name="nama_foto" value="<?=$aa['foto']?>">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle"></h5>
                                                            <button
                                                                type="button"
                                                                class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close"
                                                                fdprocessedid="ax0u6d"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <label class="col-sm-2 col-form-label">Email</label>
                                                                <div class="col sm-10">
                                                                    <input
                                                                        id="nameWithTitle"
                                                                        class="form-control"
                                                                        placeholder="Masukkan Nama"
                                                                        name="email"
                                                                        value="<?=$aa['email']?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-2 col-form-label">Alamat</label>
                                                                <div class="col sm-10">
                                                                    <input
                                                                        id="nameWithTitle"
                                                                        class="form-control"
                                                                        placeholder="Masukkan Nama"
                                                                        name="alamat"
                                                                        value="<?= $aa['alamat'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-2 col-form-label">No Telp</label>
                                                                <div class="col sm-10">
                                                                    <input
                                                                        id="nameWithTitle"
                                                                        class="form-control"
                                                                        placeholder="Masukkan Nama"
                                                                        name="no_telp"
                                                                        value="<?= $aa['no_telp'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-2 col-form-label">Nama Penerima</label>
                                                                <div class="col sm-10">
                                                                    <input
                                                                        id="nameWithTitle"
                                                                        class="form-control"
                                                                        placeholder="Masukkan Nama"
                                                                        name="nama_penerima"
                                                                        value="<?= $aa['nama_penerima'] ?>">
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="row">
                                                                <label class="col-sm-2 col-form-label">Total</label>
                                                                <div class="col sm-10">
                                                                    <input
                                                                        id="nameWithTitle"
                                                                        class="form-control"
                                                                        placeholder="Masukkan Nama"
                                                                        name="total"
                                                                        value="<?= $aa['total'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">

                                                                <div class="row">
                                                                    <label class="col-sm-2 col-form-label">Produk</label>
                                                                    <div class="col sm-10">
                                                                        <input
                                                                            id="nameWithTitle"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Nama"
                                                                            name="produk"
                                                                            value="<?= $aa['produk'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-2 col-form-label">Payment</label>
                                                                    <div class="col sm-10">
                                                                        <input
                                                                            id="nameWithTitle"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Nama"
                                                                            name="payment"
                                                                            value="<?= $aa['payment'] ?>">
                                                                    </div>
                                                                </div>

                                                                <div value="<?= base_url('assets/upload/pembayaran/' . $aa['foto']) ?>"></div>
                                                                <input type="hidden" name="status" value="Complete">

                                                                <input type="hidden" name="id_order" value="<?= $aa['id_order'] ?>">

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-outline-secondary"
                                                                    data-bs-dismiss="modal"
                                                                    fdprocessedid="3t093q">Close</button>
                                                                <button type="submit" class="btn btn-success" fdprocessedid="7zqvqu">KONFIRMASI</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </div>
                                        <td class="align-middle text-center">
                                            <div class="btn btn-warning">
                                                <a href="<?= base_url('beranda/print'); ?>" target="_blank">Struk</a>
                                            </div>
                                        </td>

                                    </tr>
                                    <?php
                                        $no++;
                                    } ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>

