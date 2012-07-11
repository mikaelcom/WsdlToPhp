<?php
/**
 * Class file for XiHousingTypeGetMonthlyPermitsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetMonthlyPermitsResponse
 * @date 08/07/2012
 */
class XiHousingTypeGetMonthlyPermitsResponse extends XiHousingWsdlClass
{
	/**
	 * The GetMonthlyPermitsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeArrayOfMonthlyByState
	 */
	public $GetMonthlyPermitsResult;
	/**
	 * Constructor
	 * @param XiHousingTypeArrayOfMonthlyByState GetMonthlyPermitsResult
	 * @return XiHousingTypeGetMonthlyPermitsResponse
	 */
	public function __construct($_GetMonthlyPermitsResult = null)
	{
		parent::__construct(array('GetMonthlyPermitsResult'=>new XiHousingTypeArrayOfMonthlyByState($_GetMonthlyPermitsResult)));
	}
	/**
	 * Set GetMonthlyPermitsResult
	 * @param ArrayOfMonthlyByState GetMonthlyPermitsResult
	 * @return ArrayOfMonthlyByState
	 */
	public function setGetMonthlyPermitsResult($_GetMonthlyPermitsResult)
	{
		return ($this->GetMonthlyPermitsResult = $_GetMonthlyPermitsResult);
	}
	/**
	 * Get GetMonthlyPermitsResult
	 * @return XiHousingTypeArrayOfMonthlyByState
	 */
	public function getGetMonthlyPermitsResult()
	{
		return $this->GetMonthlyPermitsResult;
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