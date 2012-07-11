<?php
/**
 * Class file for MicrosoftSmDhTypeGetLatestScalarSensorDataResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeGetLatestScalarSensorDataResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeGetLatestScalarSensorDataResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The GetLatestScalarSensorDataResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GetLatestScalarSensorDataResult;
	/**
	 * Constructor
	 * @param double GetLatestScalarSensorDataResult
	 * @return MicrosoftSmDhTypeGetLatestScalarSensorDataResponse
	 */
	public function __construct($_GetLatestScalarSensorDataResult)
	{
		parent::__construct(array('GetLatestScalarSensorDataResult'=>$_GetLatestScalarSensorDataResult));
	}
	/**
	 * Set GetLatestScalarSensorDataResult
	 * @param double GetLatestScalarSensorDataResult
	 * @return double
	 */
	public function setGetLatestScalarSensorDataResult($_GetLatestScalarSensorDataResult)
	{
		return ($this->GetLatestScalarSensorDataResult = $_GetLatestScalarSensorDataResult);
	}
	/**
	 * Get GetLatestScalarSensorDataResult
	 * @return double
	 */
	public function getGetLatestScalarSensorDataResult()
	{
		return $this->GetLatestScalarSensorDataResult;
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