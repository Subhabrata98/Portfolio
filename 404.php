<?php
$pageTitle = '404 — Not Found';
include 'includes/header.php';
?>
<div class="page-wrap">
  <section class="section" style="min-height:75vh;display:flex;align-items:center;justify-content:center;text-align:center">
    <div>
      <div class="badge" style="margin:0 auto 2rem">
        <span class="badge-dot" style="background:var(--pink);box-shadow:0 0 6px var(--pink)"></span>
        Error 404
      </div>
      <h1 style="font-family:'Space Mono',monospace;font-size:7rem;font-weight:700;line-height:1;margin-bottom:1rem;background:linear-gradient(135deg,var(--blue),var(--violet));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">404</h1>
      <p style="font-size:1rem;color:var(--muted);margin-bottom:2.5rem;max-width:400px;margin-left:auto;margin-right:auto;line-height:1.8">
        This page doesn't exist. The route <code style="color:var(--blue);background:var(--surface);padding:0.15rem 0.5rem;border-radius:6px"><?= htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/') ?></code> was not found.
      </p>
      <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
        <a href="/index.php" class="btn-glass">Go Home</a>
        <a href="/contact.php" class="btn-outline">Contact</a>
      </div>
    </div>
  </section>
</div>
<?php include 'includes/footer.php'; ?>
