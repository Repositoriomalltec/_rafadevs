$(() => {
    AOS.init({
        duration: 1500
    });

    $('.parallax').scroll(function () {
        if ($(this).scrollTop() >= 50)
            $('#return-to-top').fadeIn(250);
        else
            $('#return-to-top').fadeOut(250);
    });
    $('#return-to-top').click(() => {
        $('.parallax').animate({
            scrollTop: 0
        }, 500);
    });
    scrollTo = function (a) {
        var c = a.attr('href');
        var d = window.innerHeight;
        if ($(window).scrollTop() != d) {
            $('.parallax').stop().animate({
                scrollTop: d
            }, 2000);
        }
    };
    $('.btn-down').on('click', function (e) {
        e.preventDefault();
        scrollTo($(this));
    });

    $('form#contato').submit(function (e) {
        e.preventDefault();
        var dados = $(this).serialize();
        $.ajax({
            url: 'https://rafaela.tech/enviar',
            type: "POST",
            dataType: "json",
            data: dados,
            success: function (data) {
                if (data.aviso === 1) {
                    $('.resp').empty().html(data.mensagem)
                } else {
                    $('.resp').empty().html(data.mensagem)
                }
            },
            beforeSend: function () {
                $('.resp').empty().html('<p><i class="fa fa-spinner fa-spin"></i></p>')
            },
            complete: function () {},
            error: function (e) {
                alert("Ocorreu um erro ao carregar os dados.")
            }
        });
        return false
    })
});
