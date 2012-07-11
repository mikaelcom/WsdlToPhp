<?php
/**
 * Class file for MicrosoftSmDhTypeUpdateSensorLocationResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeUpdateSensorLocationResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeUpdateSensorLocationResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The UpdateSensorLocationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UpdateSensorLocationResult;
	/**
	 * Constructor
	 * @param string UpdateSensorLocationResult
	 * @return MicrosoftSmDhTypeUpdateSensorLocationResponse
	 */
	public function __construct($_UpdateSensorLocationResult = null)
	{
		parent::__construct(array('UpdateSensorLocationResult'=>$_UpdateSensorLocationResult));
	}
	/**
	 * Set UpdateSensorLocationResult
	 * @param string UpdateSensorLocationResult
	 * @return string
	 */
	public function setUpdateSensorLocationResult($_UpdateSensorLocationResult)
	{
		return ($this->UpdateSensorLocationResult = $_UpdateSensorLocationResult);
	}
	/**
	 * Get UpdateSensorLocationResult
	 * @return string
	 */
	public function getUpdateSensorLocationResult()
	{
		return $this->UpdateSensorLocationResult;
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