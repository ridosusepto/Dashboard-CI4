<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Edit Class</h4>

        <!-- Basic Layout -->
        <div class="row">

            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Data Class</h5>
                        <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        <form action="/kategorikelas/update_kelas/<?= $kelas['kelas_id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label" for="kelas_name">Kelas</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class='bx bx-book'></i></span>
                                    <input type="text" <?= ($validation->hasError('kelas_name')) ? 'class="is-invalid"' : ''; ?> id="kelas_name" name="kelas_name" autofocus value="<?= $kelas['kelas_name']; ?>" class="form-control" aria-label="ACME Inc." aria-describedby="kelas_name" />
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kelas_name'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="kelas_kategori">Kategori</label>
                                <select id="kelas_kategori" name="kelas_kategori" class="form-select" aria-label="Course">
                                    <?php foreach ($category as $kategori) : ?>
                                        <option value="<?= $kategori['kelas_kategori']; ?>" <?= ($kategori['kelas_kategori'] == $kelas['kelas_kategori']) ? 'selected' : ''; ?>><?= $kategori['kelas_kategori']; ?></option>
                                    <?php endforeach; ?>
                                </select>
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