<?php
/**
 * Class file for EbayShoppingTypeNameValueListArrayType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeNameValueListArrayType
 * Documentation : A list of one or more valid names and corresponding values.
 * @date 05/07/2012
 */
class EbayShoppingTypeNameValueListArrayType extends EbayShoppingWsdlClass
{
	/**
	 * The NameValueList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This list is an array of Item Specifics, which are category-specific fields that the seller added to describe the listing. The names of these fields are different for items in different categories, so they're returned in a generic name/value structure. <br><br> For example, Item Specifics for a car might include a field like Make=Toyota (where Make is returned in Name, and Toyota is returned in Value) and Model=Prius (where Model is returned in Name, and Prius is returned in Value).<br> <br> In multi-variation listings, the same name cannot appear in both the VariationSpecifics node and in the ItemSpecifics node. <br><br> For FindProducts, this can also be an Item Specific that is defined for a product. That is, Item Specifics can be returned both for items and products in FindProducts.
	 * @var EbayShoppingTypeNameValueListType
	 */
	public $NameValueList;
	/**
	 * Constructor
	 * @param EbayShoppingTypeNameValueListType NameValueList
	 * @return EbayShoppingTypeNameValueListArrayType
	 */
	public function __construct($_NameValueList = null)
	{
		parent::__construct(array('NameValueList'=>$_NameValueList));
	}
	/**
	 * Set NameValueList
	 * @param NameValueListType NameValueList
	 * @return NameValueListType
	 */
	public function setNameValueList($_NameValueList)
	{
		return ($this->NameValueList = $_NameValueList);
	}
	/**
	 * Get NameValueList
	 * @return EbayShoppingTypeNameValueListType
	 */
	public function getNameValueList()
	{
		return $this->NameValueList;
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