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