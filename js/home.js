/* home.js */
const roles = [
  'MTech CSE Graduate',
  'Freelance AI Web Developer',
  'WordPress & CMS Expert',
  'Assistant Professor @ IFSE',
  'IEEE Published Research',
  'Google Cloud Practitioner',
];
let ri = 0, ci = 0, del = false;
const el = document.getElementById('typingText');

function type() {
  if (!el) return;
  const word = roles[ri];
  if (!del) {
    el.textContent = word.slice(0, ++ci);
    if (ci === word.length) { del = true; setTimeout(type, 1800); return; }
  } else {
    el.textContent = word.slice(0, --ci);
    if (ci === 0) { del = false; ri = (ri + 1) % roles.length; }
  }
  setTimeout(type, del ? 42 : 76);
}
setTimeout(type, 1300);
