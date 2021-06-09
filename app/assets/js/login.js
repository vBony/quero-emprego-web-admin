
function loginGithub(){
    let base_url = $('#base_url').val()

    $.ajax({
        url: base_url + 'thirdparty/github/',
        method: 'POST',
        dataType: 'json',
        success: function(json){
            alert(json)
        }

    })
}