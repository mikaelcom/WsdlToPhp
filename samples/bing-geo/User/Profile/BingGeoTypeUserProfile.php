<?php
/**
 * Class file for BingGeoTypeUserProfile
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeUserProfile
 * @date 02/07/2012
 */
class BingGeoTypeUserProfile extends BingGeoWsdlClass
{
	/**
	 * The CurrentHeading
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeHeading
	 */
	public $CurrentHeading;
	/**
	 * The CurrentLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeUserLocation
	 */
	public $CurrentLocation;
	/**
	 * The DeviceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var BingGeoTypeDeviceType
	 */
	public $DeviceType;
	/**
	 * The DistanceUnit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var BingGeoTypeDistanceUnit
	 */
	public $DistanceUnit;
	/**
	 * The IPAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $IPAddress;
	/**
	 * The MapView
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeShapeBase
	 */
	public $MapView;
	/**
	 * The ScreenSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeSizeOfint
	 */
	public $ScreenSize;
	/**
	 * Constructor
	 * @param BingGeoTypeHeading CurrentHeading
	 * @param BingGeoTypeUserLocation CurrentLocation
	 * @param BingGeoTypeDeviceType DeviceType
	 * @param BingGeoTypeDistanceUnit DistanceUnit
	 * @param string IPAddress
	 * @param BingGeoTypeShapeBase MapView
	 * @param BingGeoTypeSizeOfint ScreenSize
	 * @return BingGeoTypeUserProfile
	 */
	public function __construct($_CurrentHeading = null,$_CurrentLocation = null,$_DeviceType = null,$_DistanceUnit = null,$_IPAddress = null,$_MapView = null,$_ScreenSize = null)
	{
		parent::__construct(array('CurrentHeading'=>$_CurrentHeading,'CurrentLocation'=>$_CurrentLocation,'DeviceType'=>$_DeviceType,'DistanceUnit'=>$_DistanceUnit,'IPAddress'=>$_IPAddress,'MapView'=>$_MapView,'ScreenSize'=>$_ScreenSize));
	}
	/**
	 * Set CurrentHeading
	 * @param Heading CurrentHeading
	 * @return Heading
	 */
	public function setCurrentHeading($_CurrentHeading)
	{
		return ($this->CurrentHeading = $_CurrentHeading);
	}
	/**
	 * Get CurrentHeading
	 * @return BingGeoTypeHeading
	 */
	public function getCurrentHeading()
	{
		return $this->CurrentHeading;
	}
	/**
	 * Set CurrentLocation
	 * @param UserLocation CurrentLocation
	 * @return UserLocation
	 */
	public function setCurrentLocation($_CurrentLocation)
	{
		return ($this->CurrentLocation = $_CurrentLocation);
	}
	/**
	 * Get CurrentLocation
	 * @return BingGeoTypeUserLocation
	 */
	public function getCurrentLocation()
	{
		return $this->CurrentLocation;
	}
	/**
	 * Set DeviceType
	 * @param DeviceType DeviceType
	 * @return DeviceType
	 */
	public function setDeviceType($_DeviceType)
	{
		return ($this->DeviceType = BingGeoTypeDeviceType::valueIsValid($_DeviceType)?$_DeviceType:null);
	}
	/**
	 * Get DeviceType
	 * @return BingGeoTypeDeviceType
	 */
	public function getDeviceType()
	{
		return $this->DeviceType;
	}
	/**
	 * Set DistanceUnit
	 * @param DistanceUnit DistanceUnit
	 * @return DistanceUnit
	 */
	public function setDistanceUnit($_DistanceUnit)
	{
		return ($this->DistanceUnit = BingGeoTypeDistanceUnit::valueIsValid($_DistanceUnit)?$_DistanceUnit:null);
	}
	/**
	 * Get DistanceUnit
	 * @return BingGeoTypeDistanceUnit
	 */
	public function getDistanceUnit()
	{
		return $this->DistanceUnit;
	}
	/**
	 * Set IPAddress
	 * @param string IPAddress
	 * @return string
	 */
	public function setIPAddress($_IPAddress)
	{
		return ($this->IPAddress = $_IPAddress);
	}
	/**
	 * Get IPAddress
	 * @return string
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}
	/**
	 * Set MapView
	 * @param ShapeBase MapView
	 * @return ShapeBase
	 */
	public function setMapView($_MapView)
	{
		return ($this->MapView = $_MapView);
	}
	/**
	 * Get MapView
	 * @return BingGeoTypeShapeBase
	 */
	public function getMapView()
	{
		return $this->MapView;
	}
	/**
	 * Set ScreenSize
	 * @param SizeOfint ScreenSize
	 * @return SizeOfint
	 */
	public function setScreenSize($_ScreenSize)
	{
		return ($this->ScreenSize = $_ScreenSize);
	}
	/**
	 * Get ScreenSize
	 * @return BingGeoTypeSizeOfint
	 */
	public function getScreenSize()
	{
		return $this->ScreenSize;
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