<?php

namespace GoMage\PWATest\Helper;

/**
 * \GoMage\PWATest\Helper\Data
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @return string
     */
    public function getMessage(): array
    {
        if($message = $this->scopeConfig->getValue('gomage_pwa_test/general')){
            return  $message;
        }
        return [];
    }
}
