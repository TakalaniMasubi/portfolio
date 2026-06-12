<?php
// Function to determine active link
function is_active($current_page, $link_page) {
    return $current_page == $link_page ? 'active' : '';
}

// Per-page SEO config
$seo = [
    'home'       => ['title' => 'Takalani Masubi Technologies | Modern Software Solutions', 'description' => 'Full-Stack Software Developer specializing in custom business systems, educational platforms, and digital transformation solutions.'],
    'about'      => ['title' => 'About | Takalani Masubi Technologies', 'description' => 'Learn about Takalani Masubi — a Full-Stack Developer building business systems and digital transformation tools in PHP, Node.js, and more.'],
    'projects'   => ['title' => 'Projects | Takalani Masubi Technologies', 'description' => 'Explore real-world software projects including Tiny Tots Crèche Management System, Kota Joe, InternFlow, and an Event Planning SaaS Platform.'],
    'contact'    => ['title' => 'Contact | Takalani Masubi Technologies', 'description' => 'Get in touch with Takalani Masubi for custom web development, business systems, and software consultation.'],
];
$current_seo = $seo[$page] ?? $seo['home'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($current_seo['title']) ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= htmlspecialchars($current_seo['description']) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($current_seo['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($current_seo['description']) ?>">
    <meta property="og:type" content="website">
</head>
<body>

<nav class="navbar">
    <div class="container nav-container">
        <a href="index.php" class="logo">
            Takalani<span>Tech</span>
        </a>
        <ul class="nav-links" id="nav-links">
            <li><a href="index.php" class="nav-link <?= is_active($page, 'home') ?>">Home</a></li>
            <li><a href="about.php" class="nav-link <?= is_active($page, 'about') ?>">About</a></li>
            <li><a href="projects.php" class="nav-link <?= is_active($page, 'projects') ?>">Projects</a></li>
            <li><a href="contact.php" class="nav-link <?= is_active($page, 'contact') ?>">Contact</a></li>
        </ul>
        <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

<main>
