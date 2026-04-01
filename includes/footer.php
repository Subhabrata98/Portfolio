<footer>
  <div class="footer-inner">
    <div>
      <div class="footer-logo">SK.</div>
      <div class="footer-tagline">Building systems that matter · Haldia, West Bengal</div>
    </div>

    <div class="footer-links">
      <a href="/about.php"    class="footer-link">About</a>
      <a href="/projects.php" class="footer-link">Projects</a>
      <a href="/research.php" class="footer-link">Research</a>
      <a href="/resume.php"   class="footer-link">Resume</a>
      <a href="/contact.php"  class="footer-link">Contact</a>
    </div>

    <div>
      <div class="footer-copy">© <?= date('Y') ?> Subhabrata Khara</div>

      <div class="footer-status">
        <span class="badge-dot"></span>
        Open to opportunities
      </div>

      <?php
      $counterFile = $_SERVER['DOCUMENT_ROOT'] . "/counter.txt";
      $ipFile = $_SERVER['DOCUMENT_ROOT'] . "/ip_log.txt";

      $ip = $_SERVER['REMOTE_ADDR'];

      if(!file_exists($counterFile)){
        file_put_contents($counterFile,"0");
      }

      if(!file_exists($ipFile)){
        file_put_contents($ipFile,"");
      }

      $ips = file($ipFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

      if(!in_array($ip,$ips)){

        $count = (int)file_get_contents($counterFile);
        $count++;

        file_put_contents($counterFile,$count,LOCK_EX);
        file_put_contents($ipFile,$ip.PHP_EOL,FILE_APPEND | LOCK_EX);

      }

      $count = (int)file_get_contents($counterFile);
      ?>

      <div class="footer-visitors" style="font-size:0.75rem;color:var(--dim);margin-top:6px;">
        👁 Visitors: <?= $count ?>
      </div>

    </div>
  </div>
</footer>

<script src="/js/global.js"></script>
<?= isset($extraJS) ? $extraJS : '' ?>
</body>
</html>