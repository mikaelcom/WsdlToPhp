<?php
/**
 * Class file for XiRealTimeTypeArrayOfOrderSummary
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeArrayOfOrderSummary
 * @date 08/07/2012
 */
class XiRealTimeTypeArrayOfOrderSummary extends XiRealTimeWsdlClass
{
	/**
	 * The OrderSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRealTimeTypeOrderSummary
	 */
	public $OrderSummary;
	/**
	 * Constructor
	 * @param XiRealTimeTypeOrderSummary OrderSummary
	 * @return XiRealTimeTypeArrayOfOrderSummary
	 */
	public function __construct($_OrderSummary = null)
	{
		parent::__construct(array('OrderSummary'=>$_OrderSummary));
	}
	/**
	 * Set OrderSummary
	 * @param OrderSummary OrderSummary
	 * @return OrderSummary
	 */
	public function setOrderSummary($_OrderSummary)
	{
		return ($this->OrderSummary = $_OrderSummary);
	}
	/**
	 * Get OrderSummary
	 * @return XiRealTimeTypeOrderSummary
	 */
	public function getOrderSummary()
	{
		return $this->OrderSummary;
	}
	/**
	 * Returns the current element
	 * @see XiRealTimeWsdlClass::current()
	 * @return XiRealTimeTypeOrderSummary
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRealTimeWsdlClass::item()
	 * @param int
	 * @return XiRealTimeTypeOrderSummary
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::first()
	 * @return XiRealTimeTypeOrderSummary
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::last()
	 * @return XiRealTimeTypeOrderSummary
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiRealTimeTypeOrderSummary
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OrderSummary'
	 */
	public function getAttributeName()
	{
		return 'OrderSummary';
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