

<?php $__env->startSection('title', isset($kategoriAktif) ? 'Kategori: ' . $kategoriAktif->nama_kategori . ' - Blog Kami' : 'Beranda - Blog Kami'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-4">
    <p class="text-muted">Artikel terbaru seputar teknologi dan pemrograman</p>
</div>

<div class="row g-5">
    <div class="col-lg-8">
        <?php $__empty_1 = true; $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="article-card">
                <img src="<?php echo e(asset('storage/gambar/' . $item->gambar)); ?>" class="article-img" alt="<?php echo e($item->judul); ?>">
                <div class="card-body p-4 p-md-5">
                    <span class="badge-kategori d-inline-block mb-3"><?php echo e($item->kategori->nama_kategori); ?></span>
                    <h3 class="fw-bold mb-3" style="color: #2d3436;"><?php echo e($item->judul); ?></h3>
                    
                    <div class="d-flex align-items-center mb-4" style="font-size: 13px; color: #636e72;">
                        <img src="<?php echo e(asset('storage/foto/' . $item->penulis->foto)); ?>" alt="Avatar" style="width: 28px; height: 28px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
                        <span><?php echo e($item->penulis->nama_depan); ?> <?php echo e($item->penulis->nama_belakang); ?> &nbsp;&bull;&nbsp; <?php echo e(explode('|', $item->hari_tanggal)[0]); ?></span>
                    </div>
                    
                    <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.7;">
                        <?php echo e(Str::limit(strip_tags($item->isi), 200, '...')); ?>

                    </p>
                    
                    <a href="<?php echo e(route('blog.detail', $item->id)); ?>" class="btn-read-more">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="alert alert-info border-0 shadow-sm" style="border-radius: 12px;">
                Belum ada artikel yang dipublikasikan saat ini.
            </div>
        <?php endif; ?>
    </div>

    <div class="col-lg-4">
        <div class="sidebar-card p-4 sticky-top" style="top: 20px;">
            <h5 class="fw-bold mb-4" style="color: #2d3436;">Kategori Artikel</h5>
            <div class="list-group list-group-flush">
                <a href="<?php echo e(route('blog.index')); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center <?php echo e(!isset($kategoriAktif) ? 'active' : ''); ?>">
                    Semua Artikel
                </a>
                
                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('blog.kategori', $kat->id)); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center <?php echo e((isset($kategoriAktif) && $kategoriAktif->id == $kat->id) ? 'active' : ''); ?>">
                        <?php echo e($kat->nama_kategori); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blog', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMP\htdocs\aplikasi-blog\resources\views/blog/index.blade.php ENDPATH**/ ?>