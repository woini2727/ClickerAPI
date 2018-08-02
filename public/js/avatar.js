
$(document).ready(function(){
    $('#up').click(function(){
         $('#up').hide();   
    });   
    var readURL;
    readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
                $('.profile-pic').attr('height', '150px');
                $('.profile-pic').attr('width', '150px');
            }
    
            reader.readAsDataURL(input.files[0]);
        }
        }
    $("#but_upload").click(function(){
        
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);

        $.ajax({
            url: '/editar',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    //$("#img").attr("src",response);
                    //location.reload();
                    $('#file').hide();
                  $('#but_upload').hide();
                  $('#up').show();  
                }else{
                    $('#file').hide();
                  $('#but_upload').hide();
                  $('#up').show(); 
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

            alert("Error con la imagen");}
        });
       

    }); 
    

     $("#file").on('change', function(){
        readURL(this);


    });
 $("#up").click(function(){
        $('#file').show();
        $('#but_upload').show();
    });

});
