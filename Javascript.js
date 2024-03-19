 $(document).ready(function(){
    $('#buscarCep').on('click', function (event){
        event.preventDefault();
        var cep = $('#cepConsulta').val();
        
        $.ajax({
            url:"https://viacep.com.br/ws/"+ cep + "/json/?callback=?", 
            method:'GET', 
            dataType:'json',
            success: function(dados){
                $('#cep').val(dados.cep);
                $('#logradouro').val(dados.logradouro);
                $('#bairro').val(dados.bairro);
                $('#cidade').val(dados.localidade);
                $('#uf').val(dados.uf);
            },
            error: function(){
                alert('CEP não encontrado!');
                $('#cepConsulta').val("");
            }
        });
    });
 });