<?php
/**
 * Class file for XiRatesTypeArrayOfSwapRate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfSwapRate
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfSwapRate extends XiRatesWsdlClass
{
	/**
	 * The SwapRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeSwapRate
	 */
	public $SwapRate;
	/**
	 * Constructor
	 * @param XiRatesTypeSwapRate SwapRate
	 * @return XiRatesTypeArrayOfSwapRate
	 */
	public function __construct($_SwapRate = null)
	{
		parent::__construct(array('SwapRate'=>$_SwapRate));
	}
	/**
	 * Set SwapRate
	 * @param SwapRate SwapRate
	 * @return SwapRate
	 */
	public function setSwapRate($_SwapRate)
	{
		return ($this->SwapRate = $_SwapRate);
	}
	/**
	 * Get SwapRate
	 * @return XiRatesTypeSwapRate
	 */
	public function getSwapRate()
	{
		return $this->SwapRate;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeSwapRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeSwapRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeSwapRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeSwapRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeSwapRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SwapRate'
	 */
	public function getAttributeName()
	{
		return 'SwapRate';
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