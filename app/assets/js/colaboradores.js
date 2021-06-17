$( document ).ready(function() {
    $('.close-modal-users-edit').on('click', function(){
        $('#modal-edit-user').modal('toggle');
    })

    $('#edit-btn-list').on('click', function(){
        let id_user = $(this).data('id')
        let  url = $('#base_url').val();
        
        $('#loading-bg').fadeIn('fast')
        $.ajax({
            url: url+'colaboradores/get-user',
            method: 'POST',
            dataType: 'json',
            data: {id: id_user},
            success: function(json){
                if(json != null){

                    $('#name-users-edit').val(json.user.nome);
                    $('#email-users-edit').val(json.user.email ? json.user.email : null)
                    $('#username-users-edit').val(json.user.login_git ? json.user.login_git : null)
                    $('#cargo-users-edit').val(json.user.cargo ? json.user.cargo : null)

                    if(json.user.status == '1'){
                        $('#banned-users-edit').prop( "checked", true );
                        $('#banned-users-edit-disabled').prop( "checked", true );
                    }

                    if(json.user.url){
                        $('#redirect-github').attr('href', json.user.url)
                    }else{
                        $('#redirect-github').css('cursor', 'not-allowed')
                    }

                    if(json.user.disp_status == 'online'){
                        $('#status-users-edit').css('color', 'green').text('online')
                    }else if (json.user.disp_status == 'offline'){
                        $('#status-users-edit').css('color', '#898c9285').text('offline')
                    }

                    $('#image-users-edit').attr('src', json.user.photo ? json.user.photo : null)

                    
                    $.each(json.listas.cargos, function (key, item) {
                        $('<option>').val(item.c_id).text(item.c_descricao).appendTo('#cargo-users-edit');
                        $('<option>').val(item.c_id).text(item.c_descricao).appendTo('#cargo-users-edit-disabled');
                    })
                    
                    $('#cargo-users-edit').val(json.user.cargo ? json.user.cargo : null)

                    $('#modal-edit-user').modal('toggle');
                }

                $('#loading-bg').fadeOut('fast')
            }
        });
    })
});