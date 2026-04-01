<?php
$pageTitle = 'Projects';
$pageDesc  = 'Web projects by Subhabrata Khara — conference portals, college websites, portals and IEEE research.';
$extraCSS  = '<link rel="stylesheet" href="/css/projects.css">';
include 'includes/header.php';

$projects = [

  ['type'=>'Education','title'=>'College Website','desc'=>'Official institutional website for college including courses, admission information, faculty pages and academic notices.','tags'=>['WordPress','PHP','MySQL'],'status'=>'Live','year'=>'2026','link'=>'https://ifse.in/'],

  ['type'=>'Education','title'=>'College Website','desc'=>'Custom PHP-based institutional website with departments, notices, student information and dynamic content management.','tags'=>['PHP','MySQL','HTML','CSS'],'status'=>'Live','year'=>'2026','link'=>'https://ipsthaldia.com/'],

  ['type'=>'Conference','title'=>'International Conference Website','desc'=>'WordPress-based international conference website with author guidelines, program schedule and submission details.','tags'=>['WordPress','PHP','MySQL'],'status'=>'Live','year'=>'2025','link'=>'https://smart2025.hseconference.in/'],

  ['type'=>'Conference','title'=>'International Conference Website','desc'=>'International conference portal built with WordPress featuring academic program pages and submission workflows.','tags'=>['WordPress','PHP','MySQL'],'status'=>'Live','year'=>'2024','link'=>'https://hse2k24.hseconference.in/'],

  ['type'=>'Conference','title'=>'International Conference Website','desc'=>'International conference website developed using WordPress for paper submission, committee pages and registration portal.','tags'=>['WordPress','PHP','MySQL'],'status'=>'Live','year'=>'2023','link'=>'https://hseconference.in/'],

  ['type'=>'Conference','title'=>'International Conference Website','desc'=>'International conference website built on WordPress platform with paper submission details and keynote sessions.','tags'=>['WordPress','PHP','MySQL'],'year'=>'2025','link'=>'http://greentech2025.scbfhit.in/'],

  ['type'=>'Conference','title'=>'International Conference Website','desc'=>'Academic conference portal created using WordPress including committees, schedule and announcements.','tags'=>['WordPress','PHP','MySQL'],'year'=>'2024','link'=>'http://scbfhit.in/'],

  ['type'=>'Research','title'=>'Securing Healthcare Data using IoMT','desc'=>'IEEE-published research on securing healthcare data in IoMT environments — encryption models, secure communication protocols and healthcare data risk analysis.','tags'=>['IoMT','Security','Encryption','IEEE'],'status'=>'Published','year'=>'2025','link'=>'https://doi.org/10.1109/ICCMC65190.2025.11140712'],

  ['type'=>'Education','title'=>'Educational Institution Website','desc'=>'Institutional website with academic programs, campus information and administrative pages developed for an education institute.','tags'=>['WordPress','PHP','MySQL'],'status'=>'Live','year'=>'2024','link'=>'https://iitmglobal.in/'],

  ['type'=>'Web Portal','title'=>'Student Portal','desc'=>'Custom student portal developed using PHP and MySQL with login system, student dashboard and academic record management. (Private portal)','tags'=>['PHP','MySQL','HTML','CSS'],'year'=>'2024'],

  ['type'=>'Web Portal','title'=>'Result Management Portal','desc'=>'PHP-based result management system allowing administrators to publish and manage student examination results securely. (Private system)','tags'=>['PHP','MySQL','Database'],'year'=>'2024'],

  ['type'=>'Web Portal','title'=>'Attendance Management Portal','desc'=>'Custom attendance tracking portal developed in PHP with database integration for managing student attendance records. (Private system)','tags'=>['PHP','MySQL','Dashboard'],'year'=>'2024'],

];
?>

<div class="page-wrap">

  <div class="page-hero">
    <div class="badge" style="margin:0 auto 1.5rem">
      <span class="badge-dot"></span> <?= count($projects) ?> Projects &nbsp;·&nbsp; All Production-Grade
    </div>
    <h1><span class="grad-text">Projects</span> &amp; Work</h1>
    <p>Conference portals, college websites, client portals and IEEE research — delivered end-to-end.</p>
  </div>

  <section class="section">

    <div class="filter-bar reveal">
      <button class="f-btn active" data-f="all">All (<?= count($projects) ?>)</button>
      <button class="f-btn" data-f="Conference">Conference</button>
      <button class="f-btn" data-f="Education">Education</button>
      <button class="f-btn" data-f="Web Portal">Web Portal</button>
      <button class="f-btn" data-f="Research">Research</button>
    </div>

    <div class="proj-grid" id="projGrid">
      <?php foreach($projects as $i => $p):
        $sClass = strtolower($p['status'] ?? '') === 'live' ? 'tag-teal' : 'tag-amber';
      ?>
      <div class="glass-card proj-card reveal"
           data-type="<?= htmlspecialchars($p['type']) ?>"
           data-tilt
           data-delay="<?= ($i % 3) * 110 ?>"
           <?php if(isset($p['link'])): ?>
           onclick="window.open('<?= $p['link'] ?>','_blank')"
           style="cursor:pointer"
           <?php endif; ?>>

        <div class="proj-meta">
          <span class="micro-tag <?= strtolower($p['type'])==='conference'?'tag-violet':(strtolower($p['type'])==='education'?'tag-blue':(strtolower($p['type'])==='research'?'tag-amber':'tag-teal')) ?>">
            <?= htmlspecialchars($p['type']) ?>
          </span>
          <span class="proj-year"><?= $p['year'] ?></span>
        </div>

        <h3 class="proj-title"><?= htmlspecialchars($p['title']) ?></h3>
        <p class="proj-desc"><?= htmlspecialchars($p['desc']) ?></p>

        <div class="tags" style="margin-top:1.2rem">
          <?php foreach($p['tags'] as $t): ?>
          <span class="micro-tag"><?= htmlspecialchars($t) ?></span>
          <?php endforeach; ?>

          <?php if(isset($p['status'])): ?>
          <span class="micro-tag <?= $sClass ?>"><?= $p['status'] ?></span>
          <?php endif; ?>
        </div>

      </div>
      <?php endforeach; ?>
    </div>

    <div class="reveal" style="margin-top:3rem;text-align:center">
      <p style="font-size:0.8rem;color:var(--dim)">
        More projects being added. To see live demos —
        <a href="/contact.php" style="color:var(--blue)">get in touch →</a>
      </p>
    </div>

  </section>
</div>

<?php include 'includes/footer.php'; ?>

<script>
document.querySelectorAll('.f-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.f-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const f = btn.dataset.f;
    document.querySelectorAll('.proj-card').forEach(c => {
      c.style.display = (f === 'all' || c.dataset.type === f) ? '' : 'none';
    });
  });
});
</script>