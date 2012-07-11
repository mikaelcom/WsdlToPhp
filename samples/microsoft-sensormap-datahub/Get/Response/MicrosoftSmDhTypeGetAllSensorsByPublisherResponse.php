<?php
/**
 * Class file for MicrosoftSmDhTypeGetAllSensorsByPublisherResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeGetAllSensorsByPublisherResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeGetAllSensorsByPublisherResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The GetAllSensorsByPublisherResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAllSensorsByPublisherResult;
	/**
	 * Constructor
	 * @param string GetAllSensorsByPublisherResult
	 * @return MicrosoftSmDhTypeGetAllSensorsByPublisherResponse
	 */
	public function __construct($_GetAllSensorsByPublisherResult = null)
	{
		parent::__construct(array('GetAllSensorsByPublisherResult'=>$_GetAllSensorsByPublisherResult));
	}
	/**
	 * Set GetAllSensorsByPublisherResult
	 * @param string GetAllSensorsByPublisherResult
	 * @return string
	 */
	public function setGetAllSensorsByPublisherResult($_GetAllSensorsByPublisherResult)
	{
		return ($this->GetAllSensorsByPublisherResult = $_GetAllSensorsByPublisherResult);
	}
	/**
	 * Get GetAllSensorsByPublisherResult
	 * @return string
	 */
	public function getGetAllSensorsByPublisherResult()
	{
		return $this->GetAllSensorsByPublisherResult;
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