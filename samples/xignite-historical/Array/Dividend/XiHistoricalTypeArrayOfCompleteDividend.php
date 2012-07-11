<?php
/**
 * Class file for XiHistoricalTypeArrayOfCompleteDividend
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeArrayOfCompleteDividend
 * @date 08/07/2012
 */
class XiHistoricalTypeArrayOfCompleteDividend extends XiHistoricalWsdlClass
{
	/**
	 * The CompleteDividend
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHistoricalTypeCompleteDividend
	 */
	public $CompleteDividend;
	/**
	 * Constructor
	 * @param XiHistoricalTypeCompleteDividend CompleteDividend
	 * @return XiHistoricalTypeArrayOfCompleteDividend
	 */
	public function __construct($_CompleteDividend = null)
	{
		parent::__construct(array('CompleteDividend'=>$_CompleteDividend));
	}
	/**
	 * Set CompleteDividend
	 * @param CompleteDividend CompleteDividend
	 * @return CompleteDividend
	 */
	public function setCompleteDividend($_CompleteDividend)
	{
		return ($this->CompleteDividend = $_CompleteDividend);
	}
	/**
	 * Get CompleteDividend
	 * @return XiHistoricalTypeCompleteDividend
	 */
	public function getCompleteDividend()
	{
		return $this->CompleteDividend;
	}
	/**
	 * Returns the current element
	 * @see XiHistoricalWsdlClass::current()
	 * @return XiHistoricalTypeCompleteDividend
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHistoricalWsdlClass::item()
	 * @param int
	 * @return XiHistoricalTypeCompleteDividend
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::first()
	 * @return XiHistoricalTypeCompleteDividend
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::last()
	 * @return XiHistoricalTypeCompleteDividend
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiHistoricalTypeCompleteDividend
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CompleteDividend'
	 */
	public function getAttributeName()
	{
		return 'CompleteDividend';
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