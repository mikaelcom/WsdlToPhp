<?php
/**
 * Class file for AmazonWebServicesTypeMarketplaceSearchDetails
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeMarketplaceSearchDetails
 * @date 10/07/2012
 */
class AmazonWebServicesTypeMarketplaceSearchDetails extends AmazonWebServicesWsdlClass
{
	/**
	 * The NumberOfOpenListings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NumberOfOpenListings;
	/**
	 * The ListingProductInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonWebServicesTypeListingProductInfo
	 */
	public $ListingProductInfo;
	/**
	 * Constructor
	 * @param string NumberOfOpenListings
	 * @param AmazonWebServicesTypeListingProductInfo ListingProductInfo
	 * @return AmazonWebServicesTypeMarketplaceSearchDetails
	 */
	public function __construct($_NumberOfOpenListings = null,$_ListingProductInfo = null)
	{
		parent::__construct(array('NumberOfOpenListings'=>$_NumberOfOpenListings,'ListingProductInfo'=>$_ListingProductInfo));
	}
	/**
	 * Set NumberOfOpenListings
	 * @param string NumberOfOpenListings
	 * @return string
	 */
	public function setNumberOfOpenListings($_NumberOfOpenListings)
	{
		return ($this->NumberOfOpenListings = $_NumberOfOpenListings);
	}
	/**
	 * Get NumberOfOpenListings
	 * @return string
	 */
	public function getNumberOfOpenListings()
	{
		return $this->NumberOfOpenListings;
	}
	/**
	 * Set ListingProductInfo
	 * @param ListingProductInfo ListingProductInfo
	 * @return ListingProductInfo
	 */
	public function setListingProductInfo($_ListingProductInfo)
	{
		return ($this->ListingProductInfo = $_ListingProductInfo);
	}
	/**
	 * Get ListingProductInfo
	 * @return AmazonWebServicesTypeListingProductInfo
	 */
	public function getListingProductInfo()
	{
		return $this->ListingProductInfo;
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