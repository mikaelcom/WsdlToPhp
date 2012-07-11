<?php
/**
 * Class file for EbayTradingTypeGetSuggestedCategoriesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSuggestedCategoriesResponseType
 * Documentation : Returns a list of categories with the highest number of listings whose titles or descriptions contain the keywords specified in a GetSuggestedCategoriesRequest.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSuggestedCategoriesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The SuggestedCategoryArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the categories that contain listings that match the query string in the request. The array can have up to 10 categories. Not returned if no categories match the query in the request.
	 * @var EbayTradingTypeSuggestedCategoryArrayType
	 */
	public $SuggestedCategoryArray;
	/**
	 * The CategoryCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the number of categories in the array.
	 * @var int
	 */
	public $CategoryCount;
	/**
	 * Constructor
	 * @param EbayTradingTypeSuggestedCategoryArrayType SuggestedCategoryArray
	 * @param int CategoryCount
	 * @return EbayTradingTypeGetSuggestedCategoriesResponseType
	 */
	public function __construct($_SuggestedCategoryArray = null,$_CategoryCount = null)
	{
		EbayTradingWsdlClass::__construct(array('SuggestedCategoryArray'=>$_SuggestedCategoryArray,'CategoryCount'=>$_CategoryCount));
	}
	/**
	 * Set SuggestedCategoryArray
	 * @param SuggestedCategoryArrayType SuggestedCategoryArray
	 * @return SuggestedCategoryArrayType
	 */
	public function setSuggestedCategoryArray($_SuggestedCategoryArray)
	{
		return ($this->SuggestedCategoryArray = $_SuggestedCategoryArray);
	}
	/**
	 * Get SuggestedCategoryArray
	 * @return EbayTradingTypeSuggestedCategoryArrayType
	 */
	public function getSuggestedCategoryArray()
	{
		return $this->SuggestedCategoryArray;
	}
	/**
	 * Set CategoryCount
	 * @param int CategoryCount
	 * @return int
	 */
	public function setCategoryCount($_CategoryCount)
	{
		return ($this->CategoryCount = $_CategoryCount);
	}
	/**
	 * Get CategoryCount
	 * @return int
	 */
	public function getCategoryCount()
	{
		return $this->CategoryCount;
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