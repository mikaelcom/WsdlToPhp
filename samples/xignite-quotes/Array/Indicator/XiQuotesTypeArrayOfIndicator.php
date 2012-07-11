<?php
/**
 * Class file for XiQuotesTypeArrayOfIndicator
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfIndicator
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfIndicator extends XiQuotesWsdlClass
{
	/**
	 * The Indicator
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeIndicator
	 */
	public $Indicator;
	/**
	 * Constructor
	 * @param XiQuotesTypeIndicator Indicator
	 * @return XiQuotesTypeArrayOfIndicator
	 */
	public function __construct($_Indicator = null)
	{
		parent::__construct(array('Indicator'=>$_Indicator));
	}
	/**
	 * Set Indicator
	 * @param Indicator Indicator
	 * @return Indicator
	 */
	public function setIndicator($_Indicator)
	{
		return ($this->Indicator = $_Indicator);
	}
	/**
	 * Get Indicator
	 * @return XiQuotesTypeIndicator
	 */
	public function getIndicator()
	{
		return $this->Indicator;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeIndicator
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeIndicator
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeIndicator
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeIndicator
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeIndicator
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Indicator'
	 */
	public function getAttributeName()
	{
		return 'Indicator';
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