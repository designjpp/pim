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

namespace App\Controller;

use Pimcore\Model\DataObject;
use App\Model\Product\AbstractProduct;
// use App\Model\Product\Car;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\Document\Hardlink;
use Pimcore\Web2Print\Processor;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Pimcore\Model\DataObject\Bicicleta;

class Web2printController extends BaseController
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function defaultAction(Request $request)
    {
        $paramsBag = [
            'document' => $this->document
        ];

        foreach ($request->attributes as $key => $value) {
            $paramsBag[$key] = $value;
        }

        $paramsBag = array_merge($this->getAllParameters($request), $paramsBag);

        if ($this->document->getProperty('hide-layout')) {
            return $this->render('web2print/default_no_layout.html.twig', $paramsBag);
        } else {
            return $this->render('web2print/default.html.twig', $paramsBag);
        }
    }

    /**
     *
     * @param Request $request
     * @return Response
     *
     * @throws \Exception
     */
    public function containerAction(Request $request)
    {
        $paramsBag = [
            'document' => $this->document
        ];

        foreach ($request->attributes as $key => $value) {
            $paramsBag[$key] = $value;
        }

        $allChildren = [];

        //prepare children for include
        foreach ($this->document->getAllChildren() as $child) {
            if ($child instanceof Hardlink) {
                $child = Hardlink\Service::wrap($child);
            }

            $child->setProperty('hide-layout', 'bool', true, false, true);

            $allChildren[] = $child;
        }

        $paramsBag['allChildren'] = $allChildren;

        return $this->render('web2print/container.html.twig', $paramsBag);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @throws \Exception
     */
    public function productCellAction(Request $request)
    {
        AbstractObject::setGetInheritedValues(true);
        $product = Bicicleta::getById($request->get('id'));
        // $paramsBag['product'] = $product;
        $paramsBag['bicicleta'] = $product;

        return $this->render('web2print/product_cell.html.twig', $paramsBag);
    }

    /**
     * @param Request $request
     * @Route("/product-print", name="product_print")
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function productPrintAction(Request $request)
    {
        AbstractObject::setGetInheritedValues(true);
        $objId = $request->get('id');
        $obj = Bicicleta::getById($objId);
        $child = $obj->getChildren([DataObject::OBJECT_TYPE_VARIANT]);

        if ($obj instanceof Bicicleta) {
            $params = $this->getAllParameters($request);
            // $params['bicicleta'] = $obj;
            $params = $obj;
            // $variants = $this->getChildren();
            // $variants['variant'] = $child;
            $variants = $child;

            $html = $this->renderView('web2print/product_detail.html.twig', [
                'bicicleta' => $params,
                'variants' => $variants,
            ]);

            if ($request->get('html')) {
                return new Response($html);
            } else {
                $adapter = Processor::getInstance();

                if ($html) {
                    return new Response(
                        $adapter->getPdfFromString($html),
                        200,
                        ['Content-Type' => 'application/pdf']
                    );
                }
            }
        }
    }
}