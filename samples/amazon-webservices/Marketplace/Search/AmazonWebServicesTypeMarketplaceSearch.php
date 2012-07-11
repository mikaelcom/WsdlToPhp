<?php
/**
 * Class file for AmazonWebServicesTypeMarketplaceSearch
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeMarketplaceSearch
 * @date 10/07/2012
 */
class AmazonWebServicesTypeMarketplaceSearch extends AmazonWebServicesWsdlClass
{
	/**
	 * The MarketplaceSearchDetails
	 * @var MarketplaceSearchDetailsArray
	 */
	public $MarketplaceSearchDetails;
	/**
	 * Constructor
	 * @param MarketplaceSearchDetailsArray MarketplaceSearchDetails
	 * @return AmazonWebServicesTypeMarketplaceSearch
	 */
	public function __construct($_MarketplaceSearchDetails = null)
	{
		parent::__construct(array('MarketplaceSearchDetails'=>$_MarketplaceSearchDetails));
	}
	/**
	 * Set MarketplaceSearchDetails
	 * @param MarketplaceSearchDetailsArray MarketplaceSearchDetails
	 * @return MarketplaceSearchDetailsArray
	 */
	public function setMarketplaceSearchDetails($_MarketplaceSearchDetails)
	{
		return ($this->MarketplaceSearchDetails = $_MarketplaceSearchDetails);
	}
	/**
	 * Get MarketplaceSearchDetails
	 * @return MarketplaceSearchDetailsArray
	 */
	public function getMarketplaceSearchDetails()
	{
		return $this->MarketplaceSearchDetails;
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