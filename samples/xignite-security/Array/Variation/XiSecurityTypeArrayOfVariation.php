<?php
/**
 * Class file for XiSecurityTypeArrayOfVariation
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeArrayOfVariation
 * @date 08/07/2012
 */
class XiSecurityTypeArrayOfVariation extends XiSecurityWsdlClass
{
	/**
	 * The Variation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiSecurityTypeVariation
	 */
	public $Variation;
	/**
	 * Constructor
	 * @param XiSecurityTypeVariation Variation
	 * @return XiSecurityTypeArrayOfVariation
	 */
	public function __construct($_Variation = null)
	{
		parent::__construct(array('Variation'=>$_Variation));
	}
	/**
	 * Set Variation
	 * @param Variation Variation
	 * @return Variation
	 */
	public function setVariation($_Variation)
	{
		return ($this->Variation = $_Variation);
	}
	/**
	 * Get Variation
	 * @return XiSecurityTypeVariation
	 */
	public function getVariation()
	{
		return $this->Variation;
	}
	/**
	 * Returns the current element
	 * @see XiSecurityWsdlClass::current()
	 * @return XiSecurityTypeVariation
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiSecurityWsdlClass::item()
	 * @param int
	 * @return XiSecurityTypeVariation
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::first()
	 * @return XiSecurityTypeVariation
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::last()
	 * @return XiSecurityTypeVariation
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::offsetGet()
	 * @param int
	 * @return XiSecurityTypeVariation
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Variation'
	 */
	public function getAttributeName()
	{
		return 'Variation';
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