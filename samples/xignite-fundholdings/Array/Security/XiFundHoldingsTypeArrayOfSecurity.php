<?php
/**
 * Class file for XiFundHoldingsTypeArrayOfSecurity
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeArrayOfSecurity
 * @date 08/07/2012
 */
class XiFundHoldingsTypeArrayOfSecurity extends XiFundHoldingsWsdlClass
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundHoldingsTypeSecurity
	 */
	public $Security;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeSecurity Security
	 * @return XiFundHoldingsTypeArrayOfSecurity
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
	 * @return XiFundHoldingsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Returns the current element
	 * @see XiFundHoldingsWsdlClass::current()
	 * @return XiFundHoldingsTypeSecurity
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundHoldingsWsdlClass::item()
	 * @param int
	 * @return XiFundHoldingsTypeSecurity
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::first()
	 * @return XiFundHoldingsTypeSecurity
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::last()
	 * @return XiFundHoldingsTypeSecurity
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundHoldingsTypeSecurity
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