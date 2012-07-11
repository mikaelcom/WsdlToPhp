<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerSoldListingsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerSoldListingsResponseType
 * Documentation : Returns a Selling Manager user's sold listings. Response can be filtered by date, search values, and stores.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerSoldListingsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The SaleRecord
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Returns a Selling Manager user's sold listings.
	 * @var EbayTradingTypeSellingManagerSoldOrderType
	 */
	public $SaleRecord;
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the total number of pages (TotalNumberOfPages) and the total number of products entries (TotalNumberOfEntries) that can be returned on repeated calls with the same format and report criteria.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerSoldOrderType SaleRecord
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @return EbayTradingTypeGetSellingManagerSoldListingsResponseType
	 */
	public function __construct($_SaleRecord = null,$_PaginationResult = null)
	{
		EbayTradingWsdlClass::__construct(array('SaleRecord'=>$_SaleRecord,'PaginationResult'=>$_PaginationResult));
	}
	/**
	 * Set SaleRecord
	 * @param SellingManagerSoldOrderType SaleRecord
	 * @return SellingManagerSoldOrderType
	 */
	public function setSaleRecord($_SaleRecord)
	{
		return ($this->SaleRecord = $_SaleRecord);
	}
	/**
	 * Get SaleRecord
	 * @return EbayTradingTypeSellingManagerSoldOrderType
	 */
	public function getSaleRecord()
	{
		return $this->SaleRecord;
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