<?php
/**
 * Class file for MicrosoftSmDhTypeRegisterSensor
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeRegisterSensor
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeRegisterSensor extends MicrosoftSmDhWsdlClass
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
	 * The sensorDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $sensorDescription;
	/**
	 * Constructor
	 * @param string publisherName
	 * @param string password
	 * @param string sensorDescription
	 * @return MicrosoftSmDhTypeRegisterSensor
	 */
	public function __construct($_publisherName = null,$_password = null,$_sensorDescription = null)
	{
		parent::__construct(array('publisherName'=>$_publisherName,'password'=>$_password,'sensorDescription'=>$_sensorDescription));
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
	 * Set sensorDescription
	 * @param string sensorDescription
	 * @return string
	 */
	public function setSensorDescription($_sensorDescription)
	{
		return ($this->sensorDescription = $_sensorDescription);
	}
	/**
	 * Get sensorDescription
	 * @return string
	 */
	public function getSensorDescription()
	{
		return $this->sensorDescription;
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