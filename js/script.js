$(document).ready(function () {
    $('.exit').click(function (e) {
        e.preventDefault();
        $(this).parent().removeClass('active');
    })
    $('.humburger').click(function (e) {
        e.preventDefault();
        $('.nav-list').addClass('active');
    })
    $('.header .nav-list ul li a').click(function () {
        $('.nav-list').removeClass('active');
    })
    $(function(){$("a[href*='#']:not([href='#'])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=$(this.hash);if(t=t.length?t:$("[name="+this.hash.slice(1)+"]"),t.length)return $("html,body").animate({scrollTop:t.offset().top},1000),!1}})});

    // $('form').submit(function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         type: "POST",
    //         url: "send.php",
    //         data: $(this).serialize(),
    //         complete: function(response) {
    //             //console.log(response); // ответ аякса
    //             //alert('Сообщение отправлено!');
    //             // tran
    //
    //         },
    //     });
    // })

})
