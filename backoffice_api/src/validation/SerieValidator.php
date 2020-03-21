<?php

namespace lbs\geoquizz\validation;

use \Respect\Validation\Validator as v;

class SerieValidator
{
    public static function validators()
    {
        return
            [
                'ville' => v::StringType()->alpha(),
                'map_refs' => v::StringType()->alpha()
            ];
    }
}
