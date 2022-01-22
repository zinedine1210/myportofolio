function Copy_Link(){
  const link = document.getElementById('link') ;
  link.select()
  document.execCommand('copy')
  Swal.fire({         //displays a pop up with sweetalert
                  icon: 'success',
                  title: 'Copied',
                  showConfirmButton: false,
                  timer: 2000
              });

}

function back(){
  window.history.back();
}

// AOS
AOS.init({
  duration: 1000
});
// Akhir AOS

// GSAP
gsap.registerPlugin(TextPlugin);

gsap.from('.hero', {
  duration : 3,
  text: ''
});
gsap.from('.jumbotron .display-5', {
  duration: 2,
  x: -100,
  ease: "elastic"
})
gsap.from('.card-title', {
  duration: 2,
  opacity: 0,
  x: 100,
  ease: "elastic"
})
gsap.from(".navbar", {
  duration: 1,
  y: -50,
  ease: "bounce"
})
gsap.from('.your', {
  delay: 1,
  duration : 3,
  opacity:0, 
  text: ''
})
gsap.from('.text1', {
  duration : 3,
  text: ''
})
gsap.from('.text2', {
  delay:3,
  duration : 4,
  text: ''
})
// AKHIR GSAP

