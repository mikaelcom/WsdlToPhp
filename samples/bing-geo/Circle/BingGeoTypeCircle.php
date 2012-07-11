<?php
/**
 * Class file for BingGeoTypeCircle
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeCircle
 * @date 02/07/2012
 */
class BingGeoTypeCircle extends BingGeoTypeShapeBase
{
	/**
	 * The Center
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeLocation
	 */
	public $Center;
	/**
	 * The DistanceUnit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var BingGeoTypeDistanceUnit
	 */
	public $DistanceUnit;
	/**
	 * The Radius
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var double
	 */
	public $Radius;
	/**
	 * Constructor
	 * @param BingGeoTypeLocation Center
	 * @param BingGeoTypeDistanceUnit DistanceUnit
	 * @param double Radius
	 * @return BingGeoTypeCircle
	 */
	public function __construct($_Center = null,$_DistanceUnit = null,$_Radius = null)
	{
		BingGeoWsdlClass::__construct(array('Center'=>$_Center,'DistanceUnit'=>$_DistanceUnit,'Radius'=>$_Radius));
	}
	/**
	 * Set Center
	 * @param Location Center
	 * @return Location
	 */
	public function setCenter($_Center)
	{
		return ($this->Center = $_Center);
	}
	/**
	 * Get Center
	 * @return BingGeoTypeLocation
	 */
	public function getCenter()
	{
		return $this->Center;
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
	 * Set Radius
	 * @param double Radius
	 * @return double
	 */
	public function setRadius($_Radius)
	{
		return ($this->Radius = $_Radius);
	}
	/**
	 * Get Radius
	 * @return double
	 */
	public function getRadius()
	{
		return $this->Radius;
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