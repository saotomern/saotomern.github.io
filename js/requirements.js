function tipoDeRequerimento(){
    // Obtém todos os elementos de input do tipo radio com o nome "btn-tipo"
    var radios = document.querySelectorAll('input[name="btn-tipo"]');
    
    // Itera sobre os inputs de radio para verificar qual está selecionado
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            // Se um input de radio estiver selecionado, exibe o valor selecionado
            switch (radios[i].value) {
                case 'diarias':
                    document.getElementById("opt-diarias").style.display = "flex"; 
                    document.getElementById("opt-licenca").style.display = "none"; 
                    document.getElementById("opt-ferias").style.display = "none"; 
                    document.getElementById("opt-outros").style.display = "none"; 
                    break  
                case 'licenca':
                    document.getElementById("opt-diarias").style.display = "none"; 
                    document.getElementById("opt-licenca").style.display = "flex"; 
                    document.getElementById("opt-ferias").style.display = "none"; 
                    document.getElementById("opt-outros").style.display = "none"; 
                    break;
                case 'ferias':
                    document.getElementById("opt-diarias").style.display = "none"; 
                    document.getElementById("opt-licenca").style.display = "none"; 
                    document.getElementById("opt-ferias").style.display = "flex"; 
                    document.getElementById("opt-outros").style.display = "none";                     break;
                case 'outros':
                    document.getElementById("opt-diarias").style.display = "none"; 
                    document.getElementById("opt-licenca").style.display = "none"; 
                    document.getElementById("opt-ferias").style.display = "none"; 
                    document.getElementById("opt-outros").style.display = "flex";                     break;
                default:
                    alert('Nenhuma opção selecionada');
            }
            break;
        }
    }
}

function submeteFerias(){
    let nome = document.getElementById("diaria-nome").value;
    testaCampoVazio(nome, "diaria-nome");
    let matricula = document.getElementById("diaria-mat").value;
    testaCampoVazio(nome, "diaria-mat");
}

function testaCampoVazio(variavel, identificador){
    var variavelTrimmed = variavel.trim();
    if (variavelTrimmed.length > 0) {
        document.getElementById(identificador).style.backgroundColor = "#90ee90";
    } else {
        // O campo está vazio, define o estilo de fundo como verde
        document.getElementById(identificador).style.backgroundColor = "#ffcccc";
    }
}