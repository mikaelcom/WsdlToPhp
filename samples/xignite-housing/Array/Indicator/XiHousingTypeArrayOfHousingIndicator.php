<?php
/**
 * Class file for XiHousingTypeArrayOfHousingIndicator
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeArrayOfHousingIndicator
 * @date 08/07/2012
 */
class XiHousingTypeArrayOfHousingIndicator extends XiHousingWsdlClass
{
	/**
	 * The HousingIndicator
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHousingTypeHousingIndicator
	 */
	public $HousingIndicator;
	/**
	 * Constructor
	 * @param XiHousingTypeHousingIndicator HousingIndicator
	 * @return XiHousingTypeArrayOfHousingIndicator
	 */
	public function __construct($_HousingIndicator = null)
	{
		parent::__construct(array('HousingIndicator'=>$_HousingIndicator));
	}
	/**
	 * Set HousingIndicator
	 * @param HousingIndicator HousingIndicator
	 * @return HousingIndicator
	 */
	public function setHousingIndicator($_HousingIndicator)
	{
		return ($this->HousingIndicator = $_HousingIndicator);
	}
	/**
	 * Get HousingIndicator
	 * @return XiHousingTypeHousingIndicator
	 */
	public function getHousingIndicator()
	{
		return $this->HousingIndicator;
	}
	/**
	 * Returns the current element
	 * @see XiHousingWsdlClass::current()
	 * @return XiHousingTypeHousingIndicator
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHousingWsdlClass::item()
	 * @param int
	 * @return XiHousingTypeHousingIndicator
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::first()
	 * @return XiHousingTypeHousingIndicator
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::last()
	 * @return XiHousingTypeHousingIndicator
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::offsetGet()
	 * @param int
	 * @return XiHousingTypeHousingIndicator
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HousingIndicator'
	 */
	public function getAttributeName()
	{
		return 'HousingIndicator';
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