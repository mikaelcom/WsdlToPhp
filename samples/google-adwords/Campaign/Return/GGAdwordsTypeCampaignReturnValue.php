<?php
/**
 * Class file for GGAdwordsTypeCampaignReturnValue
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeCampaignReturnValue
 * Documentation : A container for return values from the CampaignService.
 * @date 03/07/2012
 */
class GGAdwordsTypeCampaignReturnValue extends GGAdwordsTypeListReturnValue
{
	/**
	 * The value
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * @var GGAdwordsTypeCampaign
	 */
	public $value;
	/**
	 * The partialFailureErrors
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : List of partial failure errors.
	 * @var GGAdwordsTypeApiError
	 */
	public $partialFailureErrors;
	/**
	 * Constructor
	 * @param GGAdwordsTypeCampaign value
	 * @param GGAdwordsTypeApiError partialFailureErrors
	 * @return GGAdwordsTypeCampaignReturnValue
	 */
	public function __construct($_value = null,$_partialFailureErrors = null)
	{
		GGAdwordsWsdlClass::__construct(array('value'=>$_value,'partialFailureErrors'=>$_partialFailureErrors));
	}
	/**
	 * Set value
	 * @param Campaign value
	 * @return Campaign
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return GGAdwordsTypeCampaign
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set partialFailureErrors
	 * @param ApiError partialFailureErrors
	 * @return ApiError
	 */
	public function setPartialFailureErrors($_partialFailureErrors)
	{
		return ($this->partialFailureErrors = $_partialFailureErrors);
	}
	/**
	 * Get partialFailureErrors
	 * @return GGAdwordsTypeApiError
	 */
	public function getPartialFailureErrors()
	{
		return $this->partialFailureErrors;
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