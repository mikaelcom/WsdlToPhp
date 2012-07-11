<?php
/**
 * Class file for SOFastWeatherTypeGetWarningsByStateResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWarningsByStateResponse
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWarningsByStateResponse extends SOFastWeatherWsdlClass
{
	/**
	 * The GetWarningsByStateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeArrayOfWarning
	 */
	public $GetWarningsByStateResult;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeArrayOfWarning GetWarningsByStateResult
	 * @return SOFastWeatherTypeGetWarningsByStateResponse
	 */
	public function __construct($_GetWarningsByStateResult = null)
	{
		parent::__construct(array('GetWarningsByStateResult'=>new SOFastWeatherTypeArrayOfWarning($_GetWarningsByStateResult)));
	}
	/**
	 * Set GetWarningsByStateResult
	 * @param ArrayOfWarning GetWarningsByStateResult
	 * @return ArrayOfWarning
	 */
	public function setGetWarningsByStateResult($_GetWarningsByStateResult)
	{
		return ($this->GetWarningsByStateResult = $_GetWarningsByStateResult);
	}
	/**
	 * Get GetWarningsByStateResult
	 * @return SOFastWeatherTypeArrayOfWarning
	 */
	public function getGetWarningsByStateResult()
	{
		return $this->GetWarningsByStateResult;
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