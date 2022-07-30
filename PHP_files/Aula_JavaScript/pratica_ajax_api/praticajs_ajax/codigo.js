window.addEventListener('load', function () {
    document.getElementById('estado').addEventListener('change', function () {
            let estado = this.value;
            fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+estado +'/municipios')
            .then(function(response){
            return response.json();
       })
            .then(function(json){
                let cidade = document.getElementById('cidade');
                cidade.innerText = ' ';
                for (let i=0; i<json.length; i++){
                    opt.value = json[i].id;
                    opt.innerText = json[i].nome;
                    cidade.add(opt);
                }
            });
    });

    document.getElementById('cidade').addEventListener('change', function () {
        document.getElementById('codigoIbge').value = this.value;
        document.getElementById('nomeIbge'). value = this.options[this.selectedIndex].innerText
    });

    document.querySelector('form').addEventListener('submit', function (event) {
        let dados = new FormData(document.forms[0]);
        let config = {method: 'post', body: dados};
        fetch('http://http://localhost/PHP_files/Aula_JavaScript/pratica_ajax_api/visual/cadastroDepoimento.php', config)
        .then(function(response){
            return response.json();
        })
        .then(function(response){
            if (json.status == 'ok') {
                alert('Pode dormir em paz irmão, deu certo');
                document.forms[0].reset();
            } else {
                alert('Vai continuar programando, porque deu merda');
            }
        });
        event.preventDefault();
    });
});
