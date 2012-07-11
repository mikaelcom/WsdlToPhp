<?php
/**
 * Class file for MicrosoftSmDhTypeGetLatestSensingTimeResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeGetLatestSensingTimeResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeGetLatestSensingTimeResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The GetLatestSensingTimeResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $GetLatestSensingTimeResult;
	/**
	 * Constructor
	 * @param dateTime GetLatestSensingTimeResult
	 * @return MicrosoftSmDhTypeGetLatestSensingTimeResponse
	 */
	public function __construct($_GetLatestSensingTimeResult)
	{
		parent::__construct(array('GetLatestSensingTimeResult'=>$_GetLatestSensingTimeResult));
	}
	/**
	 * Set GetLatestSensingTimeResult
	 * @param dateTime GetLatestSensingTimeResult
	 * @return dateTime
	 */
	public function setGetLatestSensingTimeResult($_GetLatestSensingTimeResult)
	{
		return ($this->GetLatestSensingTimeResult = $_GetLatestSensingTimeResult);
	}
	/**
	 * Get GetLatestSensingTimeResult
	 * @return dateTime
	 */
	public function getGetLatestSensingTimeResult()
	{
		return $this->GetLatestSensingTimeResult;
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