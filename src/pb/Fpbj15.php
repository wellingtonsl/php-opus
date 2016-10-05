<?php

namespace capesesp\pb;

use capesesp\json\OpusJson;

/**
*   Armazena códigos de execução do programa fpbj15
*/

abstract class Fpbj15
{
    const PESSOAS_ENCONTRADAS = 6;
    const PESSOAS_NAO_ENCONTRADAS = 5;
    const DATA_INICIAL_INVALIDA = 4;
    const DATA_FINAL_INVALIDA = 3;
    const DATA_INICIAL_OBRIGATORIA = 2;
    const DATA_FINAL_OBRIGATORIA = 1;
    const FATAL = 0;



    public static function executa($args, $decode = true)
    {
        return OpusJson::executa('fpbj15', $args, $decode);
    }
}
