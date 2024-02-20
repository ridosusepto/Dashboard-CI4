<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Course /</span> Detail</h4>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">Detail Course</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">Course</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName" value="<?= $course['course_nama']; ?>" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">Kuota</label>
                                    <input class="form-control" type="text" name="lastName" id="lastName" value="<?= $course['course_kuota']; ?>" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">Nama Mentor</label>
                                    <input type="text" class="form-control" id="organization" name="organization" value="<?= $course['course_mentor']; ?>" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="address" name="address" value="<?= $course['course_harga']; ?>" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="deskripsi">Deskripsi</label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control" readonly rows="5"><?= $course['course_desk']; ?></textarea>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="button" onclick="window.location.href='/course/edit/<?= $course['course_id']; ?>' " class="btn btn-primary me-2">Edit course</button>
                                <button type="button" onclick="window.location.href='/course'" class="btn btn-outline-secondary">Kembali</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
                <div class="card">
                    <h5 class="card-header">Delete Data <?= $course['course_nama']; ?></h5>
                    <div class="card-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your data <?= $course['course_nama']; ?>?</h6>
                                <p class="mb-0">Once you delete your data <?= $course['course_nama']; ?>, there is no going back. Please be certain.</p>
                            </div>
                        </div>
                        <form action="/course/<?= $course['course_id']; ?>" method="post">
                            <div class="form-check mb-3">
                                <input type="hidden" name="_method" value="DELETE" />
                            </div>
                            <button type="submit" class="btn btn-danger deactivate-account" onclick="return confirm('Apakah anda yakin?');">Delete Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
</div>