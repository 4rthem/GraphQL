<?php

namespace Youshido\GraphQL\Field;

use Youshido\GraphQL\Type\Object\AbstractObjectType;

/**
 * Class InputField
 */
final class InputField extends AbstractInputField
{
    protected $isFinal = false;

    /**
     * @return AbstractObjectType
     */
    public function getType()
    {
        return $this->getConfigValue('type');
    }
}
