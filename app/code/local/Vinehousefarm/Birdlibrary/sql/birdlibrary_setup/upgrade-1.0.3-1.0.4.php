<?php
/**
 * @package Vine-House-Farm.
 * @author: A.A.Treitjak <a.treitjak@gmail.com>
 * @copyright: 2012 - 2015 BelVG.com
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()->addColumn($installer->getTable('birdlibrary/bird'), 'keywords', Varien_Db_Ddl_Table::TYPE_TEXT);

$installer->endSetup();