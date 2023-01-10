

function localizacao(local) {
    setTimeout (function(){
        window.location.href=local
        var ex = document.getElementById('portfolio')
        console.log(ex.scrollTop)
        ex.scrollTo(0,100)
        ex.scrollBy(0,100)
        ex.scrollTop = 100
        console.log(ex.scrollTop)
    
    }, 300)

}
    
/*var myCollapsible = document.getElementById('offcanvasNavbar')

myCollapsible.addEventListener('hide.bs.offcanvas', function() {
    console.log("apareceu")
    
    //document.getElementById('main').style.transform='translate(0, 4vh)';
})
*/


// $('#collapse-navbar').on('hide.bs.collapse', function(){
//     $('.topCasaFina-banner').css('transform', 'translate(-50%, -50%)');
// });;


