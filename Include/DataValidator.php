<?php

class DataValidator{

    public function validarPessoa($pessoa){

        if(!empty($pessoa->nome) && !empty($pessoa->email) && !empty($pessoa->telefone) && !empty($pessoa->dataNascimento)
            && !empty($pessoa->sexo) && !empty($pessoa->cpf) && !empty($pessoa->rua)  && !empty($pessoa->rua) && !empty($pessoa->numero)
            && !empty($pessoa->bairro) && !empty($pessoa->complemento) && !empty($pessoa->cidade) && !empty($pessoa->cidade)
            && !empty($pessoa->estado) && !empty($pessoa->pais)){
            return false;
        }

        return true;
    }

}