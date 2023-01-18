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

