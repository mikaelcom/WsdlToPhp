<?php
/**
 * Class file for XiInterBanksTypeArrayOfRateDescription
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeArrayOfRateDescription
 * @date 08/07/2012
 */
class XiInterBanksTypeArrayOfRateDescription extends XiInterBanksWsdlClass
{
	/**
	 * The RateDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInterBanksTypeRateDescription
	 */
	public $RateDescription;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateDescription RateDescription
	 * @return XiInterBanksTypeArrayOfRateDescription
	 */
	public function __construct($_RateDescription = null)
	{
		parent::__construct(array('RateDescription'=>$_RateDescription));
	}
	/**
	 * Set RateDescription
	 * @param RateDescription RateDescription
	 * @return RateDescription
	 */
	public function setRateDescription($_RateDescription)
	{
		return ($this->RateDescription = $_RateDescription);
	}
	/**
	 * Get RateDescription
	 * @return XiInterBanksTypeRateDescription
	 */
	public function getRateDescription()
	{
		return $this->RateDescription;
	}
	/**
	 * Returns the current element
	 * @see XiInterBanksWsdlClass::current()
	 * @return XiInterBanksTypeRateDescription
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInterBanksWsdlClass::item()
	 * @param int
	 * @return XiInterBanksTypeRateDescription
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::first()
	 * @return XiInterBanksTypeRateDescription
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::last()
	 * @return XiInterBanksTypeRateDescription
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::offsetGet()
	 * @param int
	 * @return XiInterBanksTypeRateDescription
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'RateDescription'
	 */
	public function getAttributeName()
	{
		return 'RateDescription';
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