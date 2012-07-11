<?php
/**
 * Class file for EbayTradingTypePaginatedOrderTransactionArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaginatedOrderTransactionArrayType
 * Documentation : Contains a paginated list of orders.
 * @date 04/07/2012
 */
class EbayTradingTypePaginatedOrderTransactionArrayType extends EbayTradingWsdlClass
{
	/**
	 * The OrderTransactionArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the list of orders.
	 * @var EbayTradingTypeOrderTransactionArrayType
	 */
	public $OrderTransactionArray;
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies information about the list, including number of pages and number of entries.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeOrderTransactionArrayType OrderTransactionArray
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param DOMDocument any
	 * @return EbayTradingTypePaginatedOrderTransactionArrayType
	 */
	public function __construct($_OrderTransactionArray = null,$_PaginationResult = null,$_any = null)
	{
		parent::__construct(array('OrderTransactionArray'=>$_OrderTransactionArray,'PaginationResult'=>$_PaginationResult,'any'=>$_any));
	}
	/**
	 * Set OrderTransactionArray
	 * @param OrderTransactionArrayType OrderTransactionArray
	 * @return OrderTransactionArrayType
	 */
	public function setOrderTransactionArray($_OrderTransactionArray)
	{
		return ($this->OrderTransactionArray = $_OrderTransactionArray);
	}
	/**
	 * Get OrderTransactionArray
	 * @return EbayTradingTypeOrderTransactionArrayType
	 */
	public function getOrderTransactionArray()
	{
		return $this->OrderTransactionArray;
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
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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