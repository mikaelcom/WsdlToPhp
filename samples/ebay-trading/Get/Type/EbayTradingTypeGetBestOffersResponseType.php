<?php
/**
 * Class file for EbayTradingTypeGetBestOffersResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetBestOffersResponseType
 * Documentation : All best offers for the item according to the filter or best offer id (or both) used in the input. For the notification client usage, this response includes a single Best Offer.
 * @date 04/07/2012
 */
class EbayTradingTypeGetBestOffersResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The BestOfferArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : All best offers for the item according to the filter or best offer id (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if the ReturnAll detail level is used. Only returned if best offers have been made.
	 * @var EbayTradingTypeBestOfferArrayType
	 */
	public $BestOfferArray;
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item for which Best Offers are being returned. Only returned if best offers have been made.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The ItemBestOffersArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A collection of details about the best offers received for a specific item. Empty if there are no best offers.
	 * @var EbayTradingTypeItemBestOffersArrayType
	 */
	public $ItemBestOffersArray;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of the page of data to return in the response. Default is 1 for most calls. For some calls, the default is 0. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results of your initial request). See the documentation for other individual calls to determine the correct default value. For GetOrders, PageNumber is only applicable to Half.com (is not applicable to eBay.com).
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides information about the data returned, including the number of pages and the number of entries.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * Constructor
	 * @param EbayTradingTypeBestOfferArrayType BestOfferArray
	 * @param EbayTradingTypeItemType Item
	 * @param EbayTradingTypeItemBestOffersArrayType ItemBestOffersArray
	 * @param int PageNumber
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @return EbayTradingTypeGetBestOffersResponseType
	 */
	public function __construct($_BestOfferArray = null,$_Item = null,$_ItemBestOffersArray = null,$_PageNumber = null,$_PaginationResult = null)
	{
		EbayTradingWsdlClass::__construct(array('BestOfferArray'=>$_BestOfferArray,'Item'=>$_Item,'ItemBestOffersArray'=>$_ItemBestOffersArray,'PageNumber'=>$_PageNumber,'PaginationResult'=>$_PaginationResult));
	}
	/**
	 * Set BestOfferArray
	 * @param BestOfferArrayType BestOfferArray
	 * @return BestOfferArrayType
	 */
	public function setBestOfferArray($_BestOfferArray)
	{
		return ($this->BestOfferArray = $_BestOfferArray);
	}
	/**
	 * Get BestOfferArray
	 * @return EbayTradingTypeBestOfferArrayType
	 */
	public function getBestOfferArray()
	{
		return $this->BestOfferArray;
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set ItemBestOffersArray
	 * @param ItemBestOffersArrayType ItemBestOffersArray
	 * @return ItemBestOffersArrayType
	 */
	public function setItemBestOffersArray($_ItemBestOffersArray)
	{
		return ($this->ItemBestOffersArray = $_ItemBestOffersArray);
	}
	/**
	 * Get ItemBestOffersArray
	 * @return EbayTradingTypeItemBestOffersArrayType
	 */
	public function getItemBestOffersArray()
	{
		return $this->ItemBestOffersArray;
	}
	/**
	 * Set PageNumber
	 * @param int PageNumber
	 * @return int
	 */
	public function setPageNumber($_PageNumber)
	{
		return ($this->PageNumber = $_PageNumber);
	}
	/**
	 * Get PageNumber
	 * @return int
	 */
	public function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * Set PaginationResult
	 * @param PaginationResultType PaginationResult
	 * @return PaginationResultType
	 */
	public function setPaginationResult($_PaginationResult)
	{
		return ($this->PaginationResult = $_PaginationResult);
	}
	/**
	 * Get PaginationResult
	 * @return EbayTradingTypePaginationResultType
	 */
	public function getPaginationResult()
	{
		return $this->PaginationResult;
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