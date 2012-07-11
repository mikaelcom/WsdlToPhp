<?php
/**
 * Class file for XiRatesTypeArrayOfFHLBankRate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfFHLBankRate
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfFHLBankRate extends XiRatesWsdlClass
{
	/**
	 * The FHLBankRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeFHLBankRate
	 */
	public $FHLBankRate;
	/**
	 * Constructor
	 * @param XiRatesTypeFHLBankRate FHLBankRate
	 * @return XiRatesTypeArrayOfFHLBankRate
	 */
	public function __construct($_FHLBankRate = null)
	{
		parent::__construct(array('FHLBankRate'=>$_FHLBankRate));
	}
	/**
	 * Set FHLBankRate
	 * @param FHLBankRate FHLBankRate
	 * @return FHLBankRate
	 */
	public function setFHLBankRate($_FHLBankRate)
	{
		return ($this->FHLBankRate = $_FHLBankRate);
	}
	/**
	 * Get FHLBankRate
	 * @return XiRatesTypeFHLBankRate
	 */
	public function getFHLBankRate()
	{
		return $this->FHLBankRate;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeFHLBankRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeFHLBankRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeFHLBankRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeFHLBankRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeFHLBankRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FHLBankRate'
	 */
	public function getAttributeName()
	{
		return 'FHLBankRate';
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