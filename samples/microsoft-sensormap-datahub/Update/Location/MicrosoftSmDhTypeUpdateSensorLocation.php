<?php
/**
 * Class file for MicrosoftSmDhTypeUpdateSensorLocation
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeUpdateSensorLocation
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeUpdateSensorLocation extends MicrosoftSmDhWsdlClass
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
	 * The lat
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $lat;
	/**
	 * The lon
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $lon;
	/**
	 * The alt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $alt;
	/**
	 * Constructor
	 * @param string publisherName
	 * @param string password
	 * @param string sensorName
	 * @param double lat
	 * @param double lon
	 * @param double alt
	 * @return MicrosoftSmDhTypeUpdateSensorLocation
	 */
	public function __construct($_publisherName = null,$_password = null,$_sensorName = null,$_lat,$_lon,$_alt)
	{
		parent::__construct(array('publisherName'=>$_publisherName,'password'=>$_password,'sensorName'=>$_sensorName,'lat'=>$_lat,'lon'=>$_lon,'alt'=>$_alt));
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
	 * Set lat
	 * @param double lat
	 * @return double
	 */
	public function setLat($_lat)
	{
		return ($this->lat = $_lat);
	}
	/**
	 * Get lat
	 * @return double
	 */
	public function getLat()
	{
		return $this->lat;
	}
	/**
	 * Set lon
	 * @param double lon
	 * @return double
	 */
	public function setLon($_lon)
	{
		return ($this->lon = $_lon);
	}
	/**
	 * Get lon
	 * @return double
	 */
	public function getLon()
	{
		return $this->lon;
	}
	/**
	 * Set alt
	 * @param double alt
	 * @return double
	 */
	public function setAlt($_alt)
	{
		return ($this->alt = $_alt);
	}
	/**
	 * Get alt
	 * @return double
	 */
	public function getAlt()
	{
		return $this->alt;
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