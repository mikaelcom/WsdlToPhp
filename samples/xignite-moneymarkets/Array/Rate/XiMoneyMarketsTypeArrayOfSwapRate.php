<?php
/**
 * Class file for XiMoneyMarketsTypeArrayOfSwapRate
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeArrayOfSwapRate
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeArrayOfSwapRate extends XiMoneyMarketsWsdlClass
{
	/**
	 * The SwapRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMoneyMarketsTypeSwapRate
	 */
	public $SwapRate;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeSwapRate SwapRate
	 * @return XiMoneyMarketsTypeArrayOfSwapRate
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
	 * @return XiMoneyMarketsTypeSwapRate
	 */
	public function getSwapRate()
	{
		return $this->SwapRate;
	}
	/**
	 * Returns the current element
	 * @see XiMoneyMarketsWsdlClass::current()
	 * @return XiMoneyMarketsTypeSwapRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMoneyMarketsWsdlClass::item()
	 * @param int
	 * @return XiMoneyMarketsTypeSwapRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::first()
	 * @return XiMoneyMarketsTypeSwapRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::last()
	 * @return XiMoneyMarketsTypeSwapRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMoneyMarketsTypeSwapRate
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