<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeMetric
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeMetric
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeMetric extends LifePicsWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Longitude;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Latitude;
	/**
	 * The PickupOnly
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PickupOnly;
	/**
	 * The IsMetric
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsMetric;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string Longitude
	 * @param string Latitude
	 * @param boolean PickupOnly
	 * @param boolean IsMetric
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeMetric
	 */
	public function __construct($_SessionID = null,$_Longitude = null,$_Latitude = null,$_PickupOnly,$_IsMetric)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'Longitude'=>$_Longitude,'Latitude'=>$_Latitude,'PickupOnly'=>$_PickupOnly,'IsMetric'=>$_IsMetric));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
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
	 * Set PickupOnly
	 * @param boolean PickupOnly
	 * @return boolean
	 */
	public function setPickupOnly($_PickupOnly)
	{
		return ($this->PickupOnly = $_PickupOnly);
	}
	/**
	 * Get PickupOnly
	 * @return boolean
	 */
	public function getPickupOnly()
	{
		return $this->PickupOnly;
	}
	/**
	 * Set IsMetric
	 * @param boolean IsMetric
	 * @return boolean
	 */
	public function setIsMetric($_IsMetric)
	{
		return ($this->IsMetric = $_IsMetric);
	}
	/**
	 * Get IsMetric
	 * @return boolean
	 */
	public function getIsMetric()
	{
		return $this->IsMetric;
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