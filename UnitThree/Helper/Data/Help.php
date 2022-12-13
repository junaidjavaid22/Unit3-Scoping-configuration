<?php

declare(strict_types=1);

namespace RLTSquare\UnitThree\Helper\Data;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Help extends AbstractHelper
{
    /**
     * @param $config_path
     * @return mixed
     */
    public function getConfig($config_path): mixed
    {
        return $this->scopeConfig->getValue(
            $config_path,
            ScopeInterface::SCOPE_STORE
        );
    }
}
