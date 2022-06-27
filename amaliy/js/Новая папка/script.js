$('document').ready(function(){
    var project= $('#prch');
    var happy= $('#happy');
    var team= $('#team');
    var award= $('#award');
    var a = 0;
    project.text(a);
    happy.text(a);
    team.text(a);
    award.text(a);
        function oshirish() {
            a++; 
        if (a < 848) {
            project.text(a);
        }
        if (a < 754){
            happy.text(a);
        }
        if (a < 284){
            team.text(a);
        }
        if (a < 98){
            award.text(a);
        }
            if (a > 848) {
                clearInterval(f);
            }
        }
        
       
        var f=setInterval(oshirish, 1);
        
    var c = $('#carousel');
    var left = 0;
    $('#next').click(function() {
        function a(){
               left += 950;
        c.css('left' , left);
        }
     
        setInterval(a, 1000);
    })

    
    $('#prev').click(function() {
        left -= 950;
        c.css('left',left + ".px");
        console.log(left);

    })
    // $(".owl-carousel").owlCarousel();
    $('.loop').owlCarousel({
        center: true,
        items:2,
        loop:true,
        margin:10,
        responsive:{
            600:{
                items:4
            }
        }
    });
    $('.nonloop').owlCarousel({
        center: true,
        items:2,
        loop:false,
        margin:10,
        responsive:{
            600:{
                items:4
            }
        }
    });
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
});