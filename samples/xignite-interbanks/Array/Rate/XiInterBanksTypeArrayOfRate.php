<?php
/**
 * Class file for XiInterBanksTypeArrayOfRate
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeArrayOfRate
 * @date 08/07/2012
 */
class XiInterBanksTypeArrayOfRate extends XiInterBanksWsdlClass
{
	/**
	 * The Rate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInterBanksTypeRate
	 */
	public $Rate;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRate Rate
	 * @return XiInterBanksTypeArrayOfRate
	 */
	public function __construct($_Rate = null)
	{
		parent::__construct(array('Rate'=>$_Rate));
	}
	/**
	 * Set Rate
	 * @param Rate Rate
	 * @return Rate
	 */
	public function setRate($_Rate)
	{
		return ($this->Rate = $_Rate);
	}
	/**
	 * Get Rate
	 * @return XiInterBanksTypeRate
	 */
	public function getRate()
	{
		return $this->Rate;
	}
	/**
	 * Returns the current element
	 * @see XiInterBanksWsdlClass::current()
	 * @return XiInterBanksTypeRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInterBanksWsdlClass::item()
	 * @param int
	 * @return XiInterBanksTypeRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::first()
	 * @return XiInterBanksTypeRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::last()
	 * @return XiInterBanksTypeRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::offsetGet()
	 * @param int
	 * @return XiInterBanksTypeRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Rate'
	 */
	public function getAttributeName()
	{
		return 'Rate';
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