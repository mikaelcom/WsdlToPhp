<?php
/**
 * Class file for SOBusinessInformationTypeBusinessListings
 * @date 08/07/2012
 */
/**
 * Class SOBusinessInformationTypeBusinessListings
 * @date 08/07/2012
 */
class SOBusinessInformationTypeBusinessListings extends SOBusinessInformationWsdlClass
{
	/**
	 * The Listings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOBusinessInformationTypeArrayOfBusinessListing
	 */
	public $Listings;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOBusinessInformationTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOBusinessInformationTypeArrayOfBusinessListing Listings
	 * @param SOBusinessInformationTypeError Error
	 * @return SOBusinessInformationTypeBusinessListings
	 */
	public function __construct($_Listings = null,$_Error = null)
	{
		parent::__construct(array('Listings'=>new SOBusinessInformationTypeArrayOfBusinessListing($_Listings),'Error'=>$_Error));
	}
	/**
	 * Set Listings
	 * @param ArrayOfBusinessListing Listings
	 * @return ArrayOfBusinessListing
	 */
	public function setListings($_Listings)
	{
		return ($this->Listings = $_Listings);
	}
	/**
	 * Get Listings
	 * @return SOBusinessInformationTypeArrayOfBusinessListing
	 */
	public function getListings()
	{
		return $this->Listings;
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOBusinessInformationTypeError
	 */
	public function getError()
	{
		return $this->Error;
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