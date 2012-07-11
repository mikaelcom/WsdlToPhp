<?php
/**
 * Class file for EbayTradingTypePaginatedTransactionArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaginatedTransactionArrayType
 * Documentation : Contains a paginated list of order line items.
 * @date 04/07/2012
 */
class EbayTradingTypePaginatedTransactionArrayType extends EbayTradingWsdlClass
{
	/**
	 * The TransactionArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a list of Transaction objects. Returned as an empty tag if no applicable order line items exist.
	 * @var EbayTradingTypeTransactionArrayType
	 */
	public $TransactionArray;
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides information about the list of order line items, including number of pages and number of entries.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * Constructor
	 * @param EbayTradingTypeTransactionArrayType TransactionArray
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @return EbayTradingTypePaginatedTransactionArrayType
	 */
	public function __construct($_TransactionArray = null,$_PaginationResult = null)
	{
		parent::__construct(array('TransactionArray'=>$_TransactionArray,'PaginationResult'=>$_PaginationResult));
	}
	/**
	 * Set TransactionArray
	 * @param TransactionArrayType TransactionArray
	 * @return TransactionArrayType
	 */
	public function setTransactionArray($_TransactionArray)
	{
		return ($this->TransactionArray = $_TransactionArray);
	}
	/**
	 * Get TransactionArray
	 * @return EbayTradingTypeTransactionArrayType
	 */
	public function getTransactionArray()
	{
		return $this->TransactionArray;
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