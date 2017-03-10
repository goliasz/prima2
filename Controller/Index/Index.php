<?php

namespace goliasz\prima2\Controller\Index;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    public function execute()
    {
        echo "Test controller";
        var_dump(__METHOD__);
    }
}
