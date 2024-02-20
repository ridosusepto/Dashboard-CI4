<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Peserta</span></h4>
    <?php if (session()->getFlashdata('alert')) : ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('alert'); ?>
      </div>
    <?php endif; ?>
    <!-- Basic Bootstrap Table -->
    <div class="card pb-5">
      <h5 class="card-header">Table Peserta
        <a href="/peserta/tambah" class=" btn btn btn-primary float-end">
          <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Data
        </a>
      </h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nip</th>
              <th>Nama</th>
              <th>Gender</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php $i = 1; ?>
            <?php foreach ($peserta as $pst) : ?>
              <tr>
                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong><?= $i++; ?></strong></td>
                <td><?= $pst['peserta_nip']; ?></td>
                <td><?= $pst['peserta_nama']; ?></td>
                <!-- <td><?= $pst['peserta_gender']; ?></td> -->
                <td>
                  <?php if ($pst['peserta_gender'] == 'male') : ?>
                    <span class="badge bg-primary me-1"><?= $pst['peserta_gender']; ?></span>
                  <?php elseif ($pst['peserta_gender'] == 'female') : ?>
                    <span class="badge bg-label-success me-1"><?= $pst['peserta_gender']; ?></span>
                  <?php else : ?>
                    <span class="badge bg-secondary me-1"><?= $pst['peserta_gender']; ?></span>
                  <?php endif; ?>
                </td>


                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/peserta/detail/<?= $pst['peserta_id']; ?>"><i class="bx bx-detail me-2"></i> Detail</a>
                      <a class="dropdown-item" href="/peserta/edit/<?= $pst['peserta_id']; ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                      <form action="/peserta/<?= $pst['peserta_id']; ?>" method="post">
                          <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="dropdown-item" onclick="return confirm('Apakah anda yakin?');" ><i class="bx bx-trash me-2"></i> Delete</button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>


            <!-- <tr>
              <td>
                <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
              </td>
              <td>Jerry Milton</td>
              <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-warning me-1">Pending</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
    <!--/ Responsive Table -->
  </div>
  <!-- / Content -->