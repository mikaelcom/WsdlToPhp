<?php
/**
 * Class file for MicrosoftSmDhTypeGetLatestBinarySensorData
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeGetLatestBinarySensorData
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeGetLatestBinarySensorData extends MicrosoftSmDhWsdlClass
{
	/**
	 * The sensorName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $sensorName;
	/**
	 * The publisherName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $publisherName;
	/**
	 * Constructor
	 * @param string sensorName
	 * @param string publisherName
	 * @return MicrosoftSmDhTypeGetLatestBinarySensorData
	 */
	public function __construct($_sensorName = null,$_publisherName = null)
	{
		parent::__construct(array('sensorName'=>$_sensorName,'publisherName'=>$_publisherName));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>