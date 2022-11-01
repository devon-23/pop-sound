$(document).ready(function() {
   $('ul.year li').click(function(e) { 
    console.log(e.target.innerText)
   });
});