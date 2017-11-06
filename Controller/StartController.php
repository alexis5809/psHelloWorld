<?php

namespace ProudSourcing\HelloWorld\Controller;

use OxidEsales\Eshop\Core\Registry as oxRegistry;

/**
 * Class StartController
 * @package ProudSourcing\HelloWorld\Controller
 */
class StartController extends StartController_parent
{
    /**
     * Returns full page title
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->_psGetTitle();
    }

    /**
     * Sets meta title
     *
     * @return string
     */
    protected function _psGetTitle()
    {
        $sTitle = oxRegistry::getConfig()->getRequestParameter("title");
        if (!empty($sTitle)) {
            return $sTitle;
        } else {
            return "[psHelloWorld] Herzlich willkommen";
        }
    }
}
