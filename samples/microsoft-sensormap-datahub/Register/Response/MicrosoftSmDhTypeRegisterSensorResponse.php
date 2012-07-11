<?php
/**
 * Class file for MicrosoftSmDhTypeRegisterSensorResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeRegisterSensorResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeRegisterSensorResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The RegisterSensorResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RegisterSensorResult;
	/**
	 * Constructor
	 * @param string RegisterSensorResult
	 * @return MicrosoftSmDhTypeRegisterSensorResponse
	 */
	public function __construct($_RegisterSensorResult = null)
	{
		parent::__construct(array('RegisterSensorResult'=>$_RegisterSensorResult));
	}
	/**
	 * Set RegisterSensorResult
	 * @param string RegisterSensorResult
	 * @return string
	 */
	public function setRegisterSensorResult($_RegisterSensorResult)
	{
		return ($this->RegisterSensorResult = $_RegisterSensorResult);
	}
	/**
	 * Get RegisterSensorResult
	 * @return string
	 */
	public function getRegisterSensorResult()
	{
		return $this->RegisterSensorResult;
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