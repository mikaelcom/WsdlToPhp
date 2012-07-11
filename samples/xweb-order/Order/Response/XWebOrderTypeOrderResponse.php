<?php
/**
 * Class file for XWebOrderTypeOrderResponse
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeOrderResponse
 * @date 09/07/2012
 */
class XWebOrderTypeOrderResponse extends XWebOrderWsdlClass
{
	/**
	 * The ResponseOrder
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebOrderTypeResponseOrderType
	 */
	public $ResponseOrder;
	/**
	 * Constructor
	 * @param XWebOrderTypeResponseOrderType ResponseOrder
	 * @return XWebOrderTypeOrderResponse
	 */
	public function __construct($_ResponseOrder)
	{
		parent::__construct(array('ResponseOrder'=>$_ResponseOrder));
	}
	/**
	 * Set ResponseOrder
	 * @param ResponseOrderType ResponseOrder
	 * @return ResponseOrderType
	 */
	public function setResponseOrder($_ResponseOrder)
	{
		return ($this->ResponseOrder = $_ResponseOrder);
	}
	/**
	 * Get ResponseOrder
	 * @return XWebOrderTypeResponseOrderType
	 */
	public function getResponseOrder()
	{
		return $this->ResponseOrder;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>