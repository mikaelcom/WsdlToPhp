<?php
/**
 * Class file for RFAirportTypeAirport
 * @date 15/08/2012
 */
/**
 * Class RFAirportTypeAirport
 * @date 15/08/2012
 */
class RFAirportTypeAirport extends RFAirportWsdlClass
{
	/**
	 * The AirportName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $AirportName;
	/**
	 * The Altitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Altitude;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $City;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Country;
	/**
	 * The Iata
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Iata;
	/**
	 * The Icao
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Icao;
	/**
	 * The LatitudeDegrees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var int
	 */
	public $LatitudeDegrees;
	/**
	 * The LatitudeDirection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LatitudeDirection;
	/**
	 * The LatitudeMinutes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var int
	 */
	public $LatitudeMinutes;
	/**
	 * The LatitudeSeconds
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var int
	 */
	public $LatitudeSeconds;
	/**
	 * The LongitudeDegrees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var int
	 */
	public $LongitudeDegrees;
	/**
	 * The LongitudeDirection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LongitudeDirection;
	/**
	 * The LongitudeMinutes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var int
	 */
	public $LongitudeMinutes;
	/**
	 * The LongitudeSeconds
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var int
	 */
	public $LongitudeSeconds;
	/**
	 * Constructor
	 * @param string AirportName
	 * @param string Altitude
	 * @param string City
	 * @param string Country
	 * @param string Iata
	 * @param string Icao
	 * @param int LatitudeDegrees
	 * @param string LatitudeDirection
	 * @param int LatitudeMinutes
	 * @param int LatitudeSeconds
	 * @param int LongitudeDegrees
	 * @param string LongitudeDirection
	 * @param int LongitudeMinutes
	 * @param int LongitudeSeconds
	 * @return RFAirportTypeAirport
	 */
	public function __construct($_AirportName = null,$_Altitude = null,$_City = null,$_Country = null,$_Iata = null,$_Icao = null,$_LatitudeDegrees = null,$_LatitudeDirection = null,$_LatitudeMinutes = null,$_LatitudeSeconds = null,$_LongitudeDegrees = null,$_LongitudeDirection = null,$_LongitudeMinutes = null,$_LongitudeSeconds = null)
	{
		parent::__construct(array('AirportName'=>$_AirportName,'Altitude'=>$_Altitude,'City'=>$_City,'Country'=>$_Country,'Iata'=>$_Iata,'Icao'=>$_Icao,'LatitudeDegrees'=>$_LatitudeDegrees,'LatitudeDirection'=>$_LatitudeDirection,'LatitudeMinutes'=>$_LatitudeMinutes,'LatitudeSeconds'=>$_LatitudeSeconds,'LongitudeDegrees'=>$_LongitudeDegrees,'LongitudeDirection'=>$_LongitudeDirection,'LongitudeMinutes'=>$_LongitudeMinutes,'LongitudeSeconds'=>$_LongitudeSeconds));
	}
	/**
	 * Set AirportName
	 * @param string AirportName
	 * @return string
	 */
	public function setAirportName($_AirportName)
	{
		return ($this->AirportName = $_AirportName);
	}
	/**
	 * Get AirportName
	 * @return string
	 */
	public function getAirportName()
	{
		return $this->AirportName;
	}
	/**
	 * Set Altitude
	 * @param string Altitude
	 * @return string
	 */
	public function setAltitude($_Altitude)
	{
		return ($this->Altitude = $_Altitude);
	}
	/**
	 * Get Altitude
	 * @return string
	 */
	public function getAltitude()
	{
		return $this->Altitude;
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
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Iata
	 * @param string Iata
	 * @return string
	 */
	public function setIata($_Iata)
	{
		return ($this->Iata = $_Iata);
	}
	/**
	 * Get Iata
	 * @return string
	 */
	public function getIata()
	{
		return $this->Iata;
	}
	/**
	 * Set Icao
	 * @param string Icao
	 * @return string
	 */
	public function setIcao($_Icao)
	{
		return ($this->Icao = $_Icao);
	}
	/**
	 * Get Icao
	 * @return string
	 */
	public function getIcao()
	{
		return $this->Icao;
	}
	/**
	 * Set LatitudeDegrees
	 * @param int LatitudeDegrees
	 * @return int
	 */
	public function setLatitudeDegrees($_LatitudeDegrees)
	{
		return ($this->LatitudeDegrees = $_LatitudeDegrees);
	}
	/**
	 * Get LatitudeDegrees
	 * @return int
	 */
	public function getLatitudeDegrees()
	{
		return $this->LatitudeDegrees;
	}
	/**
	 * Set LatitudeDirection
	 * @param string LatitudeDirection
	 * @return string
	 */
	public function setLatitudeDirection($_LatitudeDirection)
	{
		return ($this->LatitudeDirection = $_LatitudeDirection);
	}
	/**
	 * Get LatitudeDirection
	 * @return string
	 */
	public function getLatitudeDirection()
	{
		return $this->LatitudeDirection;
	}
	/**
	 * Set LatitudeMinutes
	 * @param int LatitudeMinutes
	 * @return int
	 */
	public function setLatitudeMinutes($_LatitudeMinutes)
	{
		return ($this->LatitudeMinutes = $_LatitudeMinutes);
	}
	/**
	 * Get LatitudeMinutes
	 * @return int
	 */
	public function getLatitudeMinutes()
	{
		return $this->LatitudeMinutes;
	}
	/**
	 * Set LatitudeSeconds
	 * @param int LatitudeSeconds
	 * @return int
	 */
	public function setLatitudeSeconds($_LatitudeSeconds)
	{
		return ($this->LatitudeSeconds = $_LatitudeSeconds);
	}
	/**
	 * Get LatitudeSeconds
	 * @return int
	 */
	public function getLatitudeSeconds()
	{
		return $this->LatitudeSeconds;
	}
	/**
	 * Set LongitudeDegrees
	 * @param int LongitudeDegrees
	 * @return int
	 */
	public function setLongitudeDegrees($_LongitudeDegrees)
	{
		return ($this->LongitudeDegrees = $_LongitudeDegrees);
	}
	/**
	 * Get LongitudeDegrees
	 * @return int
	 */
	public function getLongitudeDegrees()
	{
		return $this->LongitudeDegrees;
	}
	/**
	 * Set LongitudeDirection
	 * @param string LongitudeDirection
	 * @return string
	 */
	public function setLongitudeDirection($_LongitudeDirection)
	{
		return ($this->LongitudeDirection = $_LongitudeDirection);
	}
	/**
	 * Get LongitudeDirection
	 * @return string
	 */
	public function getLongitudeDirection()
	{
		return $this->LongitudeDirection;
	}
	/**
	 * Set LongitudeMinutes
	 * @param int LongitudeMinutes
	 * @return int
	 */
	public function setLongitudeMinutes($_LongitudeMinutes)
	{
		return ($this->LongitudeMinutes = $_LongitudeMinutes);
	}
	/**
	 * Get LongitudeMinutes
	 * @return int
	 */
	public function getLongitudeMinutes()
	{
		return $this->LongitudeMinutes;
	}
	/**
	 * Set LongitudeSeconds
	 * @param int LongitudeSeconds
	 * @return int
	 */
	public function setLongitudeSeconds($_LongitudeSeconds)
	{
		return ($this->LongitudeSeconds = $_LongitudeSeconds);
	}
	/**
	 * Get LongitudeSeconds
	 * @return int
	 */
	public function getLongitudeSeconds()
	{
		return $this->LongitudeSeconds;
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