<?php

namespace Modules\API\Block;

use Magento\Framework\View\Element\Template;

class APIBlock extends Template
{
	public function getText(){
		return "API modules collected by HAINV";
	}

	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}
}
