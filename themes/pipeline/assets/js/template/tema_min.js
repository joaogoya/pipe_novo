$(".fixed-mobile-menu").hide(),$(document).ready(function(){$(window).scroll(function(){768<=$(window).scrollTop()?$(".fixed-mobile-menu").fadeIn("slow"):(console.log("fecha"),$(".fixed-mobile-menu").fadeOut("slow"))}),$(".smooth").on("click",function(event){if(""!==this.hash){event.preventDefault();var hash=this.hash;$("html, body").animate({scrollTop:$(hash).offset().top},800,function(){window.location.hash=hash})}}),$(".antes-depois").owlCarousel({loop:!0,nav:!0,animateOut:"fadeOut",items:1,navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"]})}),ScrollReveal().reveal(".slideup",{distance:"30%",origin:"bottom",opacity:0,duration:2500}),ScrollReveal().reveal(".sliderigth",{distance:"30%",origin:"left",opacity:0,duration:1500}),ScrollReveal().reveal(".d-5",{delay:500}),ScrollReveal().reveal(".d-8",{delay:800}),ScrollReveal().reveal(".d-11",{delay:1100}),ScrollReveal().reveal(".d-14",{delay:1400}),ScrollReveal().reveal(".d-17",{delay:1700}),$(".navbar-nav>li>a").on("click",function(){$(".navbar-collapse").collapse("hide")});var ambiente=window.location.host;$local="http://localhost/dama",$homolog="http://pipeline-digital.com.br/homolog/dama",$prod="https://planodesaudesegurar.com.br";var base_url="";switch(ambiente){case"localhost":base_url=$local;break;case"pipeline-digital.com.br":base_url=$homolog;break;case"planodesaudesegurar.com.br":base_url=$prod}var evento="";evento=ambiente==$prod?"wpcf7mailsent":"wpcf7submit";var wpcf7Elm=document.querySelector(".wpcf7");wpcf7Elm&&(console.log(evento),wpcf7Elm.addEventListener(evento,function(event){window.location.replace(base_url+"/contato/")},!1));