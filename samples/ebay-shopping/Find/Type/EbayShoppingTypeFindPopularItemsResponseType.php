<?php
/**
 * Class file for EbayShoppingTypeFindPopularItemsResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFindPopularItemsResponseType
 * Documentation : Popular items, detail level is default for simple item type. addition with WatchCount.
 * @date 05/07/2012
 */
class EbayShoppingTypeFindPopularItemsResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The ItemArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of active items that were listed with the requested product.
	 * @var EbayShoppingTypeSimpleItemArrayType
	 */
	public $ItemArray;
	/**
	 * Constructor
	 * @param EbayShoppingTypeSimpleItemArrayType ItemArray
	 * @return EbayShoppingTypeFindPopularItemsResponseType
	 */
	public function __construct($_ItemArray = null)
	{
		EbayShoppingWsdlClass::__construct(array('ItemArray'=>$_ItemArray));
	}
	/**
	 * Set ItemArray
	 * @param SimpleItemArrayType ItemArray
	 * @return SimpleItemArrayType
	 */
	public function setItemArray($_ItemArray)
	{
		return ($this->ItemArray = $_ItemArray);
	}
	/**
	 * Get ItemArray
	 * @return EbayShoppingTypeSimpleItemArrayType
	 */
	public function getItemArray()
	{
		return $this->ItemArray;
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