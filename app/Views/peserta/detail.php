<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Peserta /</span> Detail</h4>

    <div class="row">
      <div class="col-md-12">

        <div class="card mb-4">
          <h5 class="card-header">Detail Peserta</h5>
          <!-- Account -->
          <div class="card-body">
            <form id="formAccountSettings" method="POST" onsubmit="return false">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Nama</label>
                  <input class="form-control" type="text" id="firstName" name="firstName" value="<?= $peserta['peserta_nama']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Nip</label>
                  <input class="form-control" type="text" name="lastName" id="lastName" value="<?= $peserta['peserta_nip']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">E-mail</label>
                  <input class="form-control" type="text" id="email" name="email" value="<?= $peserta['peserta_email']; ?>" placeholder="<?= $peserta['peserta_email']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="organization" class="form-label">Tempat, Tanggal Lahir</label>
                  <input type="text" class="form-control" id="organization" name="organization" value="<?= $peserta['peserta_ttl']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Nomer Telepon</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text">ID (+62)</span>
                    <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="<?= $peserta['peserta_telp']; ?>" readonly />
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Agama</label>
                  <input type="text" class="form-control" id="address" name="address" value="<?= $peserta['peserta_agama']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="state" class="form-label">Gender</label>
                  <input class="form-control" type="text" id="state" name="state" value="<?= $peserta['peserta_gender']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="zipCode" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="zipCode" name="zipCode" value="<?= $peserta['peserta_alamat']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="country">Kota</label>
                  <input type="text" class="form-control" id="country" name="zipCode" value="<?= $peserta['peserta_kota']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="language" class="form-label">Kode Pos</label>
                  <input type="text" class="form-control" id="language" name="zipCode" value="<?= $peserta['peserta_kodepos']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="timeZones" class="form-label">Portofolio</label>
                  <input type="text" class="form-control" id="timeZones" name="zipCode" value="<?= $peserta['peserta_portofolio']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="currency" class="form-label">Payment</label>
                  <input type="text" class="form-control" id="currency" name="zipCode" value="<?= $peserta['peserta_payment']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="currency" class="form-label">Status</label>
                  <input type="text" class="form-control" id="currency" name="zipCode" value="<?= $peserta['status_nama']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="currency" class="form-label">Course</label>
                  <input type="text" class="form-control" id="currency" name="zipCode" value="<?= $peserta['course_nama']; ?>" readonly />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="currency" class="form-label">kelas & Kategori</label>
                  <input type="text" class="form-control" id="currency" name="zipCode" value="<?= $peserta['kelaskategori']; ?>" readonly />
                </div>
              </div>
              <div class="mt-2">
                <button type="button" onclick="window.location.href='/peserta'" class="btn btn-primary me-2">Edit Peserta</button>
                <button type="button" onclick="window.location.href='/peserta'" class="btn btn-outline-secondary">Kembali</button>
              </div>
            </form>
          </div>
          <!-- /Account -->
        </div>
        <div class="card">
          <h5 class="card-header">Delete Data <?= $peserta['peserta_nama']; ?></h5>
          <div class="card-body">
            <div class="mb-3 col-12 mb-0">
              <div class="alert alert-warning">
                <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your data <?= $peserta['peserta_nama']; ?>?</h6>
                <p class="mb-0">Once you delete your data <?= $peserta['peserta_nama']; ?>, there is no going back. Please be certain.</p>
              </div>
            </div>
            <form id="formAccountDeactivation" onsubmit="return false">
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
                <label class="form-check-label" for="accountActivation">I confirm my data <?= $peserta['peserta_nama']; ?> deactivation</label>
              </div>
              <button type="submit" class="btn btn-danger deactivate-account">Deactivate Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->
</div>