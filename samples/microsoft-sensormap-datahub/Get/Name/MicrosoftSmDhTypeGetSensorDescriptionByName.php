<?php
/**
 * Class file for MicrosoftSmDhTypeGetSensorDescriptionByName
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeGetSensorDescriptionByName
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeGetSensorDescriptionByName extends MicrosoftSmDhWsdlClass
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
	 * The sensorName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $sensorName;
	/**
	 * Constructor
	 * @param string publisherName
	 * @param string password
	 * @param string sensorName
	 * @return MicrosoftSmDhTypeGetSensorDescriptionByName
	 */
	public function __construct($_publisherName = null,$_password = null,$_sensorName = null)
	{
		parent::__construct(array('publisherName'=>$_publisherName,'password'=>$_password,'sensorName'=>$_sensorName));
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
	 * Set sensorName
	 * @param string sensorName
	 * @return string
	 */
	public function setSensorName($_sensorName)
	{
		return ($this->sensorName = $_sensorName);
	}
	/**
	 * Get sensorName
	 * @return string
	 */
	public function getSensorName()
	{
		return $this->sensorName;
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