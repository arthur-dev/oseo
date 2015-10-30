/**
 * Created by arthur on 16/10/15.
 */
$(window).scroll(function(){
    if ($(window).scrollTop()>50)
    {
        $('#princ').attr('style','background-color:white; opacity: 0.95; border-bottom: 1px solid  rgb(246,246,251)');
       // $('nav a').attr('style','color:#78909c; ');
        //$('#logot').attr('style','color:#4caf50; ');

        /*$( "#princ" ).animate({
         opacity: 0.8,

         backgroundColor: '#ffffff'
         }, 1000, function() {
         // Animation complete.
         });
         */
    }
    else
    {
        $('#princ').attr('style','background-color:none;');
        //$('nav a').attr('style','color:white; ');
       // $('#logot').attr('style','color:white; ');
    }
});


$('#btntarif').click(function(){
    $('#tarif').modal('show');
});
$('#signin').click(function(){
    $('#tarif').modal('show');
});




var situation=0;

$('#yes').click(function(){

    if (situation==3)
    {
        situation=4;
        $('#question').fadeOut(500);
        setTimeout(function(){
            $('#question').html("Nous avons une solution pour vous <br><br>");
            $('#question').fadeIn(500);
        },500);
        $('#btnform').attr("style","visibility:hidden;");

        setTimeout(function(){
            window.location = "formation_woocommerce.html";
        },2000);
    }
    if (situation==2)
    {
        situation=3;
        $('#question').fadeOut(500);
        setTimeout(function(){
            $('#question').html("Est-ce un wordpress ?");
            $('#question').fadeIn(500);
        },500);
    }

    if (situation==1)
    {
        situation=2;
        $('#question').fadeOut(500);
        setTimeout(function(){
            $('#question').html("Avez-vous déjà un site internet ?");
            $('#question').fadeIn(500);
        },500);
    }
    if (situation==0)
    {
        situation=1;
        $('#question').fadeOut(500);
        setTimeout(function(){
            $('#question').html("Désirez-vous vous former au e-Commerce ?");
            $('#question').fadeIn(500);
        },500);
    }


})

$('#no').click(function(){

    if (situation==3)
    {
        situation=4;
        $('#question').fadeOut(500);
        setTimeout(function(){
            $('#question').html("Nous avons une solution pour vous <br><br>");
            $('#question').fadeIn(500);
        },500);
        $('#btnform').attr("style","visibility:hidden;");
        setTimeout(function(){
            window.location = "formation_prestashop.html";
        },2000);
    }
    if (situation==2)
    {
        situation=4;
        $('#question').fadeOut(500);
        setTimeout(function(){
            $('#question').html("Nous avons une solution pour vous <br><br>");
            $('#question').fadeIn(500);
        },500);
        $('#btnform').attr("style","visibility:hidden;");
        setTimeout(function(){
            window.location = "formation_prestashop.html";
        },2000);
    }

    if (situation==1)
    {
        situation=5;
        $('#question').fadeOut(500);
        setTimeout(function(){
            $('#question').html("Nous n’avons pas de formation à vous proposer.<br> Sachez que 700 millions de transaction se font en ligne chaque année et que 70% des internautes achètent en ligne. <br><br><br>Pour quitter, cliquez sur la flèche en haut à droite");
            $('#question').fadeIn(500);
            $('#btnform').attr("style","visibility:hidden;");

        },500);


    }
    if (situation==0)
    {
        situation=5;
        $('#question').fadeOut(500);
        setTimeout(function(){
            $('#question').html("Nous n’avons pas de formation à vous proposer.<br> Sachez que 700 millions de transaction se font en ligne chaque année et que 70% des internautes achètent en ligne.<br><br><br>Pour quitter, cliquez sur la flèche en haut à droite");
            $('#question').fadeIn(500);
            $('#btnform').attr("style","visibility:hidden;");

        },500);


    }


});

$('#testjeubtn').click(function(){
    $('#testjeu').modal('show');
});

$('#logot').click(function(){
    document.location.href="../index.php"
});