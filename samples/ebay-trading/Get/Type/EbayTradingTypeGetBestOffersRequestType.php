<?php
/**
 * Class file for EbayTradingTypeGetBestOffersRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetBestOffersRequestType
 * Documentation : Retrieves best offers.
 * @date 04/07/2012
 */
class EbayTradingTypeGetBestOffersRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the listing for which Best Offer information is to be returned. See the description of GetBestOffers for details related to who makes the request and how ItemID and BestOfferID can be omitted.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The BestOfferID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the best offer for which information is to be returned. See the description of GetBestOffers for details related to who makes the request and how ItemID and BestOfferID can be omitted.
	 * @var EbayTradingTypeBestOfferIDType
	 */
	public $BestOfferID;
	/**
	 * The BestOfferStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A filter that specifies which Best Offers to return for an item (such as countered, expired, or accepted). The type "All" can only be specified if an ItemID is also supplied in the request.
	 * @var EbayTradingTypeBestOfferStatusCodeType
	 */
	public $BestOfferStatus;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies how to create virtual pages in the returned list (such as total number of entries and total number of pages to return).
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeBestOfferIDType BestOfferID
	 * @param EbayTradingTypeBestOfferStatusCodeType BestOfferStatus
	 * @param EbayTradingTypePaginationType Pagination
	 * @return EbayTradingTypeGetBestOffersRequestType
	 */
	public function __construct($_ItemID = null,$_BestOfferID = null,$_BestOfferStatus = null,$_Pagination = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'BestOfferID'=>$_BestOfferID,'BestOfferStatus'=>$_BestOfferStatus,'Pagination'=>$_Pagination));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set BestOfferID
	 * @param BestOfferIDType BestOfferID
	 * @return BestOfferIDType
	 */
	public function setBestOfferID($_BestOfferID)
	{
		return ($this->BestOfferID = EbayTradingTypeBestOfferIDType::valueIsValid($_BestOfferID)?$_BestOfferID:null);
	}
	/**
	 * Get BestOfferID
	 * @return EbayTradingTypeBestOfferIDType
	 */
	public function getBestOfferID()
	{
		return $this->BestOfferID;
	}
	/**
	 * Set BestOfferStatus
	 * @param BestOfferStatusCodeType BestOfferStatus
	 * @return BestOfferStatusCodeType
	 */
	public function setBestOfferStatus($_BestOfferStatus)
	{
		return ($this->BestOfferStatus = EbayTradingTypeBestOfferStatusCodeType::valueIsValid($_BestOfferStatus)?$_BestOfferStatus:null);
	}
	/**
	 * Get BestOfferStatus
	 * @return EbayTradingTypeBestOfferStatusCodeType
	 */
	public function getBestOfferStatus()
	{
		return $this->BestOfferStatus;
	}
	/**
	 * Set Pagination
	 * @param PaginationType Pagination
	 * @return PaginationType
	 */
	public function setPagination($_Pagination)
	{
		return ($this->Pagination = $_Pagination);
	}
	/**
	 * Get Pagination
	 * @return EbayTradingTypePaginationType
	 */
	public function getPagination()
	{
		return $this->Pagination;
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