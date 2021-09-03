<?php
function lerAquivo($nomeArquivo)
{
    //aqui só transdformamos em String
    $arquivo = file_get_contents($nomeArquivo);

    //aqui a String se torna Array
    $jsonArray = json_decode($arquivo);

    //devolve o array pra quem chamou
    return $jsonArray;
}

function contarFuncionariosTotal($listaFuncionarios)
{
    $numeroTotalFuncionarios = 0;
    foreach($listaFuncionarios as $funcionario) //procura na lista toda
    {
        $numeroTotalFuncionarios++;
    }
    return $numeroTotalFuncionarios;
}

// busca aluno e devolve a lista com os alunos
function buscarFuncionario($listaFuncionarios, $nomeFuncionario)
{
    $funcionariosFiltro = [];
    foreach($listaFuncionarios as $funcionario) //procura na lista toda
    {
        if(mb_strpos($funcionario->first_name, $nomeFuncionario) !== false)//se achar
        {
            $funcionariosFiltro [] = $funcionario;// guarda o nome na lista de encontrados
        }
        elseif(mb_strpos($funcionario->last_name, $nomeFuncionario) !== false)
        {
            $funcionariosFiltro [] = $funcionario;
        }
        elseif(mb_strpos($funcionario->department, $nomeFuncionario) !== false)
        {
            $funcionariosFiltro [] = $funcionario;
        }

        /*if($funcionario->first_name == $nomeFuncionario) //se achar
         {
            $funcionariosFiltro [] = $funcionario;// guarda o nome na lista de encontrados
        }*/
    }
    return $funcionariosFiltro;//ao fim da pesquisa, retorna todos os alunos encontrados
}


