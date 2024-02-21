<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Tambah Category</h4>

        <!-- Basic Layout -->
        <div class="row">

            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Data Category</h5>
                        <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        <form action="/kategorikelas/save_kategori" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label" for="kelas_kategori">Kategori</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class='bx bx-book' ></i></span>
                                    <input type="text" <?= ($validation->hasError('kelas_kategori')) ? 'class="is-invalid"' : ''; ?> id="kelas_kategori" name="kelas_kategori" autofocus value="<?= old('kelas_kategori'); ?>" class="form-control" placeholder="Teksik Informatika" aria-label="ACME Inc." aria-describedby="kelas_kategori" />
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kelas_kategori'); ?>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="kelas_ket">Keterangan</label>
                                <textarea id="kelas_ket" name="kelas_ket" class="form-control" placeholder="Bahasa pemograman yang..." rows="3"></textarea>
                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" onclick="window.location.href='/kategorikelas'" class="btn btn-outline-secondary">Kembali</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->