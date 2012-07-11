<?php
/**
 * Class file for EbayTradingTypeGetItemsAwaitingFeedbackRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetItemsAwaitingFeedbackRequestType
 * Documentation : Returns orders in which the user was involved and for which feedback is still needed from either the buyer or seller.
 * @date 04/07/2012
 */
class EbayTradingTypeGetItemsAwaitingFeedbackRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies how the returned feedback items should be sorted. Valid values are Title, EndTime, QuestionCount, FeedbackLeft, FeedbackReceivedDescending, UserIDDescending, TitleDescending, and EndTimeDescending.
	 * @var EbayTradingTypeItemSortTypeCodeType
	 */
	public $Sort;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of entries per page and the page number to return in the result set.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemSortTypeCodeType Sort
	 * @param EbayTradingTypePaginationType Pagination
	 * @return EbayTradingTypeGetItemsAwaitingFeedbackRequestType
	 */
	public function __construct($_Sort = null,$_Pagination = null)
	{
		EbayTradingWsdlClass::__construct(array('Sort'=>$_Sort,'Pagination'=>$_Pagination));
	}
	/**
	 * Set Sort
	 * @param ItemSortTypeCodeType Sort
	 * @return ItemSortTypeCodeType
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = EbayTradingTypeItemSortTypeCodeType::valueIsValid($_Sort)?$_Sort:null);
	}
	/**
	 * Get Sort
	 * @return EbayTradingTypeItemSortTypeCodeType
	 */
	public function getSort()
	{
		return $this->Sort;
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