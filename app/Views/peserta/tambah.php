<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Tambah Peserta</h4>

        <!-- Basic Layout -->
        <div class="row">

            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Data Peserta</h5>
                        <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        <form action="/peserta/save" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_nip">NIP</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_nip" class="input-group-text"><i class='bx bx-id-card'></i></span>
                                    <input type="text" id="peserta_nip" name="peserta_nip" class="form-control" placeholder="NIP" aria-label="ACME Inc." aria-describedby="peserta_nip" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_nama">Nama</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_nama" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="peserta_nama" name="peserta_nama" placeholder="Nama" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_email">Email</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="text" id="peserta_email" name="peserta_email" class="form-control" placeholder="your email" aria-label="john.doe" aria-describedby="peserta_email" />
                                    <span id="peserta_email" class="input-group-text">@gmail.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_ttl">Tempat, tanggal lahir</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_ttl" class="input-group-text"><i class='bx bxs-calendar-alt'></i></span>
                                    <input type="text" id="peserta_ttl" name="peserta_ttl" class="form-control phone-mask" placeholder="Kota, 26 Maret 2000" aria-label="658 799 8941" aria-describedby="peserta_ttl" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_telp">No Telpon</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_telp" class="input-group-text"><i class='bx bx-phone'></i></span>
                                    <input type="text" id="peserta_telp" name="peserta_telp" class="form-control phone-mask" placeholder="081234567890" aria-label="658 799 8941" aria-describedby="peserta_telp" />
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label" for="peserta_agama">Pilih Agama</label>
                                    <select class="form-select" id="peserta_agama" name="peserta_agama">
                                        <option value="" selected disabled>Pilih Agama</option>
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
                                        <option value="" selected disabled>Pilih Agama</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <label class="form-label" for="peserta_alamat">Alamat</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_alamat" class="input-group-text"><i class='bx bx-map'></i></span>
                                    <input type="text" id="peserta_alamat" name="peserta_alamat" class="form-control" placeholder="Jl. Gatot Subroto" aria-label="Jl. Gatot Subroto" aria-describedby="peserta_alamat" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_kota">Kota</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_kota" class="input-group-text"><i class='bx bx-map-alt'></i></span>
                                    <input type="text" id="peserta_kota" name="peserta_kota" class="form-control" placeholder="Bandung" aria-label="Kota" aria-describedby="peserta_kota" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_kodepos">Kode Pos</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_kodepos" class="input-group-text"><i class='bx bxl-codepen'></i></span>
                                    <input type="text" id="peserta_kodepos" name="peserta_kodepos" class="form-control" placeholder="42661" aria-label="Kota" aria-describedby="peserta_kodepos" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_portofolio">Portofolio</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_portofolio" class="input-group-text"><i class='bx bx-list-minus'></i></span>
                                    <textarea id="peserta_portofolio" name="peserta_portofolio" class="form-control" placeholder="" aria-label="portofolio kamu" aria-describedby="peserta_portofolio"></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="peserta_payment">Payment</label>
                                <div class="input-group input-group-merge">
                                    <span id="peserta_payment" class="input-group-text"><i class='bx bx-credit-card'></i></span>
                                    <input type="text" id="peserta_payment" name="peserta_payment" class="form-control" placeholder="payment" aria-label="Kota" aria-describedby="peserta_payment" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="status_nama">Status</label>
                                <div class="input-group input-group-merge">
                                    <span id="status_nama" class="input-group-text"><i class='bx bxs-layer'></i></span>
                                    <input type="text" id="status_nama" name="status_nama" class="form-control" placeholder="status" aria-label="Kota" aria-describedby="status_nama" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="course_nama">Course</label>
                                <div class="input-group input-group-merge">
                                    <span id="course_nama" class="input-group-text"><i class='bx bxs-graduation'></i></span>
                                    <input type="text" id="course_nama" name="course_nama" class="form-control" placeholder="course" aria-label="Kota" aria-describedby="course_nama" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="kelaskategori">Kelas & Kategori</label>
                                <div class="input-group input-group-merge">
                                    <span id="kelaskategori" class="input-group-text"><i class='bx bx-book-alt'></i></span>
                                    <input type="text" id="kelaskategori" name="kelaskategori" class="form-control" placeholder="kelas & kategori" aria-label="Kota" aria-describedby="kelaskategori" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->