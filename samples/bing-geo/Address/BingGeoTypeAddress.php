<?php
/**
 * Class file for BingGeoTypeAddress
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeAddress
 * @date 02/07/2012
 */
class BingGeoTypeAddress extends BingGeoWsdlClass
{
	/**
	 * The AddressLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $AddressLine;
	/**
	 * The AdminDistrict
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $AdminDistrict;
	/**
	 * The CountryRegion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $CountryRegion;
	/**
	 * The District
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $District;
	/**
	 * The FormattedAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $FormattedAddress;
	/**
	 * The Locality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Locality;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The PostalTown
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PostalTown;
	/**
	 * Constructor
	 * @param string AddressLine
	 * @param string AdminDistrict
	 * @param string CountryRegion
	 * @param string District
	 * @param string FormattedAddress
	 * @param string Locality
	 * @param string PostalCode
	 * @param string PostalTown
	 * @return BingGeoTypeAddress
	 */
	public function __construct($_AddressLine = null,$_AdminDistrict = null,$_CountryRegion = null,$_District = null,$_FormattedAddress = null,$_Locality = null,$_PostalCode = null,$_PostalTown = null)
	{
		parent::__construct(array('AddressLine'=>$_AddressLine,'AdminDistrict'=>$_AdminDistrict,'CountryRegion'=>$_CountryRegion,'District'=>$_District,'FormattedAddress'=>$_FormattedAddress,'Locality'=>$_Locality,'PostalCode'=>$_PostalCode,'PostalTown'=>$_PostalTown));
	}
	/**
	 * Set AddressLine
	 * @param string AddressLine
	 * @return string
	 */
	public function setAddressLine($_AddressLine)
	{
		return ($this->AddressLine = $_AddressLine);
	}
	/**
	 * Get AddressLine
	 * @return string
	 */
	public function getAddressLine()
	{
		return $this->AddressLine;
	}
	/**
	 * Set AdminDistrict
	 * @param string AdminDistrict
	 * @return string
	 */
	public function setAdminDistrict($_AdminDistrict)
	{
		return ($this->AdminDistrict = $_AdminDistrict);
	}
	/**
	 * Get AdminDistrict
	 * @return string
	 */
	public function getAdminDistrict()
	{
		return $this->AdminDistrict;
	}
	/**
	 * Set CountryRegion
	 * @param string CountryRegion
	 * @return string
	 */
	public function setCountryRegion($_CountryRegion)
	{
		return ($this->CountryRegion = $_CountryRegion);
	}
	/**
	 * Get CountryRegion
	 * @return string
	 */
	public function getCountryRegion()
	{
		return $this->CountryRegion;
	}
	/**
	 * Set District
	 * @param string District
	 * @return string
	 */
	public function setDistrict($_District)
	{
		return ($this->District = $_District);
	}
	/**
	 * Get District
	 * @return string
	 */
	public function getDistrict()
	{
		return $this->District;
	}
	/**
	 * Set FormattedAddress
	 * @param string FormattedAddress
	 * @return string
	 */
	public function setFormattedAddress($_FormattedAddress)
	{
		return ($this->FormattedAddress = $_FormattedAddress);
	}
	/**
	 * Get FormattedAddress
	 * @return string
	 */
	public function getFormattedAddress()
	{
		return $this->FormattedAddress;
	}
	/**
	 * Set Locality
	 * @param string Locality
	 * @return string
	 */
	public function setLocality($_Locality)
	{
		return ($this->Locality = $_Locality);
	}
	/**
	 * Get Locality
	 * @return string
	 */
	public function getLocality()
	{
		return $this->Locality;
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
	 * Set PostalTown
	 * @param string PostalTown
	 * @return string
	 */
	public function setPostalTown($_PostalTown)
	{
		return ($this->PostalTown = $_PostalTown);
	}
	/**
	 * Get PostalTown
	 * @return string
	 */
	public function getPostalTown()
	{
		return $this->PostalTown;
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