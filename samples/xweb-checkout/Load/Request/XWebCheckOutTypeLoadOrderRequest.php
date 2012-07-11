<?php
/**
 * Class file for XWebCheckOutTypeLoadOrderRequest
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeLoadOrderRequest
 * @date 09/07/2012
 */
class XWebCheckOutTypeLoadOrderRequest extends XWebCheckOutWsdlClass
{
	/**
	 * The Order_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Order_ID;
	/**
	 * Constructor
	 * @param string Order_ID
	 * @return XWebCheckOutTypeLoadOrderRequest
	 */
	public function __construct($_Order_ID)
	{
		parent::__construct(array('Order_ID'=>$_Order_ID));
	}
	/**
	 * Set Order_ID
	 * @param string Order_ID
	 * @return string
	 */
	public function setOrder_ID($_Order_ID)
	{
		return ($this->Order_ID = $_Order_ID);
	}
	/**
	 * Get Order_ID
	 * @return string
	 */
	public function getOrder_ID()
	{
		return $this->Order_ID;
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