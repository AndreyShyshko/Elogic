<?php

namespace Custommodule\Categories\ViewModel;

use Magento\Catalog\Block\Category\View;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Links implements ArgumentInterface
{
    /** @var \Magento\Catalog\Block\Category\View */

    private $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function getCat()
    {
        $categories = $this->view->getCurrentCategory()->getCategories($this->view->getCurrentCategory()->getId());

        return $categories;
    }
}
