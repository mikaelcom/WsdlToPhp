<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerInventoryResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerInventoryResponseType
 * Documentation : Contains a list of the products created by the seller. The list of products is returned as a set of tags, in which are returned zero, one, or multiple SellingManagerProductType objects. Each SellingManagerProductType object contains the information about for one Selling Manager product and any Selling Manager templates the product contains.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerInventoryResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The InventoryCountLastCalculatedDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the date the inventory counts were last calculated.
	 * @var dateTime
	 */
	public $InventoryCountLastCalculatedDate;
	/**
	 * The SellingManagerProduct
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container for information about the requested products and templates.
	 * @var EbayTradingTypeSellingManagerProductType
	 */
	public $SellingManagerProduct;
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
	 * @param dateTime InventoryCountLastCalculatedDate
	 * @param EbayTradingTypeSellingManagerProductType SellingManagerProduct
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @return EbayTradingTypeGetSellingManagerInventoryResponseType
	 */
	public function __construct($_InventoryCountLastCalculatedDate = null,$_SellingManagerProduct = null,$_PaginationResult = null)
	{
		EbayTradingWsdlClass::__construct(array('InventoryCountLastCalculatedDate'=>$_InventoryCountLastCalculatedDate,'SellingManagerProduct'=>$_SellingManagerProduct,'PaginationResult'=>$_PaginationResult));
	}
	/**
	 * Set InventoryCountLastCalculatedDate
	 * @param dateTime InventoryCountLastCalculatedDate
	 * @return dateTime
	 */
	public function setInventoryCountLastCalculatedDate($_InventoryCountLastCalculatedDate)
	{
		return ($this->InventoryCountLastCalculatedDate = $_InventoryCountLastCalculatedDate);
	}
	/**
	 * Get InventoryCountLastCalculatedDate
	 * @return dateTime
	 */
	public function getInventoryCountLastCalculatedDate()
	{
		return $this->InventoryCountLastCalculatedDate;
	}
	/**
	 * Set SellingManagerProduct
	 * @param SellingManagerProductType SellingManagerProduct
	 * @return SellingManagerProductType
	 */
	public function setSellingManagerProduct($_SellingManagerProduct)
	{
		return ($this->SellingManagerProduct = $_SellingManagerProduct);
	}
	/**
	 * Get SellingManagerProduct
	 * @return EbayTradingTypeSellingManagerProductType
	 */
	public function getSellingManagerProduct()
	{
		return $this->SellingManagerProduct;
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