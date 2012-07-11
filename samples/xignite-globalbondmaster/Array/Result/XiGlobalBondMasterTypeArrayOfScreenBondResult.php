<?php
/**
 * Class file for XiGlobalBondMasterTypeArrayOfScreenBondResult
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeArrayOfScreenBondResult
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeArrayOfScreenBondResult extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The ScreenBondResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalBondMasterTypeScreenBondResult
	 */
	public $ScreenBondResult;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeScreenBondResult ScreenBondResult
	 * @return XiGlobalBondMasterTypeArrayOfScreenBondResult
	 */
	public function __construct($_ScreenBondResult = null)
	{
		parent::__construct(array('ScreenBondResult'=>$_ScreenBondResult));
	}
	/**
	 * Set ScreenBondResult
	 * @param ScreenBondResult ScreenBondResult
	 * @return ScreenBondResult
	 */
	public function setScreenBondResult($_ScreenBondResult)
	{
		return ($this->ScreenBondResult = $_ScreenBondResult);
	}
	/**
	 * Get ScreenBondResult
	 * @return XiGlobalBondMasterTypeScreenBondResult
	 */
	public function getScreenBondResult()
	{
		return $this->ScreenBondResult;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalBondMasterWsdlClass::current()
	 * @return XiGlobalBondMasterTypeScreenBondResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalBondMasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalBondMasterTypeScreenBondResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::first()
	 * @return XiGlobalBondMasterTypeScreenBondResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::last()
	 * @return XiGlobalBondMasterTypeScreenBondResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalBondMasterTypeScreenBondResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ScreenBondResult'
	 */
	public function getAttributeName()
	{
		return 'ScreenBondResult';
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