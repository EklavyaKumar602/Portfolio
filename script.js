gsap.from(".logo",{
    y:-200,
    duration:2,
    delay:1,
    rotate:360,
    scale:0,
    yoyo:true
   
    
})
const scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true,
    lerp:0.03
});
