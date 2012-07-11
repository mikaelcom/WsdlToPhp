<?php
/**
 * Class file for MicrosoftSmDhTypeSendScalarData
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeSendScalarData
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeSendScalarData extends MicrosoftSmDhWsdlClass
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
	 * The time
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $time;
	/**
	 * The data
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $data;
	/**
	 * Constructor
	 * @param string publisherName
	 * @param string password
	 * @param string sensorName
	 * @param dateTime time
	 * @param double data
	 * @return MicrosoftSmDhTypeSendScalarData
	 */
	public function __construct($_publisherName = null,$_password = null,$_sensorName = null,$_time,$_data)
	{
		parent::__construct(array('publisherName'=>$_publisherName,'password'=>$_password,'sensorName'=>$_sensorName,'time'=>$_time,'data'=>$_data));
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
	 * Set time
	 * @param dateTime time
	 * @return dateTime
	 */
	public function setTime($_time)
	{
		return ($this->time = $_time);
	}
	/**
	 * Get time
	 * @return dateTime
	 */
	public function getTime()
	{
		return $this->time;
	}
	/**
	 * Set data
	 * @param double data
	 * @return double
	 */
	public function setData($_data)
	{
		return ($this->data = $_data);
	}
	/**
	 * Get data
	 * @return double
	 */
	public function getData()
	{
		return $this->data;
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