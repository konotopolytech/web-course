$(document).ready(function(){
    $('form button').addClass('btn');

    $('#menu-items li:nth-child(2)').addClass('btn li-item');    

    $('.btn').click(function(e){
        e.preventDefault();
        alert("Спрацював клік на елементі \"" + $(this).prop("tagName") + "\" що містить текст \"" + $(this).text());

        $('#menu-items li:nth-child(2)').removeClass('li-item');    
    });
    
    $('#toggle').click(function(e) {
        if($(this).text() === 'Hide') {
            $('.stage:nth-child(1)').attr('id', 'hidden-stage');
            $(this).text('Show');
            $('#hidden-stage').fadeOut(2500);
        } else {
            $(this).text('Hide');
            $('#hidden-stage').attr('id', 'shown-stage');
            $('#shown-stage').fadeIn(2500);
        }
    });

    $('#slider').click(function(e){
        if($('#title').css("margin-top") === "50px") {
            $('#title').animate({
                'margin-top': '-55px'
            }, 3000);
        } else if ($('#title').css("margin-top") === "-55px") {
            $('#title').animate({
                'margin-top': '50px'
            }, 3000);
        }
    });

    $(".stage:nth-child(1) > h2").after($("<h5>I have been built in</h5>"));
    $(".stage:nth-child(2) > h2").text("I'm new text");
    

    $('#menu-items li:nth-child(3)').click(function(e){
        var aTag = $("#anchor-three");
        $('html,body').animate({scrollTop: aTag.offset().top},'slow');
    });
});
