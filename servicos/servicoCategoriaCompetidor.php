<?php

function defineCategoriaCompetidor(string $nome, string $idade) {
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    if (validaNome($nome) && validaIdade($idade)) {
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'infantil') {
                    setarMensagemSucesso('o nadador ' . $nome . ' compete na categoria ' . $categorias[$i]);
                    return;
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adolescente') {
                    setarMensagemSucesso('o nadador ' . $nome . ' compete na categoria ' . $categorias[$i]);
                    return;
                }
            }
        } else if ($idade > 18) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adulto') {
                    setarMensagemSucesso('o nadador ' . $nome . ' compete na categoria ' . $categorias[$i]);
                    return;
                }
            }
        } else {

            return obterMensagemErro();
        }
    }
}

removerMensagemErro();
removerMensagemSucesso();
