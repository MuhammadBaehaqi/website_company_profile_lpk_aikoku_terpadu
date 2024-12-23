<?php
// Mulai sesi
session_start();

// Hapus semua sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Tampilkan alert dengan JavaScript sebelum redirect
echo "<script>alert('Anda telah berhasil logout.'); window.location.href = '../../login.php';</script>";
exit();
?>
