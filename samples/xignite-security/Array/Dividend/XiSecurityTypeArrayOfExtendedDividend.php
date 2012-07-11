<?php
/**
 * Class file for XiSecurityTypeArrayOfExtendedDividend
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeArrayOfExtendedDividend
 * @date 08/07/2012
 */
class XiSecurityTypeArrayOfExtendedDividend extends XiSecurityWsdlClass
{
	/**
	 * The ExtendedDividend
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiSecurityTypeExtendedDividend
	 */
	public $ExtendedDividend;
	/**
	 * Constructor
	 * @param XiSecurityTypeExtendedDividend ExtendedDividend
	 * @return XiSecurityTypeArrayOfExtendedDividend
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
	 * @return XiSecurityTypeExtendedDividend
	 */
	public function getExtendedDividend()
	{
		return $this->ExtendedDividend;
	}
	/**
	 * Returns the current element
	 * @see XiSecurityWsdlClass::current()
	 * @return XiSecurityTypeExtendedDividend
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiSecurityWsdlClass::item()
	 * @param int
	 * @return XiSecurityTypeExtendedDividend
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::first()
	 * @return XiSecurityTypeExtendedDividend
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::last()
	 * @return XiSecurityTypeExtendedDividend
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::offsetGet()
	 * @param int
	 * @return XiSecurityTypeExtendedDividend
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