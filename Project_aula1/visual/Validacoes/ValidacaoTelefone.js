window.addEventListener('load', function(){
    document.getElementById('telefoneCliente').addEventListener('input',function(){
        let value = this.value;
        let exprecao1 = /\d{2}/;
        let exprecao2 = /\(\d{2}\)\d{5}/;
        if(value.length == 2 && exprecao1.test(value)){
            value = '(' + value + ')';
        }        
        if(value.length == 9 && exprecao2.test(value)){
            value = value + '-';
        }        
        this.value = value;
    });

    document.getElementById('telefoneFornecedor').addEventListener('input',function(){
        let value = this.value;
        let exprecao1 = /\d{2}/;
        let exprecao2 = /\(\d{2}\)\d{5}/;
        if(value.length == 2 && exprecao1.test(value)){
            value = '(' + value + ')';
        }        
        if(value.length == 9 && exprecao2.test(value)){
            value = value + '-';
        }        
        this.value = value;
    });

    document.getElementById('telefoneFuncionario').addEventListener('input',function(){
        let value = this.value;
        let exprecao1 = /\d{2}/;
        let exprecao2 = /\(\d{2}\)\d{5}/;
        if(value.length == 2 && exprecao1.test(value)){
            value = '(' + value + ')';
        }        
        if(value.length == 9 && exprecao2.test(value)){
            value = value + '-';
        }        
        this.value = value;
    });
});