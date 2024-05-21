<?php
namespace LiveChat\LiveChat\Controller\GetVisitor\Index;

/**
 * Interceptor class for @see \LiveChat\LiveChat\Controller\GetVisitor\Index
 */
class Interceptor extends \LiveChat\LiveChat\Controller\GetVisitor\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($context, $customerSession);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerDetails()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerDetails');
        return $pluginInfo ? $this->___callPlugins('getCustomerDetails', func_get_args(), $pluginInfo) : parent::getCustomerDetails();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerEmail()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerEmail');
        return $pluginInfo ? $this->___callPlugins('getCustomerEmail', func_get_args(), $pluginInfo) : parent::getCustomerEmail();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerName');
        return $pluginInfo ? $this->___callPlugins('getCustomerName', func_get_args(), $pluginInfo) : parent::getCustomerName();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        return $pluginInfo ? $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo) : parent::getActionFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }
}
