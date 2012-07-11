<?php
/**
 * Class file for AmazonWebServicesTypeSellerSearchDetails
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeSellerSearchDetails
 * @date 10/07/2012
 */
class AmazonWebServicesTypeSellerSearchDetails extends AmazonWebServicesWsdlClass
{
	/**
	 * The SellerNickname
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SellerNickname;
	/**
	 * The StoreId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StoreId;
	/**
	 * The StoreName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StoreName;
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
	 * @param string SellerNickname
	 * @param string StoreId
	 * @param string StoreName
	 * @param string NumberOfOpenListings
	 * @param AmazonWebServicesTypeListingProductInfo ListingProductInfo
	 * @return AmazonWebServicesTypeSellerSearchDetails
	 */
	public function __construct($_SellerNickname = null,$_StoreId = null,$_StoreName = null,$_NumberOfOpenListings = null,$_ListingProductInfo = null)
	{
		parent::__construct(array('SellerNickname'=>$_SellerNickname,'StoreId'=>$_StoreId,'StoreName'=>$_StoreName,'NumberOfOpenListings'=>$_NumberOfOpenListings,'ListingProductInfo'=>$_ListingProductInfo));
	}
	/**
	 * Set SellerNickname
	 * @param string SellerNickname
	 * @return string
	 */
	public function setSellerNickname($_SellerNickname)
	{
		return ($this->SellerNickname = $_SellerNickname);
	}
	/**
	 * Get SellerNickname
	 * @return string
	 */
	public function getSellerNickname()
	{
		return $this->SellerNickname;
	}
	/**
	 * Set StoreId
	 * @param string StoreId
	 * @return string
	 */
	public function setStoreId($_StoreId)
	{
		return ($this->StoreId = $_StoreId);
	}
	/**
	 * Get StoreId
	 * @return string
	 */
	public function getStoreId()
	{
		return $this->StoreId;
	}
	/**
	 * Set StoreName
	 * @param string StoreName
	 * @return string
	 */
	public function setStoreName($_StoreName)
	{
		return ($this->StoreName = $_StoreName);
	}
	/**
	 * Get StoreName
	 * @return string
	 */
	public function getStoreName()
	{
		return $this->StoreName;
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