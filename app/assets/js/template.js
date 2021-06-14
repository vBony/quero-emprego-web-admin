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
});