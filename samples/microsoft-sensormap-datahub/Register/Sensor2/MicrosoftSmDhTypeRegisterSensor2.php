<?php
/**
 * Class file for MicrosoftSmDhTypeRegisterSensor2
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeRegisterSensor2
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeRegisterSensor2 extends MicrosoftSmDhWsdlClass
{
	/**
	 * The publisherName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $publisherName;
	/**
	 * The password
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $password;
	/**
	 * The Sensor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var MicrosoftSmDhTypeSensorInfo
	 */
	public $Sensor;
	/**
	 * Constructor
	 * @param string publisherName
	 * @param string password
	 * @param MicrosoftSmDhTypeSensorInfo Sensor
	 * @return MicrosoftSmDhTypeRegisterSensor2
	 */
	public function __construct($_publisherName = null,$_password = null,$_Sensor = null)
	{
		parent::__construct(array('publisherName'=>$_publisherName,'password'=>$_password,'Sensor'=>$_Sensor));
	}
	/**
	 * Set publisherName
	 * @param string publisherName
	 * @return string
	 */
	public function setPublisherName($_publisherName)
	{
		return ($this->publisherName = $_publisherName);
	}
	/**
	 * Get publisherName
	 * @return string
	 */
	public function getPublisherName()
	{
		return $this->publisherName;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set Sensor
	 * @param SensorInfo Sensor
	 * @return SensorInfo
	 */
	public function setSensor($_Sensor)
	{
		return ($this->Sensor = $_Sensor);
	}
	/**
	 * Get Sensor
	 * @return MicrosoftSmDhTypeSensorInfo
	 */
	public function getSensor()
	{
		return $this->Sensor;
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