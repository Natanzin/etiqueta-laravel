$(function(){

    $('.excluir').click(function(){
        if(!confirm('Deseja realmente excluir o registro?')){
            return false;
        }
    })

})