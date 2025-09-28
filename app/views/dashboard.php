<?php require_once __DIR__ . '/../auth.php'; require_login(); ?>
<?php include __DIR__ . '/layout/head.php'; ?>
<?php include __DIR__ . '/layout/topnav.php'; ?>
<?php include __DIR__ . '/layout/sidebar.php'; ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <h1>Dashboard</h1>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>Total Barang</p>
            </div>
            <div class="icon"><i class="fas fa-box"></i></div>
            <a href="<?= url('index.php?page=barang_index') ?>" class="small-box-footer">Lihat Barang <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- Tambahkan box lain jika perlu -->
      </div>
    </div>
  </section>
</div>

<?php include __DIR__ . '/layout/foot.php'; ?>
