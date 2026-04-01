<?php $current = basename($_SERVER['PHP_SELF'], '.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= isset($pageTitle) ? htmlspecialchars($pageTitle).' | Subhabrata Khara' : 'Subhabrata Khara — CSE Portfolio' ?></title>
<meta name="description" content="<?= isset($pageDesc) ? htmlspecialchars($pageDesc) : 'Portfolio of Subhabrata Khara — MTech CSE, Web Developer, IEEE Author, Assistant Professor' ?>">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/global.css">
<link rel="icon" type="image/png" href="/assets/icon.png">
<?= isset($extraCSS) ? $extraCSS : '' ?>
</head>
<body>

<!-- Particle canvas -->
<canvas id="particles"></canvas>

<!-- Gradient orbs -->
<div class="orb orb-1"></div>
<div class="orb orb-2"></div>
<div class="orb orb-3"></div>
<div class="orb orb-4"></div>

<!-- Navigation -->
<nav id="mainNav">
  <a href="/index.php" class="nav-logo">SK.</a>

  <ul class="nav-links" id="navLinks">
    <li><a href="/about.php"      class="<?= $current==='about'      ? 'active':'' ?>">About</a></li>
    <li><a href="/projects.php"   class="<?= $current==='projects'   ? 'active':'' ?>">Projects</a></li>
    <li><a href="/research.php"   class="<?= $current==='research'   ? 'active':'' ?>">Research</a></li>
    <li><a href="/experience.php" class="<?= $current==='experience' ? 'active':'' ?>">Experience</a></li>
    <li><a href="/resume.php"    class="<?= $current==='contact'    ? 'active':'' ?>">Resume</a></li>
    <li><a href="/contact.php"    class="<?= $current==='contact'    ? 'active':'' ?>">Contact</a></li>
    
  </ul>

  <a href="/contact.php" class="nav-cta">Hire me</a>

  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>
