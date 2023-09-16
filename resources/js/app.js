import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);
let panels = gsap.utils.toArray(".panel");
let tops = panels.map((panel) =>
    ScrollTrigger.create({ trigger: panel, start: "top top" })
);
panels.forEach((panel, i) => {
    ScrollTrigger.create({
        trigger: panel,
        start: () =>
            panel.offsetHeight < window.innerHeight
                ? "top top"
                : "bottom bottom",
        pin: i === panels.length - 1 ? false : true,
        pinSpacing: false,
    });
});
//navegador
const $ = document.querySelector.bind(document);
const toggle = $(".nav__btn");
const nav = $(".nav");
const stripes = $(".stripes");

toggle.addEventListener("click", (_) => {
    nav.classList.toggle("visible");
    stripes.classList.toggle("visible");
});
//Progreso
let currentScroll = 0;
let isScrollingDown = true;
let tween = gsap
    .to(".marquee__part", {
        xPercent: -100,
        repeat: -1,
        duration: 20,
        ease: "linear",
    })
    .totalProgress(0.5);

gsap.set(".marquee__inner", { xPercent: -50 });

window.addEventListener("scroll", function () {
    if (window.pageYOffset > currentScroll) {
        isScrollingDown = true;
    } else {
        isScrollingDown = false;
    }

    gsap.to(tween, {
        timeScale: isScrollingDown ? 1 : -1,
    });

    currentScroll = window.pageYOffset;
});
const cursor = document.querySelector(".cursor");
window.addEventListener("mousemove", (e) => {
    cursor.style.left = e.pageX + "px";
    cursor.style.top = e.pageY + "px";
    cursor.setAttribute("data-fromTop", cursor.offsetTop - scrollY);
});
window.addEventListener("scroll", () => {
    const fromTop = cursor.getAttribute("data-fromTop");
    cursor.style.top = scrollY + parseInt(fromTop) + "px";
});
window.addEventListener("click", () => {
    if (cursor.classList.contains("click")) {
        cursor.classList.remove("click");
        void cursor.offsetWidth;
        // trigger a DOM reflow
        cursor.classList.add("click");
    } else {
        cursor.classList.add("click");
    }
});

//
var bigText = document.querySelector(".bigText");
var bigTextDiv = document.querySelector(".bigText div");
var bigTextImg = document.querySelector(".bigText img");
var bigTextSticker1 = document.querySelector(".bigText__sticker1");
var bigTextSticker2 = document.querySelector(".bigText__sticker2");
var bigTextSticker3 = document.querySelector(".bigText__sticker3");
var bigTextSticker4 = document.querySelector(".bigText__sticker4");

var bigTextTL = new gsap.timeline({
    scrollTrigger: {
        trigger: bigText,
        scrub: 1,
        pin: true,
        start: "top top",
        end: "bottom bottom",
        invalidateOnRefresh: true,
    },
});

bigTextTL.fromTo(
    bigTextDiv,
    { x: 0 },
    { x: () => -(bigTextDiv.offsetWidth - window.innerWidth), ease: "none" }
);
bigTextTL.fromTo(bigTextImg, { x: 0 }, { x: "-100%", ease: "none" }, 0);
bigTextTL.fromTo(bigTextSticker1, { x: 0 }, { x: "-100%", ease: "none" }, 0);
bigTextTL.fromTo(bigTextSticker2, { x: 0 }, { x: "-200%", ease: "none" }, 0);
bigTextTL.fromTo(bigTextSticker3, { x: 0 }, { x: "-200%", ease: "none" }, 0);
bigTextTL.fromTo(bigTextSticker4, { x: 0 }, { x: "-100%", ease: "none" }, 0);