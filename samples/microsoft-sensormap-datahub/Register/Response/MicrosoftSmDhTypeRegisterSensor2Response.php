<?php
/**
 * Class file for MicrosoftSmDhTypeRegisterSensor2Response
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeRegisterSensor2Response
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeRegisterSensor2Response extends MicrosoftSmDhWsdlClass
{
	/**
	 * The RegisterSensor2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RegisterSensor2Result;
	/**
	 * Constructor
	 * @param string RegisterSensor2Result
	 * @return MicrosoftSmDhTypeRegisterSensor2Response
	 */
	public function __construct($_RegisterSensor2Result = null)
	{
		parent::__construct(array('RegisterSensor2Result'=>$_RegisterSensor2Result));
	}
	/**
	 * Set RegisterSensor2Result
	 * @param string RegisterSensor2Result
	 * @return string
	 */
	public function setRegisterSensor2Result($_RegisterSensor2Result)
	{
		return ($this->RegisterSensor2Result = $_RegisterSensor2Result);
	}
	/**
	 * Get RegisterSensor2Result
	 * @return string
	 */
	public function getRegisterSensor2Result()
	{
		return $this->RegisterSensor2Result;
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