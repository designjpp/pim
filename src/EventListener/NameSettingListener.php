<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace App\EventListener;

use App\Model\Product\Category;
use Pimcore\Event\Model\DataObjectEvent;
// use Pimcore\Model\DataObject\BodyStyle;

use Pimcore\Model\DataObject\Manufacturer;
// use Pimcore\Model\DataObject\Bicicleta;
use Pimcore\Model\DataObject\Marca;
use Pimcore\Model\DataObject\Categoria;
use Pimcore\Model\DataObject\CompMontagem;
use Pimcore\Model\DataObject\CampComercial;
use Pimcore\Model\DataObject\info;
use Pimcore\Model\DataObject\Destaque;
use Pimcore\Model\DataObject\Geometria;
use Pimcore\Model\DataObject\Produtos;

class NameSettingListener
{
    public function onPreAdd(DataObjectEvent $event)
    {
        $object = $event->getObject();

        if (
            // $object instanceof BodyStyle 
        $object instanceof Category
        || $object instanceof Manufacturer 
        || $object instanceof Marca 
        || $object instanceof Categoria 
        || $object instanceof CompMontagem 
        // || $object instanceof Bicicleta
        || $object instanceof CampComercial
        || $object instanceof info
        || $object instanceof Destaque
        || $object instanceof Geometria
        || $object instanceof Produtos) {
            $object->setName($object->getKey());
        }
    }
}
