<?php
$pageTitle = 'Home';
$pageDesc  = 'Subhabrata Khara — MTech CSE, Freelance Web Developer, IEEE Author, Assistant Professor at IFSE.';
$extraCSS  = '<link rel="stylesheet" href="/css/home.css?v=<?php echo time(); ?">';
$extraJS   = '<script src="/js/home.js"></script>';
include 'includes/header.php';
?>

<div class="page-wrap">

  <!-- ===== HERO ===== -->
  <section class="hero">

    <div class="badge" style="opacity:0;animation:fadeDown 0.6s ease 0.2s forwards">
      <span class="badge-dot"></span>
      Open to opportunities &nbsp;·&nbsp; MTech CSE &nbsp;·&nbsp; IEEE Conference Publication
    </div>

    <h1>
      <span class="grad-text">Subhabrata</span><br>
      <span style="color:var(--text)">Khara</span>
    </h1>

    <div class="hero-typing" style="opacity:0;animation:fadeDown 0.7s ease 0.65s forwards">
      <span id="typingText"></span><span class="type-cursor">|</span>
    </div>

    <p class="hero-sub" style="opacity:0;animation:fadeDown 0.8s ease 0.85s forwards">
      CS postgraduate &amp; educator who builds production-ready web systems.<br>
      10+ websites delivered &bull; IEEE published &bull; Assistant Professor at IFSE.
    </p>

    <div class="hero-btns" style="opacity:0;animation:fadeDown 0.8s ease 1.05s forwards">
      <a href="/projects.php" class="btn-glass">Explore Projects →</a>
      <a href="/resume.php"   class="btn-outline">Download Resume</a>
      <a href="/contact.php"  class="btn-outline">Hire Me</a>
    </div>

    <div class="hero-socials" style="opacity:0;animation:fadeDown 0.7s ease 1.25s forwards">
      <a href="mailto:20subhabratakhara14@gmail.com" class="social-pill">Email</a>
      <span class="social-dot"></span>
      <a href="https://linkedin.com/in/subhabrata-khara" target="_blank" class="social-pill">LinkedIn</a>
      <span class="social-dot"></span>
      <a href="https://github.com/Subhabrata98" target="_blank" class="social-pill">GitHub</a>
      <span class="social-dot"></span>
      <a href="tel:+917602624410" class="social-pill">+91 76026 24410</a>
    </div>

  </section>

  <!-- ===== STATS ===== -->
  <div class="stats-bar reveal">
    <div class="stat-cell">
      <span class="stat-val" data-count="10" data-suffix="+">0+</span>
      <div class="stat-lbl">Websites Delivered</div>
    </div>
    <div class="stat-cell">
      <span class="stat-val" data-count="2" data-suffix="+">0+</span>
      <div class="stat-lbl">Years Experience</div>
    </div>
    <div class="stat-cell">
      <span class="stat-val" data-count="1">0</span>
      <div class="stat-lbl">IEEE Publication</div>
    </div>
    <div class="stat-cell">
      <span class="stat-val" data-count="9.34">0</span>
      <div class="stat-lbl">MTech CGPA</div>
    </div>
  </div>

  <!-- ===== SKILL CARDS ===== -->
  <div class="cards-row reveal">

    <div class="glass-card" data-tilt>
      <div class="card-icon icon-blue">🌐</div>
      <div class="card-title">Web Development</div>
      <div class="card-body">Full-cycle website delivery — from design to cloud deployment. Specialising in WordPress, CMS architecture, and database-driven portals for institutions and global clients.</div>
      <div class="tags">
        <span class="micro-tag">WordPress</span>
        <span class="micro-tag">PHP</span>
        <span class="micro-tag">MySQL</span>
        <span class="micro-tag">HTML / CSS</span>
      </div>
    </div>

    <div class="glass-card" data-tilt>
      <div class="card-icon icon-violet">☁️</div>
      <div class="card-title">Cloud & Deployment</div>
      <div class="card-body">Production-grade cloud hosting on Google Cloud Platform. Domain config, SSL, backups, and live site maintenance for international conference and college portals.</div>
      <div class="tags">
        <span class="micro-tag">Google Cloud</span>
        <span class="micro-tag">Domain Config</span>
        <span class="micro-tag">SSL</span>
        <span class="micro-tag">DevOps</span>
      </div>
    </div>

    <div class="glass-card" data-tilt>
      <div class="card-icon icon-teal">🔬</div>
      <div class="card-title">Research & Teaching</div>
      <div class="card-body">IEEE-published researcher in IoMT security. Currently teaching as Assistant Professor at IFSE — bridging theory and practical system-level understanding for students.</div>
      <div class="tags">
        <span class="micro-tag">IoMT Security</span>
        <span class="micro-tag">IEEE</span>
        <span class="micro-tag">Teaching</span>
        <span class="micro-tag">MATLAB</span>
      </div>
    </div>

  </div>

  <!-- ===== FEATURED PROJECTS ===== -->
  <section class="section">
    <div class="reveal" style="text-align:center;margin-bottom:3rem">
      <p class="sec-label" style="justify-content:center;display:flex">Featured Work</p>
      <h2 class="sec-title" style="text-align:center">Recent Projects</h2>
      <p class="sec-sub" style="margin:0 auto;text-align:center">A selection of live websites and research delivered for real-world clients.</p>
    </div>

    <div class="feat-grid">

  <div class="feat-card glass-card reveal" data-tilt data-delay="0">
    <div class="feat-top">
      <span class="feat-type tag-teal micro-tag">Education</span>
      <span class="feat-year">2026</span>
    </div>
    <h3 class="feat-title">College Website</h3>
    <p class="feat-desc">Official college website built with modern layout, program information, admission details, faculty pages, notices, and student resources. Fully responsive and cloud hosted.</p>
    <div class="tags">
      <span class="micro-tag">WordPress</span>
      <span class="micro-tag">PHP</span>
      <span class="micro-tag">MySQL</span>
      <span class="micro-tag tag-teal">Live</span>
    </div>
    <a href="https://ifse.in" target="_blank"
       style="display:inline-flex;align-items:center;gap:0.4rem;margin-top:1.2rem;font-size:0.78rem;color:var(--teal);text-decoration:none;transition:color 0.25s"
       onmouseover="this.style.color='var(--text)'" onmouseout="this.style.color='var(--teal)'">
      Visit ifse.in ↗
    </a>
  </div>

  <div class="feat-card glass-card reveal" data-tilt data-delay="130">
    <div class="feat-top">
      <span class="feat-type tag-blue micro-tag">Education</span>
      <span class="feat-year">2026</span>
    </div>
    <h3 class="feat-title">College &amp; Institute Website</h3>
    <p class="feat-desc">Custom PHP-based institutional website featuring department pages, faculty profiles, notice board, event updates, and student information modules.</p>
    <div class="tags">
      <span class="micro-tag">PHP</span>
      <span class="micro-tag">MySQL</span>
      <span class="micro-tag">Custom CMS</span>
      <span class="micro-tag tag-teal">Live</span>
    </div>
    <a href="https://ipsthaldia.com" target="_blank"
       style="display:inline-flex;align-items:center;gap:0.4rem;margin-top:1.2rem;font-size:0.78rem;color:var(--teal);text-decoration:none;transition:color 0.25s"
       onmouseover="this.style.color='var(--text)'" onmouseout="this.style.color='var(--teal)'">
      Visit ipsthaldia.com ↗
    </a>
  </div>

  <div class="feat-card glass-card reveal" data-tilt data-delay="260">
    <div class="feat-top">
      <span class="feat-type tag-amber micro-tag">IEEE Research</span>
      <span class="feat-year">2025</span>
    </div>
    <h3 class="feat-title">Securing Healthcare Data using IoMT</h3>
    <p class="feat-desc">Published IEEE paper on secure data transmission and privacy in IoMT healthcare systems. Covers encryption models, steganography, and risk analysis.</p>
    <div class="tags">
      <span class="micro-tag">IoMT</span>
      <span class="micro-tag">Encryption</span>
      <span class="micro-tag">Security</span>
      <span class="micro-tag tag-amber">Published</span>
    </div>
    <a href="https://doi.org/10.1109/ICCMC65190.2025.11140712" target="_blank"
       style="display:inline-flex;align-items:center;gap:0.4rem;margin-top:1.2rem;font-size:0.78rem;color:var(--amber);text-decoration:none;transition:color 0.25s"
       onmouseover="this.style.color='var(--text)'" onmouseout="this.style.color='var(--amber)'">
      View IEEE Paper ↗
    </a>
  </div>

</div>

    </div>

    <div class="reveal" style="text-align:center;margin-top:3rem">
      <a href="/projects.php" class="btn-glass">View All Projects →</a>
    </div>
  </section>

  <!-- ===== CERTS STRIP ===== -->
  <section class="section-sm certs-band reveal">
    <p class="sec-label" style="text-align:center;margin-bottom:1.5rem">Certifications & Competitions</p>
    <div class="cert-pills">
      <span class="cert-pill">🏅 Deloitte Technology Job Simulation</span>
      <span class="cert-pill">🔐 Deloitte Cyber Security Simulation</span>
      <span class="cert-pill">🌿 IOCL SUSTAIN-A-THON</span>
      <span class="cert-pill">⚡ Flipkart GRiD 6.0</span>
    </div>
  </section>

</div><!-- end page-wrap -->

<?php include 'includes/footer.php'; ?>
