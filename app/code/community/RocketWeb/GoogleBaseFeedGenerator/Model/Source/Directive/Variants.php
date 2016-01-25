<?php

/**
 * RocketWeb
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category  RocketWeb
 * @package   RocketWeb_GoogleBaseFeedGenerator
 * @copyright Copyright (c) 2012 RocketWeb (http://rocketweb.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author    RocketWeb
 */
class RocketWeb_GoogleBaseFeedGenerator_Model_Source_Directive_Variants extends RocketWeb_GoogleBaseFeedGenerator_Model_Source_Productattributescodes
{

    public function toHtml()
    {
        $html = '<select name="groups[#{group_name}][fields][#{field_name}][value][#{_id}][param][]" multiple="multiple" class="select multiselect" size="5">';
        $options = $this->toOptionArray();
        foreach ($options as $option) {
            $html .= '<option value="' . $option['value'] . '">' . $option['label'] . '</option>';
        }
        $html .= '</select>';
        $html .= '<p class="note"><span>' . Mage::helper('googlebasefeedgenerator')->__('Select all possible attributes building this value.') . '</span></p>';
        return $html;
    }
}