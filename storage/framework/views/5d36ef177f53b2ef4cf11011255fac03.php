<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Blog Kami'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar { background-color: #2C3E50; padding: 15px 0; }
        .navbar-brand { color: #ffffff !important; font-weight: bold; font-size: 24px; }
        .nav-link { color: #d1d8e0 !important; font-size: 15px; margin-left: 15px; }
        .nav-link:hover, .nav-link.active { color: #ffffff !important; }
        .footer { background-color: #2C3E50; color: #8395a7; padding: 20px 0; text-align: center; margin-top: 60px; font-size: 14px; }
        
        /* Gaya Khusus Kartu Artikel */
        .article-card { border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); overflow: hidden; margin-bottom: 30px; background-color: #ffffff; }
        .article-img { height: 280px; object-fit: cover; width: 100%; }
        .badge-kategori { background-color: #e3f2fd; color: #1565c0; font-weight: 500; font-size: 12px; padding: 6px 12px; border-radius: 20px; }
        .btn-read-more { background-color: #10ac84; color: white; border-radius: 20px; padding: 8px 20px; font-size: 13px; text-decoration: none; display: inline-block; font-weight: 500; transition: 0.3s; }
        .btn-read-more:hover { background-color: #019066; color: white; }
        
        /* Gaya Sidebar Kategori */
        .sidebar-card { border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); background-color: #ffffff; }
        .list-group-item { border: none; padding: 12px 16px; border-radius: 8px !important; margin-bottom: 4px; color: #555; }
        .list-group-item:hover { background-color: #f8f9fa; }
        .list-group-item.active { background-color: #e8f5e9; color: #2e7d32; font-weight: 600; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('blog.index')); ?>">Blog Kami</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="<?php echo e(route('blog.index')); ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <div class="footer">
        &copy; 2026 Blog Kami. Seluruh hak cipta dilindungi.
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH D:\XAMP\htdocs\aplikasi-blog\resources\views/layouts/blog.blade.php ENDPATH**/ ?>