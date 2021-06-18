$( document ).ready(function() {

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

    $("#button-mobile-header").on('click', function(){
        this.classList.toggle("change")
    })

});