$(document).ready(function(){
    $('#search_button').click(function(){
        let wartosc = $('#liczba').val();
        $.ajax({
            var params = {
                "url": "https://nice-bartik.46-41-140-171.plesk.page/Backoffice/dodatki/inc/search.php",
                "method": "GET",
                "data": {
                    "liczba" : wartosc
                },
                statusCode: {
                    404: function(){
                        $('#wynik').fadeIn();
                        $('#wynik').html('Nie odnaleziono wybranej strony');
                    }
                },
            }
        })
    })
});