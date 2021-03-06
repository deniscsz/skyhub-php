<?php
/**
 * BSeller Platform | B2W - Companhia Digital
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  Skyhub
 * @package   Skyhub
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br)
 *
 * @author    Bruno Gemelli <bruno.gemelli@e-smart.com.br>
 */

include __DIR__ . '/../api.php';
include __DIR__ . '/../apiPdf.php';

/** @var \SkyHub\Api\EntityInterface\Shipment\Plp $entityInterface */
$entityInterface = $api->plp()->entityInterface();

/** @var \SkyHub\Api\EntityInterface\Shipment\Plp $entityInterface */
$entityInterfacePdf = $apiPdf->plp()->entityInterface();


/**
 * GET A LIST OF PLP's.
 * @var SkyHub\Api\Handler\Response\HandlerInterface $response
 */
$response = $entityInterface->plps();


/**
 * GET A LIST OF ORDERS READY TO BE GROUPED IN A PLP.
 * @var SkyHub\Api\Handler\Response\HandlerInterface $response
 */
$response = $entityInterface->ordersReadyToGroup();


/**
 * GROUP ORDERS IN A PLP.
 * @var SkyHub\Api\Handler\Response\HandlerInterface $response
 */
$entityInterface->addOrder('01234');
$entityInterface->addOrder('56789');
$response = $entityInterface->group();


/**
 * UNGROUP A PLP.
 * @var SkyHub\Api\Handler\Response\HandlerInterface $response
 */
$entityInterface->setId('123456789');
$response = $entityInterface->ungroup();


/**
 * GET PLP JSON.
 * @var SkyHub\Api\Handler\Response\HandlerInterface $response
 */
$entityInterface->setId('123456789');
$response = $entityInterface->viewFile();


/**
 * GET PLP PDF.
 * @var SkyHub\Api\Handler\Response\HandlerInterface $response
 */
$entityInterfacePdf->setId('123456789');
$response = $entityInterfacePdf->viewFile();
