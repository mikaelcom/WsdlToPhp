<?php
/**
 * Class file for XiHoldingsTypeArrayOfSECFormerCompanyName
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeArrayOfSECFormerCompanyName
 * @date 08/07/2012
 */
class XiHoldingsTypeArrayOfSECFormerCompanyName extends XiHoldingsWsdlClass
{
	/**
	 * The SECFormerCompanyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHoldingsTypeSECFormerCompanyName
	 */
	public $SECFormerCompanyName;
	/**
	 * Constructor
	 * @param XiHoldingsTypeSECFormerCompanyName SECFormerCompanyName
	 * @return XiHoldingsTypeArrayOfSECFormerCompanyName
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
	 * @return XiHoldingsTypeSECFormerCompanyName
	 */
	public function getSECFormerCompanyName()
	{
		return $this->SECFormerCompanyName;
	}
	/**
	 * Returns the current element
	 * @see XiHoldingsWsdlClass::current()
	 * @return XiHoldingsTypeSECFormerCompanyName
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHoldingsWsdlClass::item()
	 * @param int
	 * @return XiHoldingsTypeSECFormerCompanyName
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::first()
	 * @return XiHoldingsTypeSECFormerCompanyName
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::last()
	 * @return XiHoldingsTypeSECFormerCompanyName
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiHoldingsTypeSECFormerCompanyName
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