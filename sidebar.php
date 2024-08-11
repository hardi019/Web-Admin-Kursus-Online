<div id="sidebar">
        <!-- Dashboard -->
        <div class="nav-item">
            <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                <i class="fas fa-tachometer"></i>Dashboard
            </a>
        </div>

        <!-- Kursus -->
        <div class="nav-item">
            <a href="kursus.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'kursus.php' ? 'active' : ''; ?>">
                <i class="fas fa-book"></i>Kursus
            </a>
        </div>

        <!-- Materi -->
        <div class="nav-item">
            <a href="materi.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'materi.php' ? 'active' : ''; ?>">
                <i class="fas fa-file-alt"></i>Materi
            </a>
        </div>
    </div>