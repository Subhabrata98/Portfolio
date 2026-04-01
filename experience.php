<?php
$pageTitle = 'Experience';
$pageDesc  = 'Work experience, internships and certifications of Subhabrata Khara.';
$extraCSS  = '<link rel="stylesheet" href="/css/experience.css">';
include 'includes/header.php';
?>

<div class="page-wrap">

  <div class="page-hero">
    <div class="badge" style="margin:0 auto 1.5rem">
      <span class="badge-dot"></span> 2+ Years Experience &nbsp;·&nbsp; Teaching + Consulting
    </div>
    <h1>Work &amp; <span class="grad-text">Experience</span></h1>
    <p>Teaching, consulting, and researching — combining academic depth with real-world delivery.</p>
  </div>

  <section class="section">

    <!-- Work Experience -->
    <div class="reveal" style="margin-bottom:2.5rem">
      <p class="sec-label">Work Experience</p>
      <h2 class="sec-title">Professional Roles</h2>
    </div>

    <div class="timeline">

      <div class="tl-item reveal" data-delay="0">
        <div class="tl-marker">
          <div class="tl-dot" style="background:var(--teal);box-shadow:0 0 10px var(--teal)"></div>
          <div class="tl-line"></div>
        </div>
        <div class="glass-card tl-card">
          <div class="tl-head">
            <span class="micro-tag tag-teal">Full-time &nbsp;·&nbsp; April 2025 – Present</span>
          </div>
          <h3 class="tl-title">Assistant Professor</h3>
          <p class="tl-org">IFSE (Institute for Science & Engineering Education)</p>
          <ul class="tl-list">
  <li>Conducting practical training on fire prevention, safety procedures, and emergency response systems.</li>
  <li>Guiding students on hazard identification, risk assessment, and workplace safety practices.</li>
  <li>Developing training materials aligned with industrial safety standards and regulatory guidelines.</li>
</ul>
          <div class="tags" style="margin-top:1rem">
            <span class="micro-tag">Teaching</span>
            <span class="micro-tag">Lab Instruction</span>
            <span class="micro-tag">Mentoring</span>
            <span class="micro-tag">Curriculum Design</span>
          </div>
        </div>
      </div>

      <div class="tl-item reveal" data-delay="120">
        <div class="tl-marker">
          <div class="tl-dot" style="background:var(--blue);box-shadow:0 0 10px var(--blue)"></div>
          <div class="tl-line"></div>
        </div>
        <div class="glass-card tl-card">
          <div class="tl-head">
            <span class="micro-tag tag-blue">Freelance &nbsp;·&nbsp; 2023 – Present</span>
          </div>
          <h3 class="tl-title">Technology Consultant — Web &amp; CMS</h3>
          <p class="tl-org">Self-employed · Global &amp; Domestic Clients</p>
          <ul class="tl-list">
            <li>Delivered <strong>10+ production-ready</strong> websites and portals for international conferences, colleges, and businesses.</li>
            <li>Full lifecycle: requirement gathering → solution design → development → testing → deployment.</li>
            <li>Implemented database-driven forms, role-based access control (RBAC), and CMS workflows.</li>
            <li>Cloud hosting setup, domain config, SSL, backups, and ongoing production support.</li>
            <li>Coordinated with stakeholders across time zones for agile delivery.</li>
          </ul>
          <div class="tags" style="margin-top:1rem">
            <span class="micro-tag">WordPress</span>
            <span class="micro-tag">PHP</span>
            <span class="micro-tag">MySQL</span>
            <span class="micro-tag">Google Cloud</span>
            <span class="micro-tag">HTML / CSS</span>
            <span class="micro-tag tag-teal">10+ Delivered</span>
          </div>
        </div>
      </div>

    </div>

    <!-- Internships -->
    <div class="reveal" style="margin:5rem 0 2.5rem">
      <p class="sec-label">Internships</p>
      <h2 class="sec-title">Internship Experience</h2>
    </div>

    <div class="intern-grid">
      <div class="glass-card reveal" data-tilt data-delay="0">
        <div class="card-icon icon-violet">💼</div>
        <div class="card-title">Acciojob Internship</div>
        <div class="card-body">Content coordination, data tracking and stakeholder communication. Gained exposure to tech operations and project workflow management in an agile environment.</div>
        <div class="tags" style="margin-top:1rem">
          <span class="micro-tag">Content Management</span>
          <span class="micro-tag">Data Tracking</span>
          <span class="micro-tag">Stakeholder Comms</span>
        </div>
      </div>
      <div class="glass-card reveal" data-tilt data-delay="150">
        <div class="card-icon icon-teal">📐</div>
        <div class="card-title">AutoCAD Design for Process Equipment</div>
        <div class="card-body">Created engineering drawings and process equipment layouts using AutoCAD. Developed precision technical diagrams conforming to industrial standards.</div>
        <div class="tags" style="margin-top:1rem">
          <span class="micro-tag">AutoCAD</span>
          <span class="micro-tag">Engineering Drawing</span>
          <span class="micro-tag">Process Equipment</span>
        </div>
      </div>
    </div>

    <!-- Certifications -->
    <div class="reveal" style="margin:5rem 0 2.5rem">
      <p class="sec-label">Certifications &amp; Competitions</p>
      <h2 class="sec-title">Credentials</h2>
    </div>

    <div class="cert-grid">
      <?php
      $certs = [
        ['org'=>'Deloitte','name'=>'Technology Job Simulation','desc'=>'Simulated real-world technology consulting at Deloitte — data analysis, tech advisory, and client communication.','color'=>'icon-blue'],
        ['org'=>'Deloitte','name'=>'Cyber Security Job Simulation','desc'=>'Hands-on cybersecurity simulation covering incident response, threat analysis, and security advisory in consulting.','color'=>'icon-violet'],
        ['org'=>'IOCL','name'=>'SUSTAIN-A-THON','desc'=>'Sustainability hackathon by Indian Oil Corporation — developed solutions for energy and environmental challenges.','color'=>'icon-teal'],
        ['org'=>'Flipkart','name'=>'GRiD 6.0','desc'=>"Competed in Flipkart's national engineering challenge — tackled real-world e-commerce and supply chain problems.",'color'=>'icon-amber'],
      ];
      foreach($certs as $c):
      ?>
      <div class="glass-card cert-card reveal" data-tilt>
        <div class="cert-org"><?= $c['org'] ?></div>
        <div class="cert-name"><?= $c['name'] ?></div>
        <div class="cert-desc"><?= $c['desc'] ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Profile links -->
    <div class="reveal" style="margin-top:4rem">
      <p class="sec-label">Learning Profiles</p>
      <div class="profile-links">
        <a href="https://www.skills.google/public_profiles/70d3a6e7-3c38-48c8-b73c-27543661f597" class="profile-link-card glass-card" target="_blank">
          <div class="card-icon icon-blue" style="width:44px;height:44px;border-radius:10px;margin-bottom:0.8rem">☁️</div>
          <div style="font-weight:600;font-size:0.9rem;margin-bottom:0.3rem">Google Cloud Skills Boost</div>
          <div style="font-size:0.75rem;color:var(--muted)">Qwiklabs / GCP Profile →</div>
        </a>
        <a href="https://g.dev/Subhabrata_Khara" class="profile-link-card glass-card" target="_blank">
          <div class="card-icon icon-teal" style="width:44px;height:44px;border-radius:10px;margin-bottom:0.8rem">🔧</div>
          <div style="font-weight:600;font-size:0.9rem;margin-bottom:0.3rem">Google Developer Profile</div>
          <div style="font-size:0.75rem;color:var(--muted)">Google Developers →</div>
        </a>
      </div>
    </div>

  </section>
</div>

<?php include 'includes/footer.php'; ?>
