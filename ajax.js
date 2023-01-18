$(function () {

    $.ajax({
        url: 'DB-php/getmudrolije.php',
        success: function (mudrolije) {
            {
                $('.div-mudrolije').html(mudrolije);
            }
        }
    }
    )

});


$(".slike").click(function () {

    $.ajax({
        url: 'DB-php/sortmudrolije.php',
        method: 'post',
        data: { up_or_down: $(this).attr('id') },
        success: function (mudrolije) {
            {
                $('.div-mudrolije').html(mudrolije);
            }
        }
    }
    )
});


$("#naslov_user_pretraga").keypress(function () {

    $.ajax({
        url: 'DB-php/pretrazimudrolije.php',
        method: 'post',
        data: { naslov_username: $(this).val() },
        success: function (mudrolije) {
            {
                $('.div-mudrolije').html(mudrolije);
            }
        }
    }
    )
});

