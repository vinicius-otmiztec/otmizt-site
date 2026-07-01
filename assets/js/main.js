gsap.registerPlugin(ScrollTrigger, SplitText, Flip, Observer, CustomEase);

CustomEase.create("otmEase", "M0,0 C0.16,0.84 0.44,1 1,1");
gsap.defaults({ ease: "otmEase" });

/* ---------- smooth scroll (Lenis) ---------- */
const lenis = new Lenis({ duration: 1.1, smoothWheel: true });
lenis.on("scroll", ScrollTrigger.update);
gsap.ticker.add((time) => lenis.raf(time * 1000));
gsap.ticker.lagSmoothing(0);

/* ---------- preloader ---------- */
window.addEventListener("load", () => {
  gsap.to("#preloader", {
    autoAlpha: 0,
    duration: 0.6,
    delay: 0.2,
    onComplete() {
      document.getElementById("preloader").style.display = "none";
      ScrollTrigger.refresh();
    },
  });
});

/* ---------- header behavior ---------- */
const header = document.getElementById("header");

ScrollTrigger.create({
  start: "top -40",
  end: 99999,
  toggleClass: { targets: header, className: "is-scrolled" },
});

Observer.create({
  target: window,
  type: "wheel,touch,scroll",
  tolerance: 8,
  onUp: () => header.classList.remove("is-hidden"),
  onDown: () => {
    if (window.scrollY > 200) header.classList.add("is-hidden");
  },
});

/* ---------- mobile nav ---------- */
const navToggle = document.getElementById("navToggle");
const nav = document.getElementById("nav");
navToggle.addEventListener("click", () => nav.classList.toggle("is-open"));
nav.querySelectorAll("a").forEach((a) =>
  a.addEventListener("click", () => nav.classList.remove("is-open"))
);

/* ---------- mega menu ---------- */
const megaTrigger = document.getElementById("megaMenuTrigger");
const megaMenu = document.getElementById("megaMenu");

if (megaTrigger && megaMenu) {
  function closeMegaMenu() {
    megaTrigger.setAttribute("aria-expanded", "false");
    megaMenu.classList.remove("is-open");
  }
  function toggleMegaMenu() {
    const opening = megaTrigger.getAttribute("aria-expanded") !== "true";
    megaTrigger.setAttribute("aria-expanded", String(opening));
    megaMenu.classList.toggle("is-open", opening);
  }

  megaTrigger.addEventListener("click", (e) => {
    e.stopPropagation();
    toggleMegaMenu();
  });
  document.addEventListener("click", (e) => {
    if (!megaMenu.contains(e.target) && !megaTrigger.contains(e.target)) closeMegaMenu();
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeMegaMenu();
  });
  megaMenu.querySelectorAll("a").forEach((a) => a.addEventListener("click", closeMegaMenu));
  lenis.on("scroll", () => {
    if (megaMenu.classList.contains("is-open")) closeMegaMenu();
  });
}

/* ---------- FAQ accordion ---------- */
document.querySelectorAll(".faq-item__q").forEach((btn) => {
  btn.addEventListener("click", () => {
    const item = btn.closest(".faq-item");
    const answer = item.querySelector(".faq-item__a");
    const opening = btn.getAttribute("aria-expanded") !== "true";

    if (opening) {
      btn.setAttribute("aria-expanded", "true");
      gsap.set(answer, { height: "auto" });
      const targetHeight = answer.offsetHeight;
      gsap.fromTo(answer, { height: 0, opacity: 0 }, { height: targetHeight, opacity: 1, duration: 0.4 });
    } else {
      btn.setAttribute("aria-expanded", "false");
      gsap.to(answer, { height: 0, opacity: 0, duration: 0.35 });
    }
  });
});

/* ---------- split text reveals ---------- */
document.fonts.ready.then(() => {
  document.querySelectorAll("[data-split]").forEach((el) => {
    const split = new SplitText(el, { type: "lines", mask: "lines" });
    gsap.from(split.lines, {
      yPercent: 110,
      duration: 1,
      stagger: 0.08,
      scrollTrigger: { trigger: el, start: "top 90%", once: true },
    });
  });
  ScrollTrigger.refresh();
});

/* ---------- hero: scroll-driven network scene ---------- */
const heroScene = document.querySelector(".hero__scene");

if (heroScene) {
  const lines = gsap.utils.toArray(".hn-line");
  const nodes = gsap.utils.toArray(".hn-node");

  lines.forEach((line) => {
    const length = line.getTotalLength();
    line.style.strokeDasharray = length;
    line.style.strokeDashoffset = length;
  });

  gsap.to(".hn-core-glow", {
    scale: 1.15,
    duration: 2.2,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut",
  });

  ScrollTrigger.matchMedia({
    "(min-width: 961px)": function () {
      gsap.set(nodes, { autoAlpha: 0, scale: 0.3 });
      gsap.set(".hn-core", { scale: 0.7 });
      gsap.set(".hn-core-glow", { opacity: 0, scale: 0.7 });

      const heroTl = gsap.timeline({
        scrollTrigger: {
          trigger: ".hero",
          start: "top top",
          end: "+=100%",
          pin: ".hero__pin",
          scrub: 1,
        },
      });

      heroTl
        .to(".hn-core", { scale: 1, duration: 0.5 }, 0)
        .to(".hn-core-glow", { opacity: 1, duration: 0.6 }, 0.1)
        .to(nodes, { autoAlpha: 1, scale: 1, stagger: 0.12, duration: 0.6 }, 0.15)
        .to(lines, { strokeDashoffset: 0, stagger: 0.12, duration: 0.8, ease: "none" }, 0.35)
        .to(".hn-core", { scale: 1.18, duration: 0.35 }, 1.1)
        .to(".hn-core", { scale: 1, duration: 0.3 }, 1.45);
    },
  });
}

/* ---------- transition scene: raios convergentes + linha de progresso ---------- */
const transitionScene = document.querySelector(".transition-scene");

if (transitionScene) {
  const rays = gsap.utils.toArray(".transition-ray");
  rays.forEach((ray) => {
    const length = ray.getTotalLength();
    ray.style.strokeDasharray = length;
    ray.style.strokeDashoffset = length;
  });
  gsap.set(".transition-point", { scale: 0 });

  gsap
    .timeline({
      scrollTrigger: {
        trigger: transitionScene,
        start: "top 85%",
        end: "bottom 65%",
        scrub: 1,
      },
    })
    .to(rays, { strokeDashoffset: 0, stagger: 0.1, ease: "none" }, 0)
    .to(".transition-point", { scale: 1, duration: 0.3 }, 0.6);

  const transitionDot = document.querySelector("[data-transition-dot]");
  if (transitionDot) {
    ScrollTrigger.create({
      trigger: ".transition-vline",
      start: "top 80%",
      end: "bottom 80%",
      scrub: true,
      onUpdate(self) {
        gsap.set(transitionDot, { top: `${self.progress * 100}%` });
      },
    });
  }
}

/* ---------- hero chart (páginas de solução): barras + play ---------- */
const heroBars = gsap.utils.toArray(".hero-chart__bars span");

if (heroBars.length) {
  gsap.set(heroBars, { scaleY: 0, transformOrigin: "bottom" });
  gsap.to(heroBars, {
    scaleY: 1,
    duration: 0.8,
    stagger: 0.08,
    delay: 0.3,
    scrollTrigger: { trigger: ".hero-chart__bars", start: "top 90%", once: true },
  });
}

/* ---------- generic reveal ---------- */
gsap.utils.toArray("[data-reveal]").forEach((el) => {
  gsap.from(el, {
    autoAlpha: 0,
    y: 24,
    duration: 0.8,
    scrollTrigger: { trigger: el, start: "top 88%", once: true },
  });
});

/* ---------- service cards: expand + Flip ---------- */
document.querySelectorAll(".service-card__toggle").forEach((btn) => {
  btn.addEventListener("click", () => {
    const card = btn.closest(".service-card");
    const detail = card.querySelector(".service-card__detail");
    const opening = btn.getAttribute("aria-expanded") !== "true";

    const state = Flip.getState(".service-card", { props: "height" });

    if (opening) {
      btn.setAttribute("aria-expanded", "true");
      gsap.set(detail, { height: "auto" });
      const targetHeight = detail.offsetHeight;
      gsap.fromTo(
        detail,
        { height: 0, opacity: 0 },
        { height: targetHeight, opacity: 1, duration: 0.5 }
      );
    } else {
      btn.setAttribute("aria-expanded", "false");
      gsap.to(detail, { height: 0, opacity: 0, duration: 0.4 });
    }

    Flip.from(state, { duration: 0.5, props: "height" });
  });
});

/* ---------- stats counters ---------- */
document.querySelectorAll(".stat__number").forEach((el) => {
  const target = parseFloat(el.dataset.count);
  const suffix = el.dataset.suffix || "";

  ScrollTrigger.create({
    trigger: el,
    start: "top 85%",
    once: true,
    onEnter() {
      const counter = { val: 0 };
      gsap.to(counter, {
        val: target,
        duration: 1.6,
        onUpdate() {
          el.textContent = Math.floor(counter.val) + suffix;
        },
      });
    },
  });
});

/* ---------- cases: pinned horizontal scroll ---------- */
const casesTrack = document.querySelector(".cases__track");

if (casesTrack) {
  ScrollTrigger.matchMedia({
    "(min-width: 681px)": function () {
      gsap.to(casesTrack, {
        x: () => -(casesTrack.scrollWidth - window.innerWidth + 64),
        ease: "none",
        scrollTrigger: {
          trigger: ".cases",
          start: "top top",
          end: () => "+=" + (casesTrack.scrollWidth - window.innerWidth + window.innerHeight),
          pin: true,
          scrub: 1,
          invalidateOnRefresh: true,
        },
      });
    },
  });
}

/* ---------- how we work: progress-driven steps ---------- */
const howSteps = gsap.utils.toArray(".how-step");
const howDots = gsap.utils.toArray(".how__dot");

if (howSteps.length) {
  gsap.set(howSteps, { autoAlpha: 0, y: 20 });
  gsap.set(howSteps[0], { autoAlpha: 1, y: 0 });
  if (howDots[0]) howDots[0].classList.add("is-active");

  let activeStep = 0;
  function setHowStep(index) {
    if (index === activeStep) return;
    gsap.to(howSteps[activeStep], { autoAlpha: 0, y: -20, duration: 0.35 });
    gsap.to(howSteps[index], { autoAlpha: 1, y: 0, duration: 0.35 });
    if (howDots[activeStep]) howDots[activeStep].classList.remove("is-active");
    if (howDots[index]) howDots[index].classList.add("is-active");
    activeStep = index;
  }

  ScrollTrigger.create({
    trigger: ".how",
    start: "top top",
    end: "+=300%",
    pin: ".how__pin",
    scrub: 1,
    onUpdate(self) {
      const idx = Math.min(howSteps.length - 1, Math.floor(self.progress * howSteps.length));
      setHowStep(idx);
    },
  });
}
