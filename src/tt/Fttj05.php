<?php

namespace capesesp\tt;

use capesesp\json\OpusJson;

/**
 * Classe que representa o programa Opus/JSON fttj05
 * @see http://wiki.capesesp.net/doku.php?id=dsi:erp:sistema_central:uc:fucj05
 */
abstract class Fttj05
{
    /** Nome do programa Opus representado pela classe */
    const PROGRAMA = 'fttj05';

    /** Codigo de retorno quando eventos foram encontrados */
    const EVENTOS_ENCONTRADOS = 1;
    /** Codigo de retorno quando nenhum evento foi encontrado */
    const NENHUM_EVENTO_ENCONTRADO = 2;
    /** Codigo de retorno quando a competencia inicial é invalida (nao segue formato estabelecido) */
    const COMPETENCIA_INICIAL_INVALIDA = 3;
    /** Codigo de retorno quando a competencia final é invalida (nao segue formato estabelecido) */
    const COMPETENCIA_FINAL_INVALIDA = 4;
    /** Codigo de retorno quando ocorre um erro interno no programa Opus */
    const FATAL = 0;

    /**
     * Retorno de eventos de movimentacao financeira para e-Financeira RFB
     * @param $args Array com parametros de linha de comando:
     * - competencia inicial AAAAMM
     * - competencia final AAAAMM
     * - numero de itens por pagina de retorno
     * - numero de pagina
     * @param $decode Boolean se falso não converte string para Objeto JSON
     * @return Objeto JSON
     */
    public static function executa($args, $decode = true)
    {
        return OpusJson::executa(self::PROGRAMA, $args, $decode);
    }
}
?>
