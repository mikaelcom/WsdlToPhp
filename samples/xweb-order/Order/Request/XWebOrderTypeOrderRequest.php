<?php
/**
 * Class file for XWebOrderTypeOrderRequest
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeOrderRequest
 * @date 09/07/2012
 */
class XWebOrderTypeOrderRequest extends XWebOrderWsdlClass
{
	/**
	 * The RequestOrder
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebOrderTypeRequestOrderType
	 */
	public $RequestOrder;
	/**
	 * Constructor
	 * @param XWebOrderTypeRequestOrderType RequestOrder
	 * @return XWebOrderTypeOrderRequest
	 */
	public function __construct($_RequestOrder)
	{
		parent::__construct(array('RequestOrder'=>$_RequestOrder));
	}
	/**
	 * Set RequestOrder
	 * @param RequestOrderType RequestOrder
	 * @return RequestOrderType
	 */
	public function setRequestOrder($_RequestOrder)
	{
		return ($this->RequestOrder = $_RequestOrder);
	}
	/**
	 * Get RequestOrder
	 * @return XWebOrderTypeRequestOrderType
	 */
	public function getRequestOrder()
	{
		return $this->RequestOrder;
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