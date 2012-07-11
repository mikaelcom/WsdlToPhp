<?php
/**
 * Class file for XiRatesTypeGetSOFIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetSOFIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetSOFIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetSOFIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeSOFIBORRate
	 */
	public $GetSOFIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeSOFIBORRate GetSOFIBORResult
	 * @return XiRatesTypeGetSOFIBORResponse
	 */
	public function __construct($_GetSOFIBORResult = null)
	{
		parent::__construct(array('GetSOFIBORResult'=>$_GetSOFIBORResult));
	}
	/**
	 * Set GetSOFIBORResult
	 * @param SOFIBORRate GetSOFIBORResult
	 * @return SOFIBORRate
	 */
	public function setGetSOFIBORResult($_GetSOFIBORResult)
	{
		return ($this->GetSOFIBORResult = $_GetSOFIBORResult);
	}
	/**
	 * Get GetSOFIBORResult
	 * @return XiRatesTypeSOFIBORRate
	 */
	public function getGetSOFIBORResult()
	{
		return $this->GetSOFIBORResult;
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