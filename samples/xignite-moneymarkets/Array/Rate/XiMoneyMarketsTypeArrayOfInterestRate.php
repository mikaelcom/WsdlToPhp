<?php
/**
 * Class file for XiMoneyMarketsTypeArrayOfInterestRate
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeArrayOfInterestRate
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeArrayOfInterestRate extends XiMoneyMarketsWsdlClass
{
	/**
	 * The InterestRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMoneyMarketsTypeInterestRate
	 */
	public $InterestRate;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeInterestRate InterestRate
	 * @return XiMoneyMarketsTypeArrayOfInterestRate
	 */
	public function __construct($_InterestRate = null)
	{
		parent::__construct(array('InterestRate'=>$_InterestRate));
	}
	/**
	 * Set InterestRate
	 * @param InterestRate InterestRate
	 * @return InterestRate
	 */
	public function setInterestRate($_InterestRate)
	{
		return ($this->InterestRate = $_InterestRate);
	}
	/**
	 * Get InterestRate
	 * @return XiMoneyMarketsTypeInterestRate
	 */
	public function getInterestRate()
	{
		return $this->InterestRate;
	}
	/**
	 * Returns the current element
	 * @see XiMoneyMarketsWsdlClass::current()
	 * @return XiMoneyMarketsTypeInterestRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMoneyMarketsWsdlClass::item()
	 * @param int
	 * @return XiMoneyMarketsTypeInterestRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::first()
	 * @return XiMoneyMarketsTypeInterestRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::last()
	 * @return XiMoneyMarketsTypeInterestRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMoneyMarketsTypeInterestRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'InterestRate'
	 */
	public function getAttributeName()
	{
		return 'InterestRate';
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