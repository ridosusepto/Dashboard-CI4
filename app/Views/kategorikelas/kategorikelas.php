<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Category | Class</h4>
        <?php if (session()->getFlashdata('alert')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('alert'); ?>
            </div>
        <?php endif; ?>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Table Category
                <a href="/kategorikelas/tambah_kategori" class=" btn btn btn-primary float-end">
                    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Data
                </a>
            </h5>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ketegori</th>
                            <th>Keterangan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1; ?>
                        <?php foreach ($kategori as $ki) : ?>
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $i++; ?></strong></td>
                                <td><?= $ki['kelas_kategori']; ?></td>
                                <td style="word-wrap: break-word;"><?= $ki['kelas_ket']; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/kategorikelas/edit_kategori/<?= $ki['kategori_id']; ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                            <form action="/kategorikelas/<?= $ki['kategori_id']; ?>" method="post">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button type="submit" class="dropdown-item" onclick="return confirm('Apakah anda yakin?');"><i class="bx bx-trash me-2"></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->

        <hr class="my-5" />

        <!-- Bootstrap Dark Table -->
        <div class="card">
            <h5 class="card-header">Table Class
                <a href="/kategorikelas/tambah_kelas" class=" btn btn btn-primary float-end">
                    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Data
                </a>
            </h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Kategori</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1; ?>
                        <?php foreach ($kelas as $ks) : ?>
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $i++; ?></strong></td>
                                <td><?= $ks['kelas_name']; ?></td>
                                <td><?= $ks['kelas_kategori']; ?></td>
                                <td><span class="badge bg-label-warning me-1"><?= $ks['created_at']; ?></span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/kategorikelas/edit_kelas/<?= $ks['kelas_id']; ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                            <form action="/kelasdelete/<?= $ks['kelas_id']; ?>" method="post">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button type="submit" class="dropdown-item" onclick="return confirm('Apakah anda yakin?');"><i class="bx bx-trash me-2"></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>