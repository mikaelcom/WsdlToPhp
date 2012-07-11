<?php
/**
 * Class file for XiSecurityTypeArrayOfSecurity
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeArrayOfSecurity
 * @date 08/07/2012
 */
class XiSecurityTypeArrayOfSecurity extends XiSecurityWsdlClass
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiSecurityTypeSecurity
	 */
	public $Security;
	/**
	 * Constructor
	 * @param XiSecurityTypeSecurity Security
	 * @return XiSecurityTypeArrayOfSecurity
	 */
	public function __construct($_Security = null)
	{
		parent::__construct(array('Security'=>$_Security));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiSecurityTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Returns the current element
	 * @see XiSecurityWsdlClass::current()
	 * @return XiSecurityTypeSecurity
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiSecurityWsdlClass::item()
	 * @param int
	 * @return XiSecurityTypeSecurity
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::first()
	 * @return XiSecurityTypeSecurity
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::last()
	 * @return XiSecurityTypeSecurity
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::offsetGet()
	 * @param int
	 * @return XiSecurityTypeSecurity
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Security'
	 */
	public function getAttributeName()
	{
		return 'Security';
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