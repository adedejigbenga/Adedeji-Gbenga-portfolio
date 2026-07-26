// ---------- year ----------
const yearEl = document.getElementById("year");
if (yearEl) yearEl.textContent = new Date().getFullYear();

// ---------- nav scroll state ----------
const nav = document.getElementById("nav");
const toTop = document.getElementById("toTop");

window.addEventListener("scroll", () => {
  const scrolled = window.scrollY > 20;
  if (nav) nav.classList.toggle("scrolled", scrolled);
  if (toTop) toTop.classList.toggle("show", window.scrollY > 500);
}, { passive: true });

if (toTop) {
  toTop.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
}

// ---------- mobile nav toggle ----------
const navToggle = document.getElementById("navToggle");
const navLinks = document.getElementById("navLinks");
if (navToggle && navLinks) {
  navToggle.addEventListener("click", () => navLinks.classList.toggle("open"));
  navLinks.querySelectorAll("a").forEach(a =>
    a.addEventListener("click", () => navLinks.classList.remove("open"))
  );
}

// ---------- active link on scroll (home page only) ----------
const sections = document.querySelectorAll("section[id], header[id]");
const links = document.querySelectorAll(".nav-links a[href^='#']");
if (sections.length && links.length) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        links.forEach(link => {
          link.classList.toggle("active", link.getAttribute("href") === `#${entry.target.id}`);
        });
      }
    });
  }, { rootMargin: "-45% 0px -50% 0px" });
  sections.forEach(s => observer.observe(s));
}

// ---------- scroll reveal ----------
const revealEls = document.querySelectorAll(".reveal");
if (revealEls.length) {
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("in");
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  revealEls.forEach((el, i) => {
    el.style.transitionDelay = `${Math.min(i % 6, 5) * 60}ms`;
    revealObserver.observe(el);
  });
}

// ---------- contact form -> mailto ----------
const contactForm = document.getElementById("contactForm");
if (contactForm) {
  contactForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const subject = document.getElementById("subject").value.trim() || "Portfolio inquiry";
    const message = document.getElementById("message").value.trim();

    const body = `Name: ${name}\nEmail: ${email}\n\n${message}`;
    const contactEmail = (typeof AGP_DATA !== "undefined" && AGP_DATA.contactEmail) || "Adedejigbenga56@gmail.com";
    const mailto = `mailto:${contactEmail}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    window.location.href = mailto;
  });
}
