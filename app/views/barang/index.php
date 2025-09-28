<?php require_once __DIR__ . '/../../auth.php'; require_login(); ?>
<?php include __DIR__ . '/../layout/head.php'; ?>
<?php include __DIR__ . '/../layout/topnav.php'; ?>
<?php include __DIR__ . '/../layout/sidebar.php'; ?>

<?php
$barang = [
  ['kode' => 'BRG001', 'nama' => 'Gula 1kg', 'harga' => 15000, 'stok' => 25],
  ['kode' => 'BRG002', 'nama' => 'Kopi Sachet', 'harga' => 2000, 'stok' => 120],
  ['kode' => 'BRG003', 'nama' => 'Minyak 1L', 'harga' => 18000, 'stok' => 40],
];
?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <h1>Data Barang</h1>
      <a href="<?= url('index.php?page=barang_create') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Barang</a>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($barang as $b): ?>
                <tr>
                  <td><?= htmlspecialchars($b['kode']) ?></td>
                  <td><?= htmlspecialchars($b['nama']) ?></td>
                  <td>Rp <?= number_format($b['harga'], 0, ',', '.') ?></td>
                  <td><?= (int)$b['stok'] ?></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
              <?php if (empty($barang)): ?>
                <tr><td colspan="5" class="text-center">Belum ada data</td></tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include __DIR__ . '/../layout/foot.php'; ?>
