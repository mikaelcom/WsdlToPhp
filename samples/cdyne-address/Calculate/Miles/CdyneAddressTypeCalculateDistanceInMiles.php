<?php
/**
 * Class file for CdyneAddressTypeCalculateDistanceInMiles
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeCalculateDistanceInMiles
 * @date 02/07/2012
 */
class CdyneAddressTypeCalculateDistanceInMiles extends CdyneAddressWsdlClass
{
	/**
	 * The latitude1
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $latitude1;
	/**
	 * The longitude1
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $longitude1;
	/**
	 * The latitude2
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $latitude2;
	/**
	 * The longitude2
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $longitude2;
	/**
	 * Constructor
	 * @param double latitude1
	 * @param double longitude1
	 * @param double latitude2
	 * @param double longitude2
	 * @return CdyneAddressTypeCalculateDistanceInMiles
	 */
	public function __construct($_latitude1,$_longitude1,$_latitude2,$_longitude2)
	{
		parent::__construct(array('latitude1'=>$_latitude1,'longitude1'=>$_longitude1,'latitude2'=>$_latitude2,'longitude2'=>$_longitude2));
	}
	/**
	 * Set latitude1
	 * @param double latitude1
	 * @return double
	 */
	public function setLatitude1($_latitude1)
	{
		return ($this->latitude1 = $_latitude1);
	}
	/**
	 * Get latitude1
	 * @return double
	 */
	public function getLatitude1()
	{
		return $this->latitude1;
	}
	/**
	 * Set longitude1
	 * @param double longitude1
	 * @return double
	 */
	public function setLongitude1($_longitude1)
	{
		return ($this->longitude1 = $_longitude1);
	}
	/**
	 * Get longitude1
	 * @return double
	 */
	public function getLongitude1()
	{
		return $this->longitude1;
	}
	/**
	 * Set latitude2
	 * @param double latitude2
	 * @return double
	 */
	public function setLatitude2($_latitude2)
	{
		return ($this->latitude2 = $_latitude2);
	}
	/**
	 * Get latitude2
	 * @return double
	 */
	public function getLatitude2()
	{
		return $this->latitude2;
	}
	/**
	 * Set longitude2
	 * @param double longitude2
	 * @return double
	 */
	public function setLongitude2($_longitude2)
	{
		return ($this->longitude2 = $_longitude2);
	}
	/**
	 * Get longitude2
	 * @return double
	 */
	public function getLongitude2()
	{
		return $this->longitude2;
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