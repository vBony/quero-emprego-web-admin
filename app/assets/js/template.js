$( document ).ready(function() {

    // Retirando estilos dos inputs com erro
    $('input, select').on('change', function(){
        let name = $(this).attr('name');
        $('input[name='+name+']').removeClass('is-invalid')
        $('#'+name+'-msg').fadeOut('fast')
    })


    /**
     * Pega o data-id da div que está de acordo com a url atual e deixa como ativa no menu,
     * para deixar claro ao usuário em qual tela ele está
     */
    let path = window.location.pathname.split('/');
    path = path[2]
    $(".menu-option").removeClass('menu-active')

    if(path == ""){
        $(`div[data-id=home]`).addClass('menu-active')
    }else{
        $("div[data-id="+path+"]").addClass('menu-active')
    }

    $('.menu-option').on('click', function(){
        let url = $('#base_url').val();
        
        window.location.href = url + $(this).data('id');
    })

    $('.row-mm').on('click', function(){
        let url = $('#base_url').val();

        window.location.href = url + $(this).data('idmm');
    })

    $("#button-mobile-header").on('click', function(){
        this.classList.toggle("change")
        $('#menu-mobile-bg').fadeIn('fast')
    })

    $('#btn-close-menu-mobile').on('click', function(){
        $('#menu-mobile-bg').fadeOut('fast')
        $('#button-mobile-header').removeClass('change');
    })

    $('#icon-b3').on('click', function(){
        $('#modal-user-settings').modal('toggle')
    })

    $('#btn-close-edit-user, #btn-close-edit-user-footer').on('click', function(){
        $('#modal-user-settings').modal('hide')
    })

    $('#btn-submit-edit-user').on('click', function(){
        let url = $('#url').val()

        let data = {
            nome: $('input[name=eu-nome').val(),
            email: $('input[name=eu-email]').val(),
            login_git: $('input[name=eu-login_git]').val()
        }

        $.ajax({
            url: url+'user/edit',
            method: 'POST',
            dataType: 'json',
            data: data,
            success: function(json){
                if(json.erros != undefined){
                    $.each(json.erros, function (key, item) {
                        $('input[name=eu-'+key+']').addClass('is-invalid')
                        $('#eu-'+key+'-msg').fadeIn('fast').text(item);
                    });
                }
            }
        })
    })
});