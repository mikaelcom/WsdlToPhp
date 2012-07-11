<?php
/**
 * Class file for XiInterBanksTypeGetRateDescriptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetRateDescriptionResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetRateDescriptionResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetRateDescriptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateDescription
	 */
	public $GetRateDescriptionResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateDescription GetRateDescriptionResult
	 * @return XiInterBanksTypeGetRateDescriptionResponse
	 */
	public function __construct($_GetRateDescriptionResult = null)
	{
		parent::__construct(array('GetRateDescriptionResult'=>$_GetRateDescriptionResult));
	}
	/**
	 * Set GetRateDescriptionResult
	 * @param RateDescription GetRateDescriptionResult
	 * @return RateDescription
	 */
	public function setGetRateDescriptionResult($_GetRateDescriptionResult)
	{
		return ($this->GetRateDescriptionResult = $_GetRateDescriptionResult);
	}
	/**
	 * Get GetRateDescriptionResult
	 * @return XiInterBanksTypeRateDescription
	 */
	public function getGetRateDescriptionResult()
	{
		return $this->GetRateDescriptionResult;
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