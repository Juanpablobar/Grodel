$(document).ready(function() {

	//Botón de acción del acordeón
	$('#menuToggle').click(function() {
        $('#menusuper').removeClass('menutoggle');
        $('#menusuper').addClass('menutoggle-sub-final');
        $('.menutoggletrans').css('display', 'block');
        $('.menu-close').css('display', 'block');
        
    });
    $('.menu-close').click(function() {
        $('#menusuper').removeClass('menutoggle-sub-final');
        $('#menusuper').addClass('menutoggle');       $('.menutoggletrans').css('display', 'none');
        $('.menu-close').css('display', 'none');
        $('#menutoggle-sub2').removeClass('menutoggle3');
        $('#menutoggle-sub2').addClass('menutoggle2'); 
        $('#menutoggle-sub3').removeClass('menutoggle3');
        $('#menutoggle-sub3').addClass('menutoggle2');
        $('#menutoggle-sub4').removeClass('menutoggle3');
        $('#menutoggle-sub4').addClass('menutoggle2');
        $('#menutoggle-sub5').removeClass('menutoggle3');
        $('#menutoggle-sub5').addClass('menutoggle2');
        $('#menutoggle-sub6').removeClass('menutoggle3');
        $('#menutoggle-sub6').addClass('menutoggle2');
        $('#menutoggle-sub7').removeClass('menutoggle3');
        $('#menutoggle-sub7').addClass('menutoggle2');
        $('#menutoggle-sub8').removeClass('menutoggle3');
        $('#menutoggle-sub8').addClass('menutoggle2');
        $('#menutoggle-sub9').removeClass('menutoggle3');
        $('#menutoggle-sub9').addClass('menutoggle2');
        $('#menutoggle-sub10').removeClass('menutoggle3');
        $('#menutoggle-sub10').addClass('menutoggle2');
    });
    $('#products').click(function() {
        $('#menutoggle-sub2').removeClass('menutoggle2');
        $('#menutoggle-sub2').addClass('menutoggle3');       

    });
    $('#prev1').click(function() {
        $('#menutoggle-sub2').removeClass('menutoggle3');
        $('#menutoggle-sub2').addClass('menutoggle2');       

    });
    $('#Morder').click(function() {
        $('#menutoggle-sub3').removeClass('menutoggle2');
        $('#menutoggle-sub3').addClass('menutoggle3');       

    });
    $('#prev2').click(function() {
        $('#menutoggle-sub3').removeClass('menutoggle3');
        $('#menutoggle-sub3').addClass('menutoggle2');       

    });
    $('#Sintong').click(function() {
        $('#menutoggle-sub4').removeClass('menutoggle2');
        $('#menutoggle-sub4').addClass('menutoggle3');       

    });
    $('#prev3').click(function() {
        $('#menutoggle-sub4').removeClass('menutoggle3');
        $('#menutoggle-sub4').addClass('menutoggle2');       

    });
    $('#ExBorders').click(function() {
        $('#menutoggle-sub5').removeClass('menutoggle2');
        $('#menutoggle-sub5').addClass('menutoggle3');       

    });
    $('#prev4').click(function() {
        $('#menutoggle-sub5').removeClass('menutoggle3');
        $('#menutoggle-sub5').addClass('menutoggle2');       

    });
    $('#tools').click(function() {
        $('#menutoggle-sub6').removeClass('menutoggle2');
        $('#menutoggle-sub6').addClass('menutoggle3');       

    });
    $('#prev5').click(function() {
        $('#menutoggle-sub6').removeClass('menutoggle3');
        $('#menutoggle-sub6').addClass('menutoggle2');       

    });
    $('#Conectores').click(function() {
        $('#menutoggle-sub7').removeClass('menutoggle2');
        $('#menutoggle-sub7').addClass('menutoggle3');       

    });
    $('#prev6').click(function() {
        $('#menutoggle-sub7').removeClass('menutoggle3');
        $('#menutoggle-sub7').addClass('menutoggle2');       

    });
    $('#Accesorios').click(function() {
        $('#menutoggle-sub8').removeClass('menutoggle2');
        $('#menutoggle-sub8').addClass('menutoggle3');       

    });
    $('#prev7').click(function() {
        $('#menutoggle-sub8').removeClass('menutoggle3');
        $('#menutoggle-sub8').addClass('menutoggle2');       

    });
    $('#Componentes').click(function() {
        $('#menutoggle-sub9').removeClass('menutoggle2');
        $('#menutoggle-sub9').addClass('menutoggle3');       

    });
    $('#prev8').click(function() {
        $('#menutoggle-sub9').removeClass('menutoggle3');
        $('#menutoggle-sub9').addClass('menutoggle2');       

    });
    $('#Herramientas').click(function() {
        $('#menutoggle-sub10').removeClass('menutoggle2');
        $('#menutoggle-sub10').addClass('menutoggle3');       

    });
    $('#prev9').click(function() {
        $('#menutoggle-sub10').removeClass('menutoggle3');
        $('#menutoggle-sub10').addClass('menutoggle2');       

    });

});
