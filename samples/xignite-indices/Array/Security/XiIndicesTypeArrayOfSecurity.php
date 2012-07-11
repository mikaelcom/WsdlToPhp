<?php
/**
 * Class file for XiIndicesTypeArrayOfSecurity
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeArrayOfSecurity
 * @date 08/07/2012
 */
class XiIndicesTypeArrayOfSecurity extends XiIndicesWsdlClass
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiIndicesTypeSecurity
	 */
	public $Security;
	/**
	 * Constructor
	 * @param XiIndicesTypeSecurity Security
	 * @return XiIndicesTypeArrayOfSecurity
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
	 * @return XiIndicesTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Returns the current element
	 * @see XiIndicesWsdlClass::current()
	 * @return XiIndicesTypeSecurity
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiIndicesWsdlClass::item()
	 * @param int
	 * @return XiIndicesTypeSecurity
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::first()
	 * @return XiIndicesTypeSecurity
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::last()
	 * @return XiIndicesTypeSecurity
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::offsetGet()
	 * @param int
	 * @return XiIndicesTypeSecurity
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