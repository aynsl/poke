<?php

namespace Src;

class Utility{

    public function mrPropre($word){
        $search = ['É'];
        $replace = ['E'];

        return str_replace($search, $replace, $word);
    }

}