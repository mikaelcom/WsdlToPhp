<?php
/**
 * Class file for XiBondMasterTypeArrayOfScreenBondResult
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeArrayOfScreenBondResult
 * @date 08/07/2012
 */
class XiBondMasterTypeArrayOfScreenBondResult extends XiBondMasterWsdlClass
{
	/**
	 * The ScreenBondResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondMasterTypeScreenBondResult
	 */
	public $ScreenBondResult;
	/**
	 * Constructor
	 * @param XiBondMasterTypeScreenBondResult ScreenBondResult
	 * @return XiBondMasterTypeArrayOfScreenBondResult
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
	 * @return XiBondMasterTypeScreenBondResult
	 */
	public function getScreenBondResult()
	{
		return $this->ScreenBondResult;
	}
	/**
	 * Returns the current element
	 * @see XiBondMasterWsdlClass::current()
	 * @return XiBondMasterTypeScreenBondResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondMasterWsdlClass::item()
	 * @param int
	 * @return XiBondMasterTypeScreenBondResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::first()
	 * @return XiBondMasterTypeScreenBondResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::last()
	 * @return XiBondMasterTypeScreenBondResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondMasterTypeScreenBondResult
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