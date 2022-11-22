<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/396f483f76.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Parte WEB POO2</title>
</head>
<body class="container-md" onload="onLoad()">
<form action="Controller.php" method="POST">
    <h1>Cadastro de Tabelas</h1>
        <div class="row mb-3">
            <div class="col">
                <label for="nomeTabela" class="form-label">Nome da Tabela</label>
                <input required type="text" name="nomeTabela" class="form-control" placeholder="Insira o nome da Tabela" aria-label="First name"></br>
            </div>
        </div>

        <h2 class="mb-3">Colunas</h2>
        
        <div id="colunas">
        </div>
        <input type="hidden" id="countColunas" name="countColunas">


        <input class="btn btn-danger" value="Adicionar Coluna" onClick="onClickAdicionarColuna()">
        <button class="btn btn-warning" name="button" value="addTabela" type="submit">Adicionar nova Tabela</button>
        <button class="btn btn-danger" name="button" value="visualizarJson" type="submit">Visualizar Json</button>
        <button class="btn btn-success" name="button" value="baixarJson" type="submit">Baixar Json</button>
    </form>

</body>
<script>
    function onLoad() {
        onClickAdicionarColuna();
    }
    
    function onClickAdicionarColuna() {
        let divColunas = document.getElementById("colunas");

        const div = document.createElement('div');
        div.className = 'row mb-3';

        div.append(getDivColunaNome(divColunas.childElementCount));
        div.append(getDivColunaTipo(divColunas.childElementCount));
        div.append(getDivColunaOptions(divColunas.childElementCount));

        divColunas.append(div);

        document.getElementById("countColunas").value = divColunas.childElementCount;
    }

    function getDivColunaNome(count) {
        const div = document.createElement('div');
        div.className = 'col';

        const label = document.createElement('label');
        label.className = 'form-label';
        label.innerText = 'Nome da Coluna';

        const input = document.createElement('input');
        input.className = 'form-control';
        input.setAttribute('required', 'true');
        input.setAttribute('type', 'text');
        input.setAttribute('placeholder', 'Insira o nome da Coluna');
        input.setAttribute('name', 'nomeColuna'+count);

        div.append(label);
        div.append(input);

        return div;
    }

    function getDivColunaTipo(count) {
        const div = document.createElement('div');
        div.className = 'col';

        const label = document.createElement('label');
        label.className = 'form-label';
        label.innerText = 'Tipo';

        const select = document.createElement('select');
        select.className = 'form-select';
        select.setAttribute('name', 'tipoColuna'+count);

        const option1 = document.createElement('option');
        option1.setAttribute('value', 'int');
        option1.innerText = 'INT';

        const option2 = document.createElement('option');
        option2.setAttribute('value', 'text');
        option2.innerText = 'TEXT';

        select.append(option1);
        select.append(option2);

        div.append(label);
        div.append(select);

        return div;
    }

    function getDivColunaOptions(count) {
        const div = document.createElement('div');
        div.className = 'col';
        const div1 = document.createElement('div');
        div1.className = 'col';
        const div2 = document.createElement('div');
        div2.className = 'col';
        const div3 = document.createElement('div');
        div2.className = 'col';
        const label1 = document.createElement('label');
        label1.className = 'form-check-label';
        label1.innerText = 'Primary Key';
        const input1 = document.createElement('input');
        input1.className = 'form-check-input';
        input1.setAttribute('type', 'checkbox');
        input1.setAttribute('name', 'primaryKeyColuna'+count);
        const label2 = document.createElement('label');
        label2.className = 'form-check-label';
        label2.innerText = 'Not Null';
        const input2 = document.createElement('input');
        input2.className = 'form-check-input';
        input2.setAttribute('type', 'checkbox');
        input2.setAttribute('name', 'notNullColuna'+count);
        const label3 = document.createElement('label');
        label3.className = 'form-check-label';
        label3.innerText = 'Auto Increment';
        const input3 = document.createElement('input');
        input3.className = 'form-check-input';
        input3.setAttribute('type', 'checkbox');
        input3.setAttribute('name', 'autoIncrementColuna'+count);
        div1.append(input1);
        div1.append(label1);
        div2.append(input2);
        div2.append(label2);
        div3.append(input3);
        div3.append(label3);
        div.append(div1);
        div.append(div2);
        div.append(div3);
        return div;
    }
</script>
</html>
