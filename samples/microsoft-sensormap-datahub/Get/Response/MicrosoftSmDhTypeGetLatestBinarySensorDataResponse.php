<?php
/**
 * Class file for MicrosoftSmDhTypeGetLatestBinarySensorDataResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeGetLatestBinarySensorDataResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeGetLatestBinarySensorDataResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The GetLatestBinarySensorDataResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $GetLatestBinarySensorDataResult;
	/**
	 * Constructor
	 * @param base64Binary GetLatestBinarySensorDataResult
	 * @return MicrosoftSmDhTypeGetLatestBinarySensorDataResponse
	 */
	public function __construct($_GetLatestBinarySensorDataResult = null)
	{
		parent::__construct(array('GetLatestBinarySensorDataResult'=>$_GetLatestBinarySensorDataResult));
	}
	/**
	 * Set GetLatestBinarySensorDataResult
	 * @param base64Binary GetLatestBinarySensorDataResult
	 * @return base64Binary
	 */
	public function setGetLatestBinarySensorDataResult($_GetLatestBinarySensorDataResult)
	{
		return ($this->GetLatestBinarySensorDataResult = $_GetLatestBinarySensorDataResult);
	}
	/**
	 * Get GetLatestBinarySensorDataResult
	 * @return base64Binary
	 */
	public function getGetLatestBinarySensorDataResult()
	{
		return $this->GetLatestBinarySensorDataResult;
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