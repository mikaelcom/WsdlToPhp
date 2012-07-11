<?php
/**
 * Class file for EbayFindTypeGetHistogramsRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeGetHistogramsRequest
 * Documentation : Get request for histogram information on the supplied category or aspect.
 * @date 04/07/2012
 */
class EbayFindTypeGetHistogramsRequest extends EbayFindTypeBaseServiceRequest
{
	/**
	 * The categoryId
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Specifies the category from which you want to retrieve histogram information. <br><br> If a specified category ID doesn't match an existing category for the site, eBay returns an invalid-category error message. To determine valid categories, use the Trading API <b class="con">GetCategories</b> call. <br><br> Retrieving histograms by category is not supported on the eBay Italy site (global ID EBAY-IT) at this time.
	 * @var string
	 */
	public $categoryId;
	/**
	 * Constructor
	 * @param string categoryId
	 * @return EbayFindTypeGetHistogramsRequest
	 */
	public function __construct($_categoryId)
	{
		EbayFindWsdlClass::__construct(array('categoryId'=>$_categoryId));
	}
	/**
	 * Set categoryId
	 * @param string categoryId
	 * @return string
	 */
	public function setCategoryId($_categoryId)
	{
		return ($this->categoryId = $_categoryId);
	}
	/**
	 * Get categoryId
	 * @return string
	 */
	public function getCategoryId()
	{
		return $this->categoryId;
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