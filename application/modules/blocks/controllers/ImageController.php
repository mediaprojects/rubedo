<?php
/**
 * Rubedo
 *
 * LICENSE
 *
 * yet to be written
 *
 * @category   Rubedo
 * @package    Rubedo
 * @copyright  Copyright (c) 2012-2012 WebTales (http://www.webtales.fr)
 * @license    yet to be written
 * @version    $Id:
 */
Use Rubedo\Services\Manager;

require_once ('AbstractController.php');

/**
 *
 * @author dfanchon
 * @category Rubedo
 * @package Rubedo
 */
class Blocks_ImageController extends Blocks_AbstractController
{

    /**
     * Default Action, return the Ext/Js HTML loader
     */
    public function indexAction ()
    {
        $blockConfig = $this->getParam('block-config', array());
            
        $site = $this->getParam('site');
        $output['imageLink'] = isset($blockConfig['imageLink']) ? $blockConfig['imageLink'] : null;
        $output['imageAlt'] = isset($blockConfig['imageAlt']) ? $blockConfig['imageAlt'] : null;
        $output['imageFile'] = isset($blockConfig['imageFile']) ? $blockConfig['imageFile'] : null;
        $output['imageWidth'] = isset($blockConfig['imageWidth']) ? $blockConfig['imageWidth'] : null;
        $output['imageHeight'] = isset($blockConfig['imageHeight']) ? $blockConfig['imageHeight'] : null;
                                      
        $template = Manager::getService('FrontOfficeTemplates')->getFileThemePath("blocks/image.html.twig");
        
        $css = array();
        $js = array();
        $this->_sendResponse($output, $template, $css, $js);
    }
}