<?php require_once __DIR__ . '/../../auth.php'; require_login(); ?>
<?php include __DIR__ . '/../layout/head.php'; ?>
<?php include __DIR__ . '/../layout/topnav.php'; ?>
<?php include __DIR__ . '/../layout/sidebar.php'; ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <h1>Tambah Barang</h1>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <form action="#" method="post">
          <div class="card-body">
            <div class="form-group">
              <label>Kode</label>
              <input type="text" name="kode" class="form-control" placeholder="Contoh: BRG001" required>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama barang" required>
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input type="number" name="harga" class="form-control" placeholder="e.g. 15000" required>
            </div>
            <div class="form-group">
              <label>Stok</label>
              <input type="number" name="stok" class="form-control" placeholder="e.g. 10" required>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="<?= url('index.php?page=barang_index') ?>" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>

<?php include __DIR__ . '/../layout/foot.php'; ?>
