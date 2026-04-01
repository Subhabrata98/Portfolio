<?php
$pageTitle = 'Research';
$pageDesc  = 'IEEE published research by Subhabrata Khara on IoMT healthcare security.';
$extraCSS  = '<link rel="stylesheet" href="/css/research.css">';
include 'includes/header.php';
?>

<div class="page-wrap">

  <div class="page-hero">
    <div class="badge" style="margin:0 auto 1.5rem">
      <span class="badge-dot" style="background:var(--amber);box-shadow:0 0 6px var(--amber)"></span>
      IEEE Published &nbsp;·&nbsp; 2025
    </div>
    <h1>Research &amp; <span class="grad-text">Publications</span></h1>
    <p>Academic work at the intersection of IoT, cybersecurity, and healthcare data privacy.</p>
  </div>

  <section class="section">

    <!-- IEEE Paper card -->
    <div class="ieee-wrap reveal">
      <div class="ieee-card glass-card">
        <div class="ieee-header">
          <div class="ieee-badge"><span>IEEE</span></div>
          <div class="ieee-meta">
            <span class="micro-tag tag-amber">Peer Reviewed · Published 2025</span>
            <span class="ieee-year">2025</span>
          </div>
        </div>

        <h2 class="ieee-title">
          Securing Healthcare Data using <span class="grad-text">IoMT</span>
        </h2>

        <p class="ieee-author">Subhabrata Khara <span style="color:var(--dim)">et al.</span></p>

        <p class="ieee-abstract">
          Safeguarding the security and confidentiality of medical data is vital in today's healthcare landscape.
          This study introduces a hybrid framework that combines encryption and steganography to protect sensitive
          medical information effectively. By utilizing the Fernet symmetric encryption algorithm, medical data is
          securely encrypted before being embedded into digital images using advanced steganography techniques.
          The approach incorporates Least Significant Bit (LSB) steganography and edge-based data hiding methods,
          ensuring the encrypted data remains imperceptible while preserving the quality of medical images for
          diagnostic purposes. The proposed framework addresses critical challenges, including maintaining data
          integrity, confidentiality, and resilience against potential attacks, making it highly suitable for
          electronic health records (EHRs) and telemedicine applications. Experimental results highlight the
          framework's ability to achieve robust security, high embedding capacity, and minimal distortion of the
          host image. This dual-layer security approach not only protects patient data but also aligns with
          stringent regulatory requirements for medical data protection, ensuring a reliable and secure healthcare ecosystem.
        </p>

        <div class="ieee-details">
          <div class="idet-row">
            <span class="idet-k">Publisher</span>
            <span class="idet-v">IEEE</span>
          </div>
          <div class="idet-row">
            <span class="idet-k">Conference</span>
            <span class="idet-v">ICCMC 2025</span>
          </div>
          <div class="idet-row">
            <span class="idet-k">Domain</span>
            <span class="idet-v">Cybersecurity · IoT · Healthcare · Steganography</span>
          </div>
          <div class="idet-row">
            <span class="idet-k">Status</span>
            <span class="idet-v" style="color:var(--amber)">● Published</span>
          </div>
          <div class="idet-row">
            <span class="idet-k">DOI</span>
            <span class="idet-v">
              <a href="https://doi.org/10.1109/ICCMC65190.2025.11140712" class="idet-link" target="_blank">
                10.1109/ICCMC65190.2025.11140712
              </a>
            </span>
          </div>
        </div>

        <div class="tags" style="margin:1.8rem 0">
          <span class="micro-tag">IoMT</span>
          <span class="micro-tag">Healthcare Security</span>
          <span class="micro-tag">Fernet Encryption</span>
          <span class="micro-tag">LSB Steganography</span>
          <span class="micro-tag">Data Privacy</span>
          <span class="micro-tag">EHR</span>
          <span class="micro-tag tag-amber">IEEE Indexed</span>
        </div>

        <div class="ieee-actions">
          <a href="https://doi.org/10.1109/ICCMC65190.2025.11140712" target="_blank" class="btn-glass">View Paper →</a>
          <a href="https://doi.org/10.1109/ICCMC65190.2025.11140712" target="_blank" class="btn-outline">Cite</a>
        </div>
      </div>
    </div>

    <!-- Method breakdown -->
    <div class="reveal" style="margin-top:5rem;text-align:center;margin-bottom:2.5rem">
      <p class="sec-label" style="justify-content:center;display:flex">Research Methodology</p>
      <h2 class="sec-title">How the Research Was Done</h2>
    </div>

    <div class="method-grid">
      <?php
      $steps = [
        ['icon'=>'🔍','color'=>'icon-blue','title'=>'Problem Scope',
         'desc'=>'Identified the critical need to secure sensitive medical data in IoMT environments — covering EHRs, telemedicine streams, and connected healthcare devices vulnerable to interception.'],
        ['icon'=>'🔐','color'=>'icon-violet','title'=>'Hybrid Framework',
         'desc'=>'Proposed combining Fernet symmetric encryption with steganography — encrypting medical data first, then embedding it invisibly inside digital images using LSB and edge-based hiding.'],
        ['icon'=>'💡','color'=>'icon-teal','title'=>'Key Results',
         'desc'=>'Achieved robust dual-layer security with high embedding capacity and minimal image distortion, ensuring medical images remain diagnostically usable after data hiding.'],
        ['icon'=>'📄','color'=>'icon-amber','title'=>'IEEE Publication',
         'desc'=>'Published at ICCMC 2025 (IEEE). The framework meets stringent healthcare data regulation requirements (HIPAA-aligned), applicable to hospitals and remote patient monitoring systems.'],
      ];
      foreach($steps as $s):
      ?>
      <div class="glass-card method-card reveal" data-tilt>
        <div class="card-icon <?= $s['color'] ?>"><?= $s['icon'] ?></div>
        <div class="card-title"><?= $s['title'] ?></div>
        <div class="card-body"><?= $s['desc'] ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Future research -->
    <div class="reveal" style="margin-top:5rem">
      <p class="sec-label">Future Research Directions</p>
      <h2 class="sec-title">What's Next</h2>
      <div class="future-grid">
        <?php
        $future = [
          ['Deep learning-based steganalysis detection resistance', 'tag-blue',   'Security'],
          ['AI/ML anomaly detection in real-time IoMT streams',     'tag-violet', 'AI / ML'],
          ['Federated learning for privacy-preserving medical AI',   'tag-teal',  'Privacy'],
          ['Blockchain-based audit trails for EHR systems',          'tag-amber', 'Blockchain'],
        ];
        foreach($future as $f):
        ?>
        <div class="future-item glass-card reveal">
          <span class="micro-tag <?= $f[1] ?>" style="margin-bottom:0.8rem;display:inline-block"><?= $f[2] ?></span>
          <p style="font-size:0.85rem;color:var(--muted);line-height:1.7"><?= $f[0] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </section>
</div>

<?php include 'includes/footer.php'; ?>
