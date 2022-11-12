<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/396f483f76.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Parte WEB POO2</title>
</head>

<body class="container-md">

    <h1>Cadastrando a Configuração do DataBase</h1>

    <fieldset class="mt-3">

    <div class="row mb-3">
        <div class="col">
            <label for="nome" class="form-label">Nome</label> 
            <input required type="text" id="nome" class="form-control" placeholder="Insira o nome do DataBase" aria-label="First name"></br>
        </div>
    </div>    

    <div class="row mb-3">
        <div class="col">
            <label for="url" class="form-label">URL</label> 
            <input required type="text" id="url" class="form-control" placeholder="Insira a URL do DataBase" aria-label="First name"></br>
        </div>
    </div>

        <div class="col">
            <label for="porta" class="form-label">Porta</label> 
            <input required type="number" id="porta" class="form-control" placeholder="Insira a Porta do DataBase" aria-label="First name"></br>
        </div>

        <div class="col">
            <label for="usuario" class="form-label">Usuario</label> 
            <input required type="text" id="usuario" class="form-control" placeholder="Insira o Usuario do DataBase" aria-label="First name"></br>
        </div>

        <div class="col">
            <label for="senha" class="form-label">Senha</label> 
            <input required type="text" id="senha" class="form-control" placeholder="Insira a Senha do DataBase" aria-label="First name"></br>
        </div>

        <div class="col">
            <label for="sgbd" class="form-label">SGBD</label> 
            <select class="form-select" id="sgbd" disabled>
                <option value="mySQL">mySQL</option>
            </select>
        </div>

        </br>
        <input class="btn btn-primary" type="submit" value="Cadasto de Tabelas"><br>
    </fieldset>    
  
    <br><br><br>

    <br><br>
</body>
</html>