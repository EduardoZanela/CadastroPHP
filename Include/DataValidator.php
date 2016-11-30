<?php

class DataValidator{

    public function validarPessoa($pessoa){

        if(!empty($pessoa->nome) && !empty($pessoa->email) && !empty($pessoa->telefone) && !empty($pessoa->dataNascimento)
            && !empty($pessoa->sexo) && !empty($pessoa->cpf) && !empty($pessoa->rua)  && !empty($pessoa->rua) && !empty($pessoa->numero)
            && !empty($pessoa->bairro) && !empty($pessoa->complemento) && !empty($pessoa->cidade)
            && !empty($pessoa->estado) && !empty($pessoa->pais)){
            return false;
        }

        return true;
    }

    public function validarQuarto($quarto){

        if(!empty($quarto->tipoQuarto) && !empty($quarto->numero) && !empty($quarto->andar) && !empty($quarto->cama)
            && !empty($quarto->tv) && !empty($quarto->banheiro) && !empty($quarto->frigobar)  && !empty($quarto->sacada) && !empty($quarto->jacuzi)
            && !empty($quarto->estado) && !empty($quarto->descricao)){
            return false;
        }

        return true;
    }

    public function validarTipoQuarto($tipoQuarto){

        if(!empty($tipoQuarto->nome) && !empty($tipoQuarto->preco)){
            return false;
        }

        return true;
    }

    public function validarReserva($reserva){

        if(!empty($reserva->periodoInicio) && !empty($reserva->periodoFim)){
            return false;
        }

        return true;
    }

}
