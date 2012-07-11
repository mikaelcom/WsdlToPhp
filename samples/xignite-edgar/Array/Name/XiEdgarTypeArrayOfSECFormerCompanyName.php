<?php
/**
 * Class file for XiEdgarTypeArrayOfSECFormerCompanyName
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeArrayOfSECFormerCompanyName
 * @date 08/07/2012
 */
class XiEdgarTypeArrayOfSECFormerCompanyName extends XiEdgarWsdlClass
{
	/**
	 * The SECFormerCompanyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEdgarTypeSECFormerCompanyName
	 */
	public $SECFormerCompanyName;
	/**
	 * Constructor
	 * @param XiEdgarTypeSECFormerCompanyName SECFormerCompanyName
	 * @return XiEdgarTypeArrayOfSECFormerCompanyName
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
	 * @return XiEdgarTypeSECFormerCompanyName
	 */
	public function getSECFormerCompanyName()
	{
		return $this->SECFormerCompanyName;
	}
	/**
	 * Returns the current element
	 * @see XiEdgarWsdlClass::current()
	 * @return XiEdgarTypeSECFormerCompanyName
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEdgarWsdlClass::item()
	 * @param int
	 * @return XiEdgarTypeSECFormerCompanyName
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::first()
	 * @return XiEdgarTypeSECFormerCompanyName
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::last()
	 * @return XiEdgarTypeSECFormerCompanyName
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEdgarTypeSECFormerCompanyName
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