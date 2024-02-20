<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Tambah Course</h4>

        <!-- Basic Layout -->
        <div class="row">

            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Data Course</h5>
                        <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        <form action="/course/update/<?= $course['course_id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label" for="course_nama">Course</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class='bx bx-book' ></i></span>
                                    <input type="text" <?= ($validation->hasError('course_nama')) ? 'class="is-invalid"' : ''; ?> id="course_nama" name="course_nama" autofocus value="<?= $course['course_nama']; ?>" class="form-control"  aria-label="ACME Inc." aria-describedby="course_nama" />
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('course_nama'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="course_kuota">Kuota</label>
                                <div class="input-group input-group-merge">
                                    <span id="course_kuota" class="input-group-text"><i class='bx bx-group'></i></span>
                                    <input type="text" class="form-control" id="course_kuota" name="course_kuota" value="<?= $course['course_kuota']; ?>" aria-label="123" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="course_mentor">Mentor</label>
                                <div class="input-group input-group-merge">
                                    <span id="course_mentor" class="input-group-text"><i class='bx bx-user-voice' ></i></span>
                                    <input type="text" id="course_mentor" name="course_mentor" class="form-control phone-mask" value="<?= $course['course_mentor']; ?>" aria-label="658 799 8941" aria-describedby="course_mentor" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="course_desk">Desripsi</label>
                                <input id="course_desk" name="course_desk" value="<?= $course['course_desk']; ?>" class="form-control" rows="5" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="course_harga">Harga</label>
                                <div class="input-group input-group-merge">
                                    <span id="course_harga" class="input-group-text"><i class='bx bx-dollar-circle' ></i></span>
                                    <input type="text" id="course_harga" name="course_harga" class="form-control phone-mask" value="<?= $course['course_harga']; ?>" aria-label="658 799 8941" aria-describedby="course_harga" />
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" onclick="window.location.href='/course'" class="btn btn-outline-secondary">Kembali</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->