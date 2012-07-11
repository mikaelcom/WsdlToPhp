<?php
/**
 * Class file for SOGeoPhoneWirelessTypeProvider
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneWirelessTypeProvider
 * @date 08/07/2012
 */
class SOGeoPhoneWirelessTypeProvider extends SOGeoPhoneWirelessWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The LineType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LineType;
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
	 * The Quality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Quality;
	/**
	 * Constructor
	 * @param string Name
	 * @param string City
	 * @param string State
	 * @param string LineType
	 * @param string Latitude
	 * @param string Longitude
	 * @param string Quality
	 * @return SOGeoPhoneWirelessTypeProvider
	 */
	public function __construct($_Name = null,$_City = null,$_State = null,$_LineType = null,$_Latitude = null,$_Longitude = null,$_Quality = null)
	{
		parent::__construct(array('Name'=>$_Name,'City'=>$_City,'State'=>$_State,'LineType'=>$_LineType,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'Quality'=>$_Quality));
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
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set LineType
	 * @param string LineType
	 * @return string
	 */
	public function setLineType($_LineType)
	{
		return ($this->LineType = $_LineType);
	}
	/**
	 * Get LineType
	 * @return string
	 */
	public function getLineType()
	{
		return $this->LineType;
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
	 * Set Quality
	 * @param string Quality
	 * @return string
	 */
	public function setQuality($_Quality)
	{
		return ($this->Quality = $_Quality);
	}
	/**
	 * Get Quality
	 * @return string
	 */
	public function getQuality()
	{
		return $this->Quality;
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