<?php
/**
 * Class file for SOFastWeatherTypeGetWarningsByZipResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWarningsByZipResponse
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWarningsByZipResponse extends SOFastWeatherWsdlClass
{
	/**
	 * The GetWarningsByZipResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeArrayOfWarning
	 */
	public $GetWarningsByZipResult;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeArrayOfWarning GetWarningsByZipResult
	 * @return SOFastWeatherTypeGetWarningsByZipResponse
	 */
	public function __construct($_GetWarningsByZipResult = null)
	{
		parent::__construct(array('GetWarningsByZipResult'=>new SOFastWeatherTypeArrayOfWarning($_GetWarningsByZipResult)));
	}
	/**
	 * Set GetWarningsByZipResult
	 * @param ArrayOfWarning GetWarningsByZipResult
	 * @return ArrayOfWarning
	 */
	public function setGetWarningsByZipResult($_GetWarningsByZipResult)
	{
		return ($this->GetWarningsByZipResult = $_GetWarningsByZipResult);
	}
	/**
	 * Get GetWarningsByZipResult
	 * @return SOFastWeatherTypeArrayOfWarning
	 */
	public function getGetWarningsByZipResult()
	{
		return $this->GetWarningsByZipResult;
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