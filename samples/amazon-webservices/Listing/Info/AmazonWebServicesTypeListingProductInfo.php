<?php
/**
 * Class file for AmazonWebServicesTypeListingProductInfo
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeListingProductInfo
 * @date 10/07/2012
 */
class AmazonWebServicesTypeListingProductInfo extends AmazonWebServicesWsdlClass
{
	/**
	 * The ListingProductDetails
	 * @var ListingProductDetailsArray
	 */
	public $ListingProductDetails;
	/**
	 * Constructor
	 * @param ListingProductDetailsArray ListingProductDetails
	 * @return AmazonWebServicesTypeListingProductInfo
	 */
	public function __construct($_ListingProductDetails = null)
	{
		parent::__construct(array('ListingProductDetails'=>$_ListingProductDetails));
	}
	/**
	 * Set ListingProductDetails
	 * @param ListingProductDetailsArray ListingProductDetails
	 * @return ListingProductDetailsArray
	 */
	public function setListingProductDetails($_ListingProductDetails)
	{
		return ($this->ListingProductDetails = $_ListingProductDetails);
	}
	/**
	 * Get ListingProductDetails
	 * @return ListingProductDetailsArray
	 */
	public function getListingProductDetails()
	{
		return $this->ListingProductDetails;
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