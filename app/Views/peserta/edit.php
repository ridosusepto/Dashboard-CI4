<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Edit Peserta</h4>

        <!-- Basic Layout -->
        <div class="row">

            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Data Peserta</h5>
                        <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        <form action="/peserta/update/<?= $peserta['peserta_id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_nip">NIP</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class='bx bx-id-card'></i></span>
                                    <input type="text" class="form-control <?= ($validation->hasError('peserta_nip')) ? 'is-invalid' : ''; ?>" id="peserta_nip" name="peserta_nip" autofocus value="<?= old('peserta_nip', $peserta['peserta_nip']); ?>" required />
                                </div>
                                <div class="invalid-feedback">
                                       Tidak boleh kosong
                                 </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="peserta_nama">Nama</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_nama" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="peserta_nama" name="peserta_nama" value="<?= $peserta['peserta_nama']; ?>"  required />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_email">Email</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="email" id="peserta_email" name="peserta_email" class="form-control" value="<?= $peserta['peserta_email']; ?>"  required />
                                    <span id="peserta_email" class="input-group-text">@gmail.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_ttl">Tempat, tanggal lahir</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_ttl" class="input-group-text"><i class='bx bxs-calendar-alt'></i></span>
                                    <input type="text" id="peserta_ttl" name="peserta_ttl" class="form-control phone-mask" value="<?= $peserta['peserta_ttl']; ?>"  required />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_telp">No Telpon</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_telp" class="input-group-text"><i class='bx bx-phone'></i></span>
                                    <input type="text" id="peserta_telp" name="peserta_telp" class="form-control phone-mask" value="<?= $peserta['peserta_telp']; ?>"  required />
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label" for="peserta_agama">Pilih Agama</label>
                                    <select class="form-select" id="peserta_agama" name="peserta_agama">
                                        <option value="<?= $peserta['peserta_agama']; ?>" selected disabled><?= $peserta['peserta_agama']; ?></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Katolik">Katolik</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="peserta_gender">Pilih Gender</label>
                                        <select class="form-select" id="peserta_gender" name="peserta_gender">
                                            <option value="<?= $peserta['peserta_gender']; ?>" selected disabled><?= $peserta['peserta_gender']; ?></option>
                                            <option value="Pria">Pria</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <label class="form-label" for="peserta_alamat">Alamat</label>
                                    <div class="input-group input-group-merge">
                                        <span id="peserta_alamat" class="input-group-text"><i class='bx bx-map'></i></span>
                                        <input type="text" id="peserta_alamat" name="peserta_alamat" class="form-control" value="<?= $peserta['peserta_alamat']; ?>"  required />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="peserta_kota">Kota</label>
                                    <div class="input-group input-group-merge">
                                        <span id="peserta_kota" class="input-group-text"><i class='bx bx-map-alt'></i></span>
                                        <input type="text" id="peserta_kota" name="peserta_kota" class="form-control" value="<?= $peserta['peserta_kota']; ?>"  required />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="peserta_kodepos">Kode Pos</label>
                                    <div class="input-group input-group-merge">
                                        <span id="peserta_kodepos" class="input-group-text"><i class='bx bxl-codepen'></i></span>
                                        <input type="text" id="peserta_kodepos" name="peserta_kodepos" class="form-control" value="<?= $peserta['peserta_kodepos']; ?>"  required />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="peserta_portofolio">Portofolio</label>
                                    <div class="input-group input-group-merge">
                                        <span id="peserta_portofolio" class="input-group-text"><i class='bx bx-list-minus'></i></span>
                                        <input type="text" id="peserta_portofolio" name="peserta_portofolio" class="form-control" value="<?= $peserta['peserta_portofolio']; ?>"  required />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="peserta_payment">Payment</label>
                                    <div class="input-group input-group-merge">
                                        <span id="peserta_payment" class="input-group-text"><i class='bx bx-credit-card'></i></span>
                                        <input type="text" id="peserta_payment" name="peserta_payment" class="form-control" <?= $peserta['peserta_agama']; ?> value="<?= $peserta['peserta_payment']; ?>"  required />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="status_nama">Status</label>
                                    <div class="input-group input-group-merge">
                                        <span id="status_nama" class="input-group-text"><i class='bx bxs-layer'></i></span>
                                        <input type="text" id="status_nama" name="status_nama" class="form-control" value="<?= $peserta['status_nama']; ?>"  required />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="course_nama">Course</label>
                                    <div class="input-group input-group-merge">
                                        <span id="course_nama" class="input-group-text"><i class='bx bxs-graduation'></i></span>
                                        <input type="text" id="course_nama" name="course_nama" class="form-control" value="<?= $peserta['course_nama']; ?>"  required />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kelaskategori">Kelas & Kategori</label>
                                    <div class="input-group input-group-merge">
                                        <span id="kelaskategori" class="input-group-text"><i class='bx bx-book-alt'></i></span>
                                        <input type="text" id="kelaskategori" name="kelaskategori" class="form-control" value="<?= $peserta['kelaskategori']; ?>"  required />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Edit data</button>
                                <button type="button" onclick="window.location.href='/peserta'" class="btn btn-outline-secondary">Kembali</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->