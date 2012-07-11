<?php
/**
 * Class file for XiRatesTypeArrayOfLIBORRate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfLIBORRate
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfLIBORRate extends XiRatesWsdlClass
{
	/**
	 * The LIBORRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeLIBORRate
	 */
	public $LIBORRate;
	/**
	 * Constructor
	 * @param XiRatesTypeLIBORRate LIBORRate
	 * @return XiRatesTypeArrayOfLIBORRate
	 */
	public function __construct($_LIBORRate = null)
	{
		parent::__construct(array('LIBORRate'=>$_LIBORRate));
	}
	/**
	 * Set LIBORRate
	 * @param LIBORRate LIBORRate
	 * @return LIBORRate
	 */
	public function setLIBORRate($_LIBORRate)
	{
		return ($this->LIBORRate = $_LIBORRate);
	}
	/**
	 * Get LIBORRate
	 * @return XiRatesTypeLIBORRate
	 */
	public function getLIBORRate()
	{
		return $this->LIBORRate;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeLIBORRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeLIBORRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeLIBORRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeLIBORRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeLIBORRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'LIBORRate'
	 */
	public function getAttributeName()
	{
		return 'LIBORRate';
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