<?php

namespace kavalar\forms\fields;

use kavalar\forms\interfaces\FieldInterface;
use kavalar\forms\traits\OptionLoaderTrait;

class InputText implements FieldInterface
{
    use OptionLoaderTrait;

    public function create($name, array $options)
    {
        $attrs = $this->loadAttributes($options);
        $value = $this->getAttr('value');
        return "<input type='text' value='$value' $attrs>";
    }

}