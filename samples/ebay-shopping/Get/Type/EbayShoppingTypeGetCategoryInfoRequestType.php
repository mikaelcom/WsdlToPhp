<?php
/**
 * Class file for EbayShoppingTypeGetCategoryInfoRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetCategoryInfoRequestType
 * Documentation : This call will give you the ability to retrieve high level Category information, relevant for a buy-side application.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetCategoryInfoRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use an ID of -1 to retrieve the root category and the top-level (level 1) meta categories. You can determine other CategoryIDs from the response from this call, or from a specific item (retrieved from another call like GetSingleItem), or from the eBay website.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The IncludeSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines standard subsets of fields to return within the response. If you don't specify this field, the call returns a default set of fields. If you specify this field, the additional fields (child categories) you retrieve can affect the call's response time (decrease performance). <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; ChildCategories</p> <p class="edef">Include the first level of child categories for the specified parent.</p>
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param string IncludeSelector
	 * @return EbayShoppingTypeGetCategoryInfoRequestType
	 */
	public function __construct($_CategoryID = null,$_IncludeSelector = null)
	{
		EbayShoppingWsdlClass::__construct(array('CategoryID'=>$_CategoryID,'IncludeSelector'=>$_IncludeSelector));
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set IncludeSelector
	 * @param string IncludeSelector
	 * @return string
	 */
	public function setIncludeSelector($_IncludeSelector)
	{
		return ($this->IncludeSelector = $_IncludeSelector);
	}
	/**
	 * Get IncludeSelector
	 * @return string
	 */
	public function getIncludeSelector()
	{
		return $this->IncludeSelector;
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