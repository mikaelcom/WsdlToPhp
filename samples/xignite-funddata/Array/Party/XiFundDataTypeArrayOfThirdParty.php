<?php
/**
 * Class file for XiFundDataTypeArrayOfThirdParty
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfThirdParty
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfThirdParty extends XiFundDataWsdlClass
{
	/**
	 * The ThirdParty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeThirdParty
	 */
	public $ThirdParty;
	/**
	 * Constructor
	 * @param XiFundDataTypeThirdParty ThirdParty
	 * @return XiFundDataTypeArrayOfThirdParty
	 */
	public function __construct($_ThirdParty = null)
	{
		parent::__construct(array('ThirdParty'=>$_ThirdParty));
	}
	/**
	 * Set ThirdParty
	 * @param ThirdParty ThirdParty
	 * @return ThirdParty
	 */
	public function setThirdParty($_ThirdParty)
	{
		return ($this->ThirdParty = $_ThirdParty);
	}
	/**
	 * Get ThirdParty
	 * @return XiFundDataTypeThirdParty
	 */
	public function getThirdParty()
	{
		return $this->ThirdParty;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeThirdParty
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeThirdParty
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeThirdParty
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeThirdParty
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeThirdParty
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ThirdParty'
	 */
	public function getAttributeName()
	{
		return 'ThirdParty';
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