<?php
/**
 * Class file for XiHistoricalTypeArrayOfExtendedDividend
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeArrayOfExtendedDividend
 * @date 08/07/2012
 */
class XiHistoricalTypeArrayOfExtendedDividend extends XiHistoricalWsdlClass
{
	/**
	 * The ExtendedDividend
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHistoricalTypeExtendedDividend
	 */
	public $ExtendedDividend;
	/**
	 * Constructor
	 * @param XiHistoricalTypeExtendedDividend ExtendedDividend
	 * @return XiHistoricalTypeArrayOfExtendedDividend
	 */
	public function __construct($_ExtendedDividend = null)
	{
		parent::__construct(array('ExtendedDividend'=>$_ExtendedDividend));
	}
	/**
	 * Set ExtendedDividend
	 * @param ExtendedDividend ExtendedDividend
	 * @return ExtendedDividend
	 */
	public function setExtendedDividend($_ExtendedDividend)
	{
		return ($this->ExtendedDividend = $_ExtendedDividend);
	}
	/**
	 * Get ExtendedDividend
	 * @return XiHistoricalTypeExtendedDividend
	 */
	public function getExtendedDividend()
	{
		return $this->ExtendedDividend;
	}
	/**
	 * Returns the current element
	 * @see XiHistoricalWsdlClass::current()
	 * @return XiHistoricalTypeExtendedDividend
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHistoricalWsdlClass::item()
	 * @param int
	 * @return XiHistoricalTypeExtendedDividend
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::first()
	 * @return XiHistoricalTypeExtendedDividend
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::last()
	 * @return XiHistoricalTypeExtendedDividend
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiHistoricalTypeExtendedDividend
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ExtendedDividend'
	 */
	public function getAttributeName()
	{
		return 'ExtendedDividend';
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