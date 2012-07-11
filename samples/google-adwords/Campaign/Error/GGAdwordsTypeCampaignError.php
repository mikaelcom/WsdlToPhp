<?php
/**
 * Class file for GGAdwordsTypeCampaignError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeCampaignError
 * Documentation : Base error class for Campaign Service.
 * @date 03/07/2012
 */
class GGAdwordsTypeCampaignError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeCampaignErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeCampaignErrorReason reason
	 * @return GGAdwordsTypeCampaignError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param CampaignErrorReason reason
	 * @return CampaignErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeCampaignErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeCampaignErrorReason
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