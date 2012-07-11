<?php
/**
 * Class file for XiBondMasterTypeScreenBondsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeScreenBondsResponse
 * @date 08/07/2012
 */
class XiBondMasterTypeScreenBondsResponse extends XiBondMasterWsdlClass
{
	/**
	 * The ScreenBondsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeArrayOfScreenBondResult
	 */
	public $ScreenBondsResult;
	/**
	 * Constructor
	 * @param XiBondMasterTypeArrayOfScreenBondResult ScreenBondsResult
	 * @return XiBondMasterTypeScreenBondsResponse
	 */
	public function __construct($_ScreenBondsResult = null)
	{
		parent::__construct(array('ScreenBondsResult'=>new XiBondMasterTypeArrayOfScreenBondResult($_ScreenBondsResult)));
	}
	/**
	 * Set ScreenBondsResult
	 * @param ArrayOfScreenBondResult ScreenBondsResult
	 * @return ArrayOfScreenBondResult
	 */
	public function setScreenBondsResult($_ScreenBondsResult)
	{
		return ($this->ScreenBondsResult = $_ScreenBondsResult);
	}
	/**
	 * Get ScreenBondsResult
	 * @return XiBondMasterTypeArrayOfScreenBondResult
	 */
	public function getScreenBondsResult()
	{
		return $this->ScreenBondsResult;
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