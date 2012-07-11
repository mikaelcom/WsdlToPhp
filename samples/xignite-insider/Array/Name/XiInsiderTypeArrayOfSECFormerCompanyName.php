<?php
/**
 * Class file for XiInsiderTypeArrayOfSECFormerCompanyName
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfSECFormerCompanyName
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfSECFormerCompanyName extends XiInsiderWsdlClass
{
	/**
	 * The SECFormerCompanyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeSECFormerCompanyName
	 */
	public $SECFormerCompanyName;
	/**
	 * Constructor
	 * @param XiInsiderTypeSECFormerCompanyName SECFormerCompanyName
	 * @return XiInsiderTypeArrayOfSECFormerCompanyName
	 */
	public function __construct($_SECFormerCompanyName = null)
	{
		parent::__construct(array('SECFormerCompanyName'=>$_SECFormerCompanyName));
	}
	/**
	 * Set SECFormerCompanyName
	 * @param SECFormerCompanyName SECFormerCompanyName
	 * @return SECFormerCompanyName
	 */
	public function setSECFormerCompanyName($_SECFormerCompanyName)
	{
		return ($this->SECFormerCompanyName = $_SECFormerCompanyName);
	}
	/**
	 * Get SECFormerCompanyName
	 * @return XiInsiderTypeSECFormerCompanyName
	 */
	public function getSECFormerCompanyName()
	{
		return $this->SECFormerCompanyName;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeSECFormerCompanyName
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeSECFormerCompanyName
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeSECFormerCompanyName
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeSECFormerCompanyName
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeSECFormerCompanyName
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SECFormerCompanyName'
	 */
	public function getAttributeName()
	{
		return 'SECFormerCompanyName';
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