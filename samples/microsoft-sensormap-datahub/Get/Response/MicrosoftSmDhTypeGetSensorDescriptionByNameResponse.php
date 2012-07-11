<?php
/**
 * Class file for MicrosoftSmDhTypeGetSensorDescriptionByNameResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeGetSensorDescriptionByNameResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeGetSensorDescriptionByNameResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The GetSensorDescriptionByNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetSensorDescriptionByNameResult;
	/**
	 * Constructor
	 * @param string GetSensorDescriptionByNameResult
	 * @return MicrosoftSmDhTypeGetSensorDescriptionByNameResponse
	 */
	public function __construct($_GetSensorDescriptionByNameResult = null)
	{
		parent::__construct(array('GetSensorDescriptionByNameResult'=>$_GetSensorDescriptionByNameResult));
	}
	/**
	 * Set GetSensorDescriptionByNameResult
	 * @param string GetSensorDescriptionByNameResult
	 * @return string
	 */
	public function setGetSensorDescriptionByNameResult($_GetSensorDescriptionByNameResult)
	{
		return ($this->GetSensorDescriptionByNameResult = $_GetSensorDescriptionByNameResult);
	}
	/**
	 * Get GetSensorDescriptionByNameResult
	 * @return string
	 */
	public function getGetSensorDescriptionByNameResult()
	{
		return $this->GetSensorDescriptionByNameResult;
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