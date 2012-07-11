<?php
/**
 * Class file for MicrosoftSmDhTypeIsDataYoungerThan
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeIsDataYoungerThan
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeIsDataYoungerThan extends MicrosoftSmDhWsdlClass
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
	 * The milliSeconds
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $milliSeconds;
	/**
	 * Constructor
	 * @param string sensorName
	 * @param string publisherName
	 * @param long milliSeconds
	 * @return MicrosoftSmDhTypeIsDataYoungerThan
	 */
	public function __construct($_sensorName = null,$_publisherName = null,$_milliSeconds)
	{
		parent::__construct(array('sensorName'=>$_sensorName,'publisherName'=>$_publisherName,'milliSeconds'=>$_milliSeconds));
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
	 * Set milliSeconds
	 * @param long milliSeconds
	 * @return long
	 */
	public function setMilliSeconds($_milliSeconds)
	{
		return ($this->milliSeconds = $_milliSeconds);
	}
	/**
	 * Get milliSeconds
	 * @return long
	 */
	public function getMilliSeconds()
	{
		return $this->milliSeconds;
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