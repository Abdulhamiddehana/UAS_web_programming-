

<?php $__env->startSection('title', $artikel->judul . ' - Blog Kami'); ?>

<?php $__env->startSection('content'); ?>
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb" style="font-size: 14px;">
        <li class="breadcrumb-item"><a href="<?php echo e(route('blog.index')); ?>" class="text-decoration-none" style="color: #10ac84;">Beranda</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('blog.kategori', $artikel->id_kategori)); ?>" class="text-decoration-none" style="color: #10ac84;"><?php echo e($artikel->kategori->nama_kategori); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page" style="color: #636e72;"><?php echo e(Str::limit($artikel->judul, 40)); ?></li>
    </ol>
</nav>

<div class="row g-5">
    <div class="col-lg-8">
        <div class="article-card p-4 p-md-5">
            <span class="badge-kategori d-inline-block mb-3"><?php echo e($artikel->kategori->nama_kategori); ?></span>
            <h1 class="fw-bold mb-4" style="color: #2d3436; font-size: 28px; line-height: 1.4;"><?php echo e($artikel->judul); ?></h1>
            
            <div class="d-flex align-items-center mb-4 pb-4 border-bottom" style="font-size: 14px; color: #636e72;">
                <img src="<?php echo e(asset('storage/foto/' . $artikel->penulis->foto)); ?>" alt="Avatar Penulis" style="width: 45px; height: 45px; border-radius: 50%; object-fit: cover; border: 2px solid #e3f2fd; margin-right: 15px;">
                <div>
                    <div class="fw-bold" style="color: #2d3436;"><?php echo e($artikel->penulis->nama_depan); ?> <?php echo e($artikel->penulis->nama_belakang); ?></div>
                    <div style="font-size: 12px;"><?php echo e($artikel->hari_tanggal); ?></div>
                </div>
            </div>

            <img src="<?php echo e(asset('storage/gambar/' . $artikel->gambar)); ?>" class="img-fluid rounded mb-4 w-100" style="max-height: 450px; object-fit: cover;" alt="<?php echo e($artikel->judul); ?>">
            
            <div class="article-content" style="font-size: 16px; line-height: 1.8; color: #4b4b4b; text-align: justify;">
                <?php echo nl2br(e($artikel->isi)); ?>

            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="sidebar-card p-4 sticky-top" style="top: 20px;">
            <h5 class="fw-bold mb-4 pb-2 border-bottom" style="color: #2d3436; font-size: 16px;">Artikel Terkait</h5>
            
            <div class="list-group list-group-flush mb-4">
                <?php $__empty_1 = true; $__currentLoopData = $artikelTerkait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $terkait): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('blog.detail', $terkait->id)); ?>" class="list-group-item list-group-item-action px-0 py-3 border-bottom d-flex align-items-start" style="background: transparent;">
                        <div>
                            <h6 class="fw-semibold mb-1" style="color: #1565c0; font-size: 14px; line-height: 1.4;"><?php echo e($terkait->judul); ?></h6>
                            <small class="text-muted" style="font-size: 11px;"><?php echo e(explode('|', $terkait->hari_tanggal)[0]); ?></small>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="text-muted small py-3" style="font-style: italic;">
                        Belum ada artikel terkait di kategori ini.
                    </div>
                <?php endif; ?>
            </div>
            
            <a href="<?php echo e(route('blog.index')); ?>" class="btn btn-outline-secondary w-100" style="border-radius: 20px; font-size: 13px; font-weight: 500;">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blog', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMP\htdocs\aplikasi-blog\resources\views/blog/detail.blade.php ENDPATH**/ ?>