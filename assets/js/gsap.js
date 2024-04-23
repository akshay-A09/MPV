gsap.registerPlugin(ScrollTrigger);



const text_anim = gsap.timeline({
    scrollTrigger:{
        trigger: ".text_anim",
        start: "70% 30%",
        end:"+=60%",
        scrub: true,
        pin: true,
        pinSpacing: true
    }
});
text_anim.to(".text_anim",{
         duration: 3,
         opacity: 0.,
         scale: 1.8
})

// const slider = gsap.timeline({
//     scrollTrigger:{
//         trigger: ".slider",
//         start: "top 30%",
//         end:"+=100%",
//         scrub: true,
//         pin: true,
//         pinSpacing: true
//     }
// });
// slider.to(".slider",{
//     scale:0.8,
//     duration: 1,
//     y: "-30%",
// })

