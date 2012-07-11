<?php
/**
 * Class file for XiInterBanksTypeArrayOfInterestRate
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeArrayOfInterestRate
 * @date 08/07/2012
 */
class XiInterBanksTypeArrayOfInterestRate extends XiInterBanksWsdlClass
{
	/**
	 * The InterestRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInterBanksTypeInterestRate
	 */
	public $InterestRate;
	/**
	 * Constructor
	 * @param XiInterBanksTypeInterestRate InterestRate
	 * @return XiInterBanksTypeArrayOfInterestRate
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
	 * @return XiInterBanksTypeInterestRate
	 */
	public function getInterestRate()
	{
		return $this->InterestRate;
	}
	/**
	 * Returns the current element
	 * @see XiInterBanksWsdlClass::current()
	 * @return XiInterBanksTypeInterestRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInterBanksWsdlClass::item()
	 * @param int
	 * @return XiInterBanksTypeInterestRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::first()
	 * @return XiInterBanksTypeInterestRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::last()
	 * @return XiInterBanksTypeInterestRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::offsetGet()
	 * @param int
	 * @return XiInterBanksTypeInterestRate
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