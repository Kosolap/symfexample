/**
 * Created by kosolap on 06.09.16.
 */


$( document ).ready(function() {
    console.log( $('#blabla option:selected' ).text() );

    $.ajax({
        url: '../reason',
        data: {'type':$('#blabla option:selected' ).text()},
        success: function(data){


            for(i=0 ; i < data.length; i++){
                console.log(i);
                var myObj = JSON.parse(data[i]);
                $('#resultTable tbody').append('<tr class="lll"><td>'+myObj.text+'</td><td>'+myObj.type+'</td></tr>');
            }


        },
        dataType: 'json',
        async: false
    });


    $("#blabla").change(function(){

        $.ajax({
            url: '../reason',
            data: {'type':$('#blabla option:selected' ).text()},
            success: function(data){

                $(".lll").remove();

                for(i=0 ; i < data.length; i++){
                    console.log(i);
                    var myObj = JSON.parse(data[i]);
                    $('#resultTable tbody').append('<tr class="lll"><td>'+myObj.text+'</td><td>'+myObj.type+'</td></tr>');
                }


            },
            async: false
        });

    });


});