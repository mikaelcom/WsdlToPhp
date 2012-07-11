<?php
/**
 * Class file for SOPhoneExchangeTypeProvider
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeTypeProvider
 * @date 08/07/2012
 */
class SOPhoneExchangeTypeProvider extends SOPhoneExchangeWsdlClass
{
	/**
	 * The PhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumber;
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
	 * The NumberErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NumberErrorCode;
	/**
	 * The NumberErrorStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NumberErrorStatus;
	/**
	 * Constructor
	 * @param string PhoneNumber
	 * @param string Name
	 * @param string City
	 * @param string State
	 * @param string LineType
	 * @param string Latitude
	 * @param string Longitude
	 * @param string NumberErrorCode
	 * @param string NumberErrorStatus
	 * @return SOPhoneExchangeTypeProvider
	 */
	public function __construct($_PhoneNumber = null,$_Name = null,$_City = null,$_State = null,$_LineType = null,$_Latitude = null,$_Longitude = null,$_NumberErrorCode = null,$_NumberErrorStatus = null)
	{
		parent::__construct(array('PhoneNumber'=>$_PhoneNumber,'Name'=>$_Name,'City'=>$_City,'State'=>$_State,'LineType'=>$_LineType,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'NumberErrorCode'=>$_NumberErrorCode,'NumberErrorStatus'=>$_NumberErrorStatus));
	}
	/**
	 * Set PhoneNumber
	 * @param string PhoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_PhoneNumber)
	{
		return ($this->PhoneNumber = $_PhoneNumber);
	}
	/**
	 * Get PhoneNumber
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->PhoneNumber;
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
	 * Set NumberErrorCode
	 * @param string NumberErrorCode
	 * @return string
	 */
	public function setNumberErrorCode($_NumberErrorCode)
	{
		return ($this->NumberErrorCode = $_NumberErrorCode);
	}
	/**
	 * Get NumberErrorCode
	 * @return string
	 */
	public function getNumberErrorCode()
	{
		return $this->NumberErrorCode;
	}
	/**
	 * Set NumberErrorStatus
	 * @param string NumberErrorStatus
	 * @return string
	 */
	public function setNumberErrorStatus($_NumberErrorStatus)
	{
		return ($this->NumberErrorStatus = $_NumberErrorStatus);
	}
	/**
	 * Get NumberErrorStatus
	 * @return string
	 */
	public function getNumberErrorStatus()
	{
		return $this->NumberErrorStatus;
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