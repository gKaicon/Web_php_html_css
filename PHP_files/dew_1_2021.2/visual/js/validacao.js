window.addEventListener('load', function(){
    document.getElementById('telefoneCliente').addEventListener('input',function(){
        let value = this.value;
        let exp1 = /\d{2}/;
        let exp2 = /\(\d{2}\)\d{5}/;
        if(value.length == 2 && exp1.test(value))
        {
            value = '(' + value + ')';
        }        
        if(value.length == 9 && exp2.test(value))
        {
            value = value + '-';
        }        
        this.value = value;
    });
    /*
    document.forms[0].addEventListener('submit', function(e){
        let value = document.getElementById('telefoneCliente').value;
        let exp = /\(\d{2}\)\d{5}-\d{4}/;
        if(!exp.test(value))
        {
            alert('Digite o telefone com ddd e mais 9 dígitos!');
            e.preventDefault();
        }
    });
    */
});