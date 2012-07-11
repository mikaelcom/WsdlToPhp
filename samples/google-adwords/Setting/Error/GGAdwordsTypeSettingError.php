<?php
/**
 * Class file for GGAdwordsTypeSettingError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSettingError
 * Documentation : Indicates a problem with campaign settings.
 * @date 03/07/2012
 */
class GGAdwordsTypeSettingError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The setting error reason.
	 * @var GGAdwordsTypeSettingErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeSettingErrorReason reason
	 * @return GGAdwordsTypeSettingError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param SettingErrorReason reason
	 * @return SettingErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeSettingErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeSettingErrorReason
	 */
	public function getReason()
	{
		return $this->reason;
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