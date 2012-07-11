<?php
/**
 * Class file for AmazonAlexaTypeListingsType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeListingsType
 * @date 10/07/2012
 */
class AmazonAlexaTypeListingsType extends AmazonAlexaWsdlClass
{
	/**
	 * The Listing
	 * @var AmazonAlexaTypeListingType
	 */
	public $Listing;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeListingType Listing
	 * @return AmazonAlexaTypeListingsType
	 */
	public function __construct($_Listing = null)
	{
		parent::__construct(array('Listing'=>$_Listing));
	}
	/**
	 * Set Listing
	 * @param ListingType Listing
	 * @return ListingType
	 */
	public function setListing($_Listing)
	{
		return ($this->Listing = $_Listing);
	}
	/**
	 * Get Listing
	 * @return AmazonAlexaTypeListingType
	 */
	public function getListing()
	{
		return $this->Listing;
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