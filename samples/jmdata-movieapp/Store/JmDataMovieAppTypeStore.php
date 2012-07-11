<?php
/**
 * Class file for JmDataMovieAppTypeStore
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeStore
 * @date 10/07/2012
 */
class JmDataMovieAppTypeStore extends JmDataMovieAppWsdlClass
{
	/**
	 * The ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ID;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Longitude;
	/**
	 * The Distance
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Distance;
	/**
	 * The AllowReservation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AllowReservation;
	/**
	 * Constructor
	 * @param int ID
	 * @param string Name
	 * @param string Address
	 * @param double Latitude
	 * @param double Longitude
	 * @param double Distance
	 * @param boolean AllowReservation
	 * @return JmDataMovieAppTypeStore
	 */
	public function __construct($_ID,$_Name = null,$_Address = null,$_Latitude,$_Longitude,$_Distance,$_AllowReservation)
	{
		parent::__construct(array('ID'=>$_ID,'Name'=>$_Name,'Address'=>$_Address,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'Distance'=>$_Distance,'AllowReservation'=>$_AllowReservation));
	}
	/**
	 * Set ID
	 * @param int ID
	 * @return int
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return int
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Address
	 * @param string Address
	 * @return string
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set Latitude
	 * @param double Latitude
	 * @return double
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return double
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Longitude
	 * @param double Longitude
	 * @return double
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return double
	 */
	public function getLongitude()
	{
		return $this->Longitude;
	}
	/**
	 * Set Distance
	 * @param double Distance
	 * @return double
	 */
	public function setDistance($_Distance)
	{
		return ($this->Distance = $_Distance);
	}
	/**
	 * Get Distance
	 * @return double
	 */
	public function getDistance()
	{
		return $this->Distance;
	}
	/**
	 * Set AllowReservation
	 * @param boolean AllowReservation
	 * @return boolean
	 */
	public function setAllowReservation($_AllowReservation)
	{
		return ($this->AllowReservation = $_AllowReservation);
	}
	/**
	 * Get AllowReservation
	 * @return boolean
	 */
	public function getAllowReservation()
	{
		return $this->AllowReservation;
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