<?php
/**
 * Class file for XiGlobalBondMasterTypeScreenBondsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeScreenBondsResponse
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeScreenBondsResponse extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The ScreenBondsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeArrayOfScreenBondResult
	 */
	public $ScreenBondsResult;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeArrayOfScreenBondResult ScreenBondsResult
	 * @return XiGlobalBondMasterTypeScreenBondsResponse
	 */
	public function __construct($_ScreenBondsResult = null)
	{
		parent::__construct(array('ScreenBondsResult'=>new XiGlobalBondMasterTypeArrayOfScreenBondResult($_ScreenBondsResult)));
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
	 * @return XiGlobalBondMasterTypeArrayOfScreenBondResult
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