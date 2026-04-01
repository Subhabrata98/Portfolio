<?php
$pageTitle = 'Contact';
$pageDesc  = 'Get in touch with Subhabrata Khara.';
$extraCSS  = '<link rel="stylesheet" href="/css/contact.css">';

/* ============================================================
   MAIL CONFIGURATION — edit these values only
   ============================================================
   GMAIL SETUP (one-time, 2 minutes):
   1. Go to: https://myaccount.google.com/security
   2. Enable "2-Step Verification" if not already on
   3. Search "App passwords" → create one → name it "Portfolio"
   4. Copy the 16-character password shown (e.g. abcd efgh ijkl mnop)
   5. Remove spaces and paste it into GMAIL_APP_PASSWORD below
   ============================================================ */
define('MAIL_FROM',    '20subhabratakhara14@gmail.com');
define('MAIL_NAME',    'Subhabrata Khara Portfolio');
define('GMAIL_PASS',   'nwcc cenp onjp ielc');
define('MAIL_TO',      '20subhabratakhara14@gmail.com');

$sent  = false;
$error = '';

function sendContactMail($name, $replyEmail, $subject, $body) {
  // --- PHPMailer via Gmail SMTP (most reliable) ---
  $pmPath = __DIR__ . '/libs/PHPMailer/PHPMailer.php';
  if (file_exists($pmPath)) {
    require_once __DIR__ . '/libs/PHPMailer/Exception.php';
    require_once $pmPath;
    require_once __DIR__ . '/libs/PHPMailer/SMTP.php';
    try {
      $mail = new PHPMailer\PHPMailer\PHPMailer(true);
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = MAIL_FROM;
      $mail->Password   = GMAIL_PASS;
      $mail->SMTPSecure = 'tls';
      $mail->Port       = 587;
      $mail->setFrom(MAIL_FROM, MAIL_NAME);
      $mail->addAddress(MAIL_TO);
      $mail->addReplyTo($replyEmail, $name);
      $mail->Subject = "Portfolio Contact: $subject — from $name";
      $mail->Body    = $body;
      $mail->send();
      return true;
    } catch (Exception $e) { /* fall through */ }
  }

  // --- Fallback: native mail() ---
  $headers  = "From: " . MAIL_NAME . " <" . MAIL_FROM . ">\r\n";
  $headers .= "Reply-To: $name <$replyEmail>\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  return mail(MAIL_TO, "Portfolio Contact: $subject — from $name", $body, $headers);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name       = strip_tags(trim($_POST['name']    ?? ''));
  $replyEmail = trim($_POST['email']   ?? '');
  $subject    = strip_tags(trim($_POST['subject'] ?? 'New Message'));
  $message    = strip_tags(trim($_POST['message'] ?? ''));

  if (!$name || !$replyEmail || !$message) {
    $error = 'Please fill in all required fields (Name, Email, Message).';
  } elseif (!filter_var($replyEmail, FILTER_VALIDATE_EMAIL)) {
    $error = 'Please enter a valid email address.';
  } elseif (strlen($message) < 10) {
    $error = 'Please write a bit more in your message.';
  } else {
    $body =
      "You received a new message from your portfolio contact form.\n\n" .
      "Name:    $name\n" .
      "Email:   $replyEmail\n" .
      "Subject: $subject\n\n" .
      "Message:\n$message\n\n" .
      "---\nReply to this email to respond directly to $name.";

    if (sendContactMail($name, $replyEmail, $subject, $body)) {
      $sent = true;
    } else {
      $error = 'Mail could not be sent right now. Please email me directly at 20subhabratakhara14@gmail.com';
    }
  }
}

include 'includes/header.php';
?>

<div class="page-wrap">

  <div class="page-hero">
    <div class="badge" style="margin:0 auto 1.5rem">
      <span class="badge-dot"></span> Open to projects, roles &amp; collaborations
    </div>
    <h1>Get In <span class="grad-text">Touch</span></h1>
    <p>Whether it's a freelance project, teaching opportunity, research collaboration, or full-time role — let's talk.</p>
  </div>

  <section class="section">
    <div class="contact-layout">

      <!-- Info col -->
      <div class="reveal">
        <p class="sec-label">Direct Channels</p>
        <h2 class="sec-title" style="font-size:1.6rem;margin-bottom:2rem">Let's connect</h2>

        <div class="contact-cards">
          <a href="mailto:20subhabratakhara14@gmail.com" class="contact-card glass-card">
            <div class="cc-icon icon-blue">✉</div>
            <div>
              <div class="cc-lbl">Email</div>
              <div class="cc-val">20subhabratakhara14@gmail.com</div>
            </div>
          </a>
          <a href="tel:+917602624410" class="contact-card glass-card">
            <div class="cc-icon icon-teal">#</div>
            <div>
              <div class="cc-lbl">Phone</div>
              <div class="cc-val">+91 76026 24410</div>
            </div>
          </a>
          <a href="https://linkedin.com/in/subhabrata-khara" target="_blank" class="contact-card glass-card">
            <div class="cc-icon icon-violet">in</div>
            <div>
              <div class="cc-lbl">LinkedIn</div>
              <div class="cc-val">linkedin.com/in/subhabrata-khara</div>
            </div>
            
            <a href="https://github.com/Subhabrata98" target="_blank" class="contact-card glass-card">
  <div class="cc-icon icon-violet" style="display:flex;align-items:center;justify-content:center">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.868-.013-1.703-2.782.604-3.369-1.341-3.369-1.341-.454-1.154-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836a9.59 9.59 0 012.504.337c1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.202 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.163 22 16.418 22 12c0-5.523-4.477-10-10-10z"
        fill="rgba(232,234,240,0.85)"/>
    </svg>
  </div>
  <div>
    <div class="cc-lbl">GitHub</div>
    <div class="cc-val">github.com/Subhabrata98</div>
  </div>
</a>
        </div>

        <div class="avail-card glass-card" style="margin-top:2rem">
          <div style="display:flex;align-items:center;gap:0.6rem;font-weight:600;margin-bottom:1rem;font-size:0.88rem">
            <span class="badge-dot"></span> Current Availability
          </div>
          <ul class="avail-list">
            <li>Freelance web development projects</li>
            <li>WordPress / CMS consulting</li>
            <li>Research collaborations (IoT, Security)</li>
            <li>Academic &amp; tutoring opportunities</li>
            <li>Full-time CSE / Web / Research roles</li>
          </ul>
        </div>

        <div style="margin-top:1.5rem;padding:1rem 1.2rem;background:rgba(45,212,191,0.05);border:1px solid rgba(45,212,191,0.15);border-radius:12px;font-size:0.78rem;color:var(--muted)">
          <span style="color:var(--teal);font-weight:600">⚡ Response time:</span>
          Usually within 24 hours. For urgent matters, call or email directly.
        </div>
      </div>

      <!-- Form col -->
      <div class="reveal" data-delay="150">

        <?php if ($sent): ?>
        <div class="success-box glass-card">
          <div style="font-size:2.5rem;margin-bottom:1rem">✅</div>
          <h3 style="font-weight:600;font-size:1.2rem;margin-bottom:0.6rem">Message Sent!</h3>
          <p style="font-size:0.85rem;color:var(--muted);line-height:1.8">
            Thanks for reaching out, <strong style="color:var(--text)"><?= htmlspecialchars($name) ?></strong>!
            I've received your message and will reply to
            <strong style="color:var(--teal)"><?= htmlspecialchars($replyEmail) ?></strong>
            within 24 hours.
          </p>
          <a href="/contact.php" class="btn-outline" style="margin-top:1.5rem;display:inline-block">Send Another →</a>
        </div>

        <?php else: ?>

        <?php if ($error): ?>
        <div class="form-error">⚠ <?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST" action="/contact.php" class="contact-form" novalidate>
          <div class="fg">
            <label class="fl" for="name">Full Name *</label>
            <input type="text" id="name" name="name" class="fi"
              placeholder="Your full name"
              value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
              required maxlength="100">
          </div>
          <div class="fg">
            <label class="fl" for="email">Email Address *</label>
            <input type="email" id="email" name="email" class="fi"
              placeholder="your@email.com"
              value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
              required>
          </div>
          <div class="fg">
            <label class="fl" for="subject">Subject</label>
            <input type="text" id="subject" name="subject" class="fi"
              placeholder="Freelance project / Collaboration / Job..."
              value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>"
              maxlength="150">
          </div>
          <div class="fg">
            <label class="fl" for="message">Message *</label>
            <textarea id="message" name="message" class="fi fi-ta"
              placeholder="Tell me about your project, opportunity, or question..."
              required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
          </div>
          <button type="submit" class="btn-glass"
            style="width:100%;padding:1rem;font-size:0.88rem;border:none;cursor:pointer;font-family:'Space Grotesk',sans-serif;font-weight:600">
            Send Message →
          </button>
          <p style="font-size:0.7rem;color:var(--dim);text-align:center;margin-top:0.8rem">
            Your message goes directly to my inbox. I never share your details.
          </p>
        </form>

        <?php endif; ?>
      </div>

    </div>
  </section>
</div>

<?php include 'includes/footer.php'; ?>
