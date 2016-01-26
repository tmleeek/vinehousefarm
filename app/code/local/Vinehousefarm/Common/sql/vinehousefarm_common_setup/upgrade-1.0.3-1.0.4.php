<?php
/**
 * @package Vine-House-Farm.
 * @author: A.A.Treitjak <a.treitjak@gmail.com>
 * @copyright: 2012 - 2015 BelVG.com
 */
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$statusTable = $installer->getTable('sales/order_status');
$statusStateTable = $installer->getTable('sales/order_status_state');

// Insert statuses
$installer->getConnection()->insertArray(
    $statusTable,
    array(
        'status',
        'label'
    ),
    array(
        array('status' => 'awaiting_auth', 'label' => 'Awaiting Authorisation'),
        array('status' => 'pickingpacking', 'label' => 'Picking/Packing '),
    )
);

// Insert states and mapping of statuses to states
$installer->getConnection()->insertArray(
    $statusStateTable,
    array(
        'status',
        'state',
        'is_default'
    ),
    array(
        array(
            'status' => 'awaiting_auth',
            'state' => 'new',
            'is_default' => 0
        ),
        array(
            'status' => 'pickingpacking',
            'state' => 'new',
            'is_default' => 0
        ),
    )
);

$installer->endSetup();