<?php
/**
 * Class file for SOGeoCoderTypeDistanceToWaterInfo
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeDistanceToWaterInfo
 * @date 05/07/2012
 */
class SOGeoCoderTypeDistanceToWaterInfo extends SOGeoCoderWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeErr
	 */
	public $Error;
	/**
	 * The MilesToWater
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MilesToWater;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Longitude;
	/**
	 * The ClosestWaterLatitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ClosestWaterLatitude;
	/**
	 * The ClosestWaterLongitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ClosestWaterLongitude;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeErr Error
	 * @param string MilesToWater
	 * @param string Latitude
	 * @param string Longitude
	 * @param string ClosestWaterLatitude
	 * @param string ClosestWaterLongitude
	 * @return SOGeoCoderTypeDistanceToWaterInfo
	 */
	public function __construct($_Error = null,$_MilesToWater = null,$_Latitude = null,$_Longitude = null,$_ClosestWaterLatitude = null,$_ClosestWaterLongitude = null)
	{
		parent::__construct(array('Error'=>$_Error,'MilesToWater'=>$_MilesToWater,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'ClosestWaterLatitude'=>$_ClosestWaterLatitude,'ClosestWaterLongitude'=>$_ClosestWaterLongitude));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOGeoCoderTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set MilesToWater
	 * @param string MilesToWater
	 * @return string
	 */
	public function setMilesToWater($_MilesToWater)
	{
		return ($this->MilesToWater = $_MilesToWater);
	}
	/**
	 * Get MilesToWater
	 * @return string
	 */
	public function getMilesToWater()
	{
		return $this->MilesToWater;
	}
	/**
	 * Set Latitude
	 * @param string Latitude
	 * @return string
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return string
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Longitude
	 * @param string Longitude
	 * @return string
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return string
	 */
	public function getLongitude()
	{
		return $this->Longitude;
	}
	/**
	 * Set ClosestWaterLatitude
	 * @param string ClosestWaterLatitude
	 * @return string
	 */
	public function setClosestWaterLatitude($_ClosestWaterLatitude)
	{
		return ($this->ClosestWaterLatitude = $_ClosestWaterLatitude);
	}
	/**
	 * Get ClosestWaterLatitude
	 * @return string
	 */
	public function getClosestWaterLatitude()
	{
		return $this->ClosestWaterLatitude;
	}
	/**
	 * Set ClosestWaterLongitude
	 * @param string ClosestWaterLongitude
	 * @return string
	 */
	public function setClosestWaterLongitude($_ClosestWaterLongitude)
	{
		return ($this->ClosestWaterLongitude = $_ClosestWaterLongitude);
	}
	/**
	 * Get ClosestWaterLongitude
	 * @return string
	 */
	public function getClosestWaterLongitude()
	{
		return $this->ClosestWaterLongitude;
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