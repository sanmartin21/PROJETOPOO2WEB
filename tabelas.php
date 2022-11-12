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

    <h1>Tabelas</h1>

    <fieldset class="mt-3">

    <div class="row mb-3">
        <div class="col">
            <label for="nomeTabela" class="form-label">Nome da Tabela</label> 
            <input required type="text" id="nomeTabela" class="form-control" placeholder="Insira o nome da Tabela" aria-label="First name"></br>
        </div>
    </div>    

    <h2>Colunas</h2>

    <div class="row mb-3">
        <div class="col">
            <label for="nomeColuna" class="form-label">Nome da Coluna</label> 
            <input required type="text" id="nomeColuna" class="form-control" placeholder="Insira o nome da Coluna" aria-label="First name"></br>
        </div>

        <div class="col">
            <label for="tipo" class="form-label">Tipo</label> 
            <select class="form-select" id="tipo">
                <option value="int">INT</option>
                <option value="text">TEXT</option>
            </select>
        </div>

        <div class="col">
                        <div class="col">
                            <input class="form-check-input" type="checkbox" id="primaryKey">
                            <label class="form-check-label" for="primaryKey">
                               Primary Key
                            </label>
                        </div>
                        <div class="col">
                            <input class="form-check-input" type="checkbox" id="notNull">
                            <label class="form-check-label" for="notNull">
                                Not Null
                            </label>
                        </div>
                        <div class="col">
                            <input class="form-check-input" type="checkbox" id="autoIncrement">
                            <label class="form-check-label" for="autoIncrement">
                                Auto Increment
                            </label>
                        </div>
                    </div>
                </div>
        </div>    
         </br>
         <input class="btn btn-primary" type="submit" value="Adicionar Coluna"><br>
    </fieldset>    
</body>
</html>