<?php
/**
 * Class file for EbayTradingTypePaginatedItemArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaginatedItemArrayType
 * Documentation : Contains a paginated list of items.
 * @date 04/07/2012
 */
class EbayTradingTypePaginatedItemArrayType extends EbayTradingWsdlClass
{
	/**
	 * The ItemArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a list of Item types.
	 * @var EbayTradingTypeItemArrayType
	 */
	public $ItemArray;
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides information about the list, including number of pages and number of entries.
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
	 * @param EbayTradingTypeItemArrayType ItemArray
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param DOMDocument any
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function __construct($_ItemArray = null,$_PaginationResult = null,$_any = null)
	{
		parent::__construct(array('ItemArray'=>$_ItemArray,'PaginationResult'=>$_PaginationResult,'any'=>$_any));
	}
	/**
	 * Set ItemArray
	 * @param ItemArrayType ItemArray
	 * @return ItemArrayType
	 */
	public function setItemArray($_ItemArray)
	{
		return ($this->ItemArray = $_ItemArray);
	}
	/**
	 * Get ItemArray
	 * @return EbayTradingTypeItemArrayType
	 */
	public function getItemArray()
	{
		return $this->ItemArray;
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