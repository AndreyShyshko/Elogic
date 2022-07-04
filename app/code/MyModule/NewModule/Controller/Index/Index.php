<?php

namespace MyModule\NewModule\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /** @var PageFactory */

    protected $_resultPageFactory;

    /**
     * [__construct]
     * @param Context      $context
     * @param PageFactory  $resultPageFactory
     */

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * loads custom layout
     *
     * @return \Magento\Framework\View\Result\Page
     */

    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->addHandle('module_custom_customlayout');
        return $resultPage;
    }
}
