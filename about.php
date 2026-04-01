<?php
$pageTitle = 'About';
$pageDesc  = 'About Subhabrata Khara — MTech CSE, Assistant Professor, Freelance Web Developer, IEEE Author.';
$extraCSS  = '<link rel="stylesheet" href="/css/about.css">';
include 'includes/header.php';
?>

<div class="page-wrap">

  <div class="page-hero">
    <div class="badge" style="margin:0 auto 1.5rem">
      <span class="badge-dot"></span> MTech CSE &nbsp;·&nbsp; Haldia, West Bengal
    </div>
    <h1><span class="grad-text">About</span> Me</h1>
    <p>Educator, developer, researcher — combining academic depth with real-world delivery.</p>
  </div>

  <section class="section">
    <div class="about-grid">

      <!-- Profile card -->
      <div class="reveal">
        <div class="profile-card glass-card">
          <div class="avatar">SK</div>
          <div class="profile-name">Subhabrata Khara</div>
          <div class="profile-role">MTech CSE &nbsp;·&nbsp; Asst. Professor &nbsp;·&nbsp; Web Dev</div>
          <div class="profile-sep"></div>
          <div class="info-list">
            <div class="info-row">
              <span class="info-key">Location</span>
              <span class="info-val">Haldia, West Bengal</span>
            </div>
            <div class="info-row">
              <span class="info-key">Email</span>
              <a href="mailto:20subhabratakhara14@gmail.com" class="info-link">20subhabratakhara14@gmail.com</a>
            </div>
            <div class="info-row">
              <span class="info-key">Phone</span>
              <a href="tel:+917602624410" class="info-link">+91 76026 24410</a>
            </div>
            <div class="info-row">
              <span class="info-key">LinkedIn</span>
              <a href="https://linkedin.com/in/subhabrata-khara" target="_blank" class="info-link">subhabrata-khara</a>
            </div>
            <div class="info-row">
  <span class="info-key">GitHub</span>
  <a href="https://github.com/Subhabrata98" target="_blank" class="info-link">github.com/Subhabrata98</a>
</div>
            <div class="info-row">
              <span class="info-key">Status</span>
              <span class="info-val" style="display:flex;align-items:center;gap:6px">
                <span class="badge-dot"></span> Open to opportunities
              </span>
            </div>
          </div>
          <a href="/contact.php" class="btn-glass" style="width:100%;text-align:center;margin-top:1.8rem;display:block">Get In Touch</a>
          <a href="/resume.php"  class="btn-outline" style="width:100%;text-align:center;margin-top:0.8rem;display:block">Download Resume</a>
        </div>
      </div>

      <!-- Bio + education + skills -->
      <div>
        <div class="reveal">
          <h2 class="about-heading">Hello, I'm <span class="grad-text">Subhabrata</span></h2>
          <p class="about-p">
            I'm a Computer Science postgraduate from <strong>Haldia Institute of Technology</strong> (MTech, CSE — CGPA 9.34) with a strong background in web development, cloud platforms, databases, and applied research.
          </p>
          <p class="about-p">
            Since 2023, I've been working as a <strong>Freelance Technology Consultant</strong>, delivering 10+ production-ready websites and portals for international conferences, colleges, and businesses worldwide — handling everything from requirement gathering to live deployment.
          </p>
          <p class="about-p">
            In April 2025, I joined <strong>IFSE as an Assistant Professor</strong>, supporting lab-based technical training and helping students build strong computing foundations.
          </p>
          <p class="about-p">
            My research focuses on IoT security and healthcare data privacy — resulting in an <strong>IEEE-published paper</strong> on securing healthcare data using IoMT.
          </p>
        </div>

        <!-- Education -->
        <div class="reveal" style="margin-top:3rem">
          <p class="sec-label">Education</p>
          <div class="edu-list">
            <div class="edu-card glass-card">
              <div class="edu-top">
                <div>
                  <div class="edu-degree">M.Tech — Computer Science Engineering</div>
                  <div class="edu-inst">Haldia Institute of Technology, Haldia</div>
                </div>
                <div class="edu-right">
                  <div class="edu-year">2023 – 2025</div>
                  <div class="edu-cgpa grad-text">9.34 CGPA</div>
                </div>
              </div>
            </div>
            <div class="edu-card glass-card">
              <div class="edu-top">
                <div>
                  <div class="edu-degree">B.Tech — Computer Science (CSBS)</div>
                  <div class="edu-inst">Sister Nivedita University, Kolkata</div>
                </div>
                <div class="edu-right">
                  <div class="edu-year">2019 – 2023</div>
                  <div class="edu-cgpa grad-teal">8.79 CGPA</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Skills -->
        <div class="reveal" style="margin-top:3rem">
          <p class="sec-label">Technical Skills</p>
          <div class="skills-grid">
            <div class="skill-group">
              <div class="sg-label">Languages</div>
              <div class="tags">
                <span class="micro-tag">Java</span>
                <span class="micro-tag">HTML</span>
                <span class="micro-tag">CSS</span>
              </div>
            </div>
            <div class="skill-group">
              <div class="sg-label">Tools & Platforms</div>
              <div class="tags">
                <span class="micro-tag">Google Cloud Platform</span>
                <span class="micro-tag">WordPress</span>
                <span class="micro-tag">AutoCAD</span>
                <span class="micro-tag">MATLAB</span>
              </div>
            </div>
            <div class="skill-group">
              <div class="sg-label">Databases</div>
              <div class="tags">
                <span class="micro-tag">MySQL</span>
              </div>
            </div>
            <div class="skill-group">
              <div class="sg-label">Deployment</div>
              <div class="tags">
                <span class="micro-tag">Cloud Hosting</span>
                <span class="micro-tag">Domain Config</span>
                <span class="micro-tag">SSL / Backups</span>
                <span class="micro-tag">Production Support</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
