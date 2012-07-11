<?php
/**
 * Class file for XiHousingTypeGetYearlyPermitsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetYearlyPermitsResponse
 * @date 08/07/2012
 */
class XiHousingTypeGetYearlyPermitsResponse extends XiHousingWsdlClass
{
	/**
	 * The GetYearlyPermitsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeArrayOfYearlyByState
	 */
	public $GetYearlyPermitsResult;
	/**
	 * Constructor
	 * @param XiHousingTypeArrayOfYearlyByState GetYearlyPermitsResult
	 * @return XiHousingTypeGetYearlyPermitsResponse
	 */
	public function __construct($_GetYearlyPermitsResult = null)
	{
		parent::__construct(array('GetYearlyPermitsResult'=>new XiHousingTypeArrayOfYearlyByState($_GetYearlyPermitsResult)));
	}
	/**
	 * Set GetYearlyPermitsResult
	 * @param ArrayOfYearlyByState GetYearlyPermitsResult
	 * @return ArrayOfYearlyByState
	 */
	public function setGetYearlyPermitsResult($_GetYearlyPermitsResult)
	{
		return ($this->GetYearlyPermitsResult = $_GetYearlyPermitsResult);
	}
	/**
	 * Get GetYearlyPermitsResult
	 * @return XiHousingTypeArrayOfYearlyByState
	 */
	public function getGetYearlyPermitsResult()
	{
		return $this->GetYearlyPermitsResult;
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