/* global.js — Subhabrata Khara Cosmic Portfolio */

/* ---- Particle network ---- */
(function() {
  const canvas = document.getElementById('particles');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let W, H, particles = [];
  const COLORS = ['#4f8ef7','#a855f7','#2dd4bf','#ec4899'];

  function resize() {
    W = canvas.width  = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener('resize', resize, {passive:true});

  class P {
    constructor() { this.reset(); }
    reset() {
      this.x  = Math.random() * W;
      this.y  = Math.random() * H;
      this.vx = (Math.random() - 0.5) * 0.28;
      this.vy = (Math.random() - 0.5) * 0.28;
      this.r  = Math.random() * 1.4 + 0.4;
      this.a  = Math.random() * 0.35 + 0.08;
      this.c  = COLORS[Math.floor(Math.random() * COLORS.length)];
    }
    update() {
      this.x += this.vx; this.y += this.vy;
      if (this.x < 0 || this.x > W || this.y < 0 || this.y > H) this.reset();
    }
    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
      ctx.fillStyle = this.c;
      ctx.globalAlpha = this.a;
      ctx.fill();
    }
  }

  for (let i = 0; i < 90; i++) particles.push(new P());

  function connections() {
    for (let i = 0; i < particles.length; i++) {
      for (let j = i + 1; j < particles.length; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const d  = Math.sqrt(dx*dx + dy*dy);
        if (d < 110) {
          ctx.beginPath();
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.strokeStyle = '#4f8ef7';
          ctx.globalAlpha = (1 - d/110) * 0.07;
          ctx.lineWidth   = 0.5;
          ctx.stroke();
        }
      }
    }
  }

  function animate() {
    ctx.clearRect(0, 0, W, H);
    particles.forEach(p => { p.update(); p.draw(); });
    connections();
    ctx.globalAlpha = 1;
    requestAnimationFrame(animate);
  }
  animate();
})();

/* ---- 3D tilt on glass cards ---- */
function initTilt() {
  document.querySelectorAll('[data-tilt]').forEach(card => {
    card.addEventListener('mousemove', e => {
      const r  = card.getBoundingClientRect();
      const rx = ((e.clientY - r.top)  / r.height - 0.5) * -14;
      const ry = ((e.clientX - r.left) / r.width  - 0.5) *  14;
      card.style.transform = `perspective(900px) rotateX(${rx}deg) rotateY(${ry}deg) translateY(-6px)`;
    });
    card.addEventListener('mouseleave', () => { card.style.transform = ''; });
  });
}
initTilt();

/* ---- Scroll reveal ---- */
const revealObs = new IntersectionObserver(entries => {
  entries.forEach((e, i) => {
    if (!e.isIntersecting) return;
    const delay = +(e.target.dataset.delay || i * 90);
    setTimeout(() => e.target.classList.add('visible'), delay);
    revealObs.unobserve(e.target);
  });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));

/* ---- Animated counters ---- */
function runCounter(el) {
  const target  = parseFloat(el.dataset.count);
  const suffix  = el.dataset.suffix || '';
  const isFloat = (target % 1) !== 0;
  const steps   = 60; let cur = 0, n = 0;
  const inc = target / steps;
  const iv  = setInterval(() => {
    cur += inc; n++;
    el.textContent = (isFloat ? Math.min(cur,target).toFixed(1) : Math.floor(Math.min(cur,target))) + suffix;
    if (n >= steps) { el.textContent = (isFloat ? target.toFixed(1) : target) + suffix; clearInterval(iv); }
  }, 22);
}
const cntObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (!e.isIntersecting) return;
    runCounter(e.target);
    cntObs.unobserve(e.target);
  });
}, { threshold: 0.5 });
document.querySelectorAll('[data-count]').forEach(el => cntObs.observe(el));

/* ---- Hamburger ---- */
const hamburger = document.getElementById('hamburger');
const navLinks  = document.getElementById('navLinks');
if (hamburger) {
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    navLinks.classList.toggle('open');
  });
}

/* ---- Nav backdrop on scroll ---- */
const mainNav = document.getElementById('mainNav');
window.addEventListener('scroll', () => {
  if (!mainNav) return;
  if (window.scrollY > 80) {
    mainNav.style.background = 'rgba(6,8,15,0.85)';
  } else {
    mainNav.style.background = 'rgba(255,255,255,0.05)';
  }
}, { passive: true });
