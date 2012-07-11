<?php
/**
 * Class file for XiInterBanksTypeGetSOFIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetSOFIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetSOFIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetSOFIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeSOFIBORRate
	 */
	public $GetSOFIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeSOFIBORRate GetSOFIBORResult
	 * @return XiInterBanksTypeGetSOFIBORResponse
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
	 * @return XiInterBanksTypeSOFIBORRate
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