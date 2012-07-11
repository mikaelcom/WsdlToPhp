<?php
/**
 * Class file for EbayTradingTypeCategoryItemSpecificsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCategoryItemSpecificsType
 * Documentation : Defines details about recommended names and values for custom Item Specifics.
 * @date 04/07/2012
 */
class EbayTradingTypeCategoryItemSpecificsType extends EbayTradingWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A leaf-level eBay category ID. This call retrieves recommended Item Specifics (if any) for each leaf category you specify. (The call returns no results for a parent category.) To determine which leaf categories support listing with custom Item Specifics, use GetCategoryFeatures. <br> <br> <span class="tablenote"><b>Note:</b> This call may return recommendations for categories that don't support listing with custom Item Specifics. That is, the presence of recommendations for a category does not necessarily mean that AddItem supports custom Item Specifics for that category and site.</span><br> <br> The request requires either CategoryID, CategorySpecfics.CategoryID, or CategorySpecificsFileInfo (or the call returns an error). CategoryID and CategorySpecific.CategoryID can both be used in the same request. (CategorySpecific offers more options to control the response.) Some input fields, such as IncludeConfidence, only work when CategoryID or CategorySpecfics.CategoryID is specified.<br> <br> You can specify multiple leaf categories, but more categories can result in longer response times. If your request times out, specify fewer IDs. If you specify the same ID twice, we use the first instance.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The ItemSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : In the request, use this to retrieve recommended values for a particular name (in the specified category). This could be an arbitrary name that the seller wants to check, or it could be a name that was returned in a prior response. At the time of this writing, this value is case-sensitive. (Wildcards are not supported.)<br> <br> In the response, contains a list of Item Specifics (if any) that eBay recommends as most popular within the specified category.
	 * @var EbayTradingTypeNameValueListArrayType
	 */
	public $ItemSpecifics;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param EbayTradingTypeNameValueListArrayType ItemSpecifics
	 * @param DOMDocument any
	 * @return EbayTradingTypeCategoryItemSpecificsType
	 */
	public function __construct($_CategoryID = null,$_ItemSpecifics = null,$_any = null)
	{
		parent::__construct(array('CategoryID'=>$_CategoryID,'ItemSpecifics'=>$_ItemSpecifics,'any'=>$_any));
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
	 * Set ItemSpecifics
	 * @param NameValueListArrayType ItemSpecifics
	 * @return NameValueListArrayType
	 */
	public function setItemSpecifics($_ItemSpecifics)
	{
		return ($this->ItemSpecifics = $_ItemSpecifics);
	}
	/**
	 * Get ItemSpecifics
	 * @return EbayTradingTypeNameValueListArrayType
	 */
	public function getItemSpecifics()
	{
		return $this->ItemSpecifics;
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