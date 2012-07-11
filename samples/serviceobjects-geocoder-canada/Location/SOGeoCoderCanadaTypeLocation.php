<?php
/**
 * Class file for SOGeoCoderCanadaTypeLocation
 * @date 06/07/2012
 */
/**
 * Class SOGeoCoderCanadaTypeLocation
 * @date 06/07/2012
 */
class SOGeoCoderCanadaTypeLocation extends SOGeoCoderCanadaWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderCanadaTypeErr
	 */
	public $Error;
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
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The MatchCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MatchCode;
	/**
	 * Constructor
	 * @param SOGeoCoderCanadaTypeErr Error
	 * @param string Latitude
	 * @param string Longitude
	 * @param string PostalCode
	 * @param string MatchCode
	 * @return SOGeoCoderCanadaTypeLocation
	 */
	public function __construct($_Error = null,$_Latitude = null,$_Longitude = null,$_PostalCode = null,$_MatchCode = null)
	{
		parent::__construct(array('Error'=>$_Error,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'PostalCode'=>$_PostalCode,'MatchCode'=>$_MatchCode));
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
	 * @return SOGeoCoderCanadaTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set MatchCode
	 * @param string MatchCode
	 * @return string
	 */
	public function setMatchCode($_MatchCode)
	{
		return ($this->MatchCode = $_MatchCode);
	}
	/**
	 * Get MatchCode
	 * @return string
	 */
	public function getMatchCode()
	{
		return $this->MatchCode;
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