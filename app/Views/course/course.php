<!-- Contextual Classes -->

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Course</span></h4>
        <?php if (session()->getFlashdata('alert')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('alert'); ?>
            </div>
        <?php endif; ?>
        <!-- Basic Bootstrap Table -->
        <div class="card pb-5">

            <div class="card">
                <h5 class="card-header">Table Course
                    <a href="/course/tambah" class=" btn btn btn-primary float-end">
                        <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Data
                    </a>
                </h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Course</th>
                                <th>Mentor</th>
                                <th>Harga</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php $i = 1; ?>
                            <?php foreach ($course as $crs) : ?>
                                <?php
                                $bg_class = ($i % 2 == 0) ? 'table-active' : 'table-default';
                                ?>
                                <tr class="<?= $bg_class; ?>">
                                    <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong><?= $i++; ?></strong></td>
                                    <td><?= $crs['course_nama']; ?></td>
                                    <td><?= $crs['course_mentor']; ?></td>
                                    <td><span class="badge bg-label-primary me-1"><?= $crs['course_harga']; ?></span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/course/detail/<?= $crs['course_id']; ?>"><i class="bx bx-detail me-2"></i> Detail</a>
                                                <a class="dropdown-item" href="/course/edit/<?= $crs['course_id']; ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                                <form action="/course/<?= $crs['course_id']; ?>" method="post">
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