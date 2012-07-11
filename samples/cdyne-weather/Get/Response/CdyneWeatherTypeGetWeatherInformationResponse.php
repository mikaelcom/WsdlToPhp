<?php
/**
 * Class file for CdyneWeatherTypeGetWeatherInformationResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeGetWeatherInformationResponse
 * @date 02/07/2012
 */
class CdyneWeatherTypeGetWeatherInformationResponse extends CdyneWeatherWsdlClass
{
	/**
	 * The GetWeatherInformationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneWeatherTypeArrayOfWeatherDescription
	 */
	public $GetWeatherInformationResult;
	/**
	 * Constructor
	 * @param CdyneWeatherTypeArrayOfWeatherDescription GetWeatherInformationResult
	 * @return CdyneWeatherTypeGetWeatherInformationResponse
	 */
	public function __construct($_GetWeatherInformationResult = null)
	{
		parent::__construct(array('GetWeatherInformationResult'=>new CdyneWeatherTypeArrayOfWeatherDescription($_GetWeatherInformationResult)));
	}
	/**
	 * Set GetWeatherInformationResult
	 * @param ArrayOfWeatherDescription GetWeatherInformationResult
	 * @return ArrayOfWeatherDescription
	 */
	public function setGetWeatherInformationResult($_GetWeatherInformationResult)
	{
		return ($this->GetWeatherInformationResult = $_GetWeatherInformationResult);
	}
	/**
	 * Get GetWeatherInformationResult
	 * @return CdyneWeatherTypeArrayOfWeatherDescription
	 */
	public function getGetWeatherInformationResult()
	{
		return $this->GetWeatherInformationResult;
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