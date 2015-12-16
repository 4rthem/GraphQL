<?php
/**
 * Date: 16.12.15
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\Tests\Type\Union\Schema;


use Youshido\GraphQL\Type\Config\TypeConfigInterface;
use Youshido\GraphQL\Type\Object\AbstractObjectType;

class FirstType extends AbstractObjectType
{


    public function resolve($value = null, $args = [])
    {

    }

    protected function build(TypeConfigInterface $config)
    {
        $config
            ->addField('name', 'string')
            ->addField('description', 'string');
    }

    /**
     * @return String type name
     */
    public function getName()
    {
        return 'FirstType';
    }
}