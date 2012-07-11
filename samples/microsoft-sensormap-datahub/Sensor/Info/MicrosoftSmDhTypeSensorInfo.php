<?php
/**
 * Class file for MicrosoftSmDhTypeSensorInfo
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeSensorInfo
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeSensorInfo extends MicrosoftSmDhWsdlClass
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
	 * The publisherID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $publisherID;
	/**
	 * The sensorName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $sensorName;
	/**
	 * The longitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $longitude;
	/**
	 * The latitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $latitude;
	/**
	 * The altitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $altitude;
	/**
	 * The unit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $unit;
	/**
	 * The sensorType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $sensorType;
	/**
	 * The url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $url;
	/**
	 * The keywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $keywords;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $description;
	/**
	 * The dataType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $dataType;
	/**
	 * The samplingPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $samplingPeriod;
	/**
	 * The reportPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $reportPeriod;
	/**
	 * The entryTime
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $entryTime;
	/**
	 * Constructor
	 * @param string publisherName
	 * @param string publisherID
	 * @param string sensorName
	 * @param double longitude
	 * @param double latitude
	 * @param double altitude
	 * @param string unit
	 * @param string sensorType
	 * @param string url
	 * @param string keywords
	 * @param string description
	 * @param string dataType
	 * @param double samplingPeriod
	 * @param double reportPeriod
	 * @param dateTime entryTime
	 * @return MicrosoftSmDhTypeSensorInfo
	 */
	public function __construct($_publisherName = null,$_publisherID = null,$_sensorName = null,$_longitude,$_latitude,$_altitude,$_unit = null,$_sensorType = null,$_url = null,$_keywords = null,$_description = null,$_dataType = null,$_samplingPeriod,$_reportPeriod,$_entryTime)
	{
		parent::__construct(array('publisherName'=>$_publisherName,'publisherID'=>$_publisherID,'sensorName'=>$_sensorName,'longitude'=>$_longitude,'latitude'=>$_latitude,'altitude'=>$_altitude,'unit'=>$_unit,'sensorType'=>$_sensorType,'url'=>$_url,'keywords'=>$_keywords,'description'=>$_description,'dataType'=>$_dataType,'samplingPeriod'=>$_samplingPeriod,'reportPeriod'=>$_reportPeriod,'entryTime'=>$_entryTime));
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
	 * Set publisherID
	 * @param string publisherID
	 * @return string
	 */
	public function setPublisherID($_publisherID)
	{
		return ($this->publisherID = $_publisherID);
	}
	/**
	 * Get publisherID
	 * @return string
	 */
	public function getPublisherID()
	{
		return $this->publisherID;
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
	 * Set longitude
	 * @param double longitude
	 * @return double
	 */
	public function setLongitude($_longitude)
	{
		return ($this->longitude = $_longitude);
	}
	/**
	 * Get longitude
	 * @return double
	 */
	public function getLongitude()
	{
		return $this->longitude;
	}
	/**
	 * Set latitude
	 * @param double latitude
	 * @return double
	 */
	public function setLatitude($_latitude)
	{
		return ($this->latitude = $_latitude);
	}
	/**
	 * Get latitude
	 * @return double
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}
	/**
	 * Set altitude
	 * @param double altitude
	 * @return double
	 */
	public function setAltitude($_altitude)
	{
		return ($this->altitude = $_altitude);
	}
	/**
	 * Get altitude
	 * @return double
	 */
	public function getAltitude()
	{
		return $this->altitude;
	}
	/**
	 * Set unit
	 * @param string unit
	 * @return string
	 */
	public function setUnit($_unit)
	{
		return ($this->unit = $_unit);
	}
	/**
	 * Get unit
	 * @return string
	 */
	public function getUnit()
	{
		return $this->unit;
	}
	/**
	 * Set sensorType
	 * @param string sensorType
	 * @return string
	 */
	public function setSensorType($_sensorType)
	{
		return ($this->sensorType = $_sensorType);
	}
	/**
	 * Get sensorType
	 * @return string
	 */
	public function getSensorType()
	{
		return $this->sensorType;
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set keywords
	 * @param string keywords
	 * @return string
	 */
	public function setKeywords($_keywords)
	{
		return ($this->keywords = $_keywords);
	}
	/**
	 * Get keywords
	 * @return string
	 */
	public function getKeywords()
	{
		return $this->keywords;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set dataType
	 * @param string dataType
	 * @return string
	 */
	public function setDataType($_dataType)
	{
		return ($this->dataType = $_dataType);
	}
	/**
	 * Get dataType
	 * @return string
	 */
	public function getDataType()
	{
		return $this->dataType;
	}
	/**
	 * Set samplingPeriod
	 * @param double samplingPeriod
	 * @return double
	 */
	public function setSamplingPeriod($_samplingPeriod)
	{
		return ($this->samplingPeriod = $_samplingPeriod);
	}
	/**
	 * Get samplingPeriod
	 * @return double
	 */
	public function getSamplingPeriod()
	{
		return $this->samplingPeriod;
	}
	/**
	 * Set reportPeriod
	 * @param double reportPeriod
	 * @return double
	 */
	public function setReportPeriod($_reportPeriod)
	{
		return ($this->reportPeriod = $_reportPeriod);
	}
	/**
	 * Get reportPeriod
	 * @return double
	 */
	public function getReportPeriod()
	{
		return $this->reportPeriod;
	}
	/**
	 * Set entryTime
	 * @param dateTime entryTime
	 * @return dateTime
	 */
	public function setEntryTime($_entryTime)
	{
		return ($this->entryTime = $_entryTime);
	}
	/**
	 * Get entryTime
	 * @return dateTime
	 */
	public function getEntryTime()
	{
		return $this->entryTime;
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