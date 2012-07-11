<?php
/**
 * Class file for AmazonECommerceServiceTypeSearchResultsMap
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSearchResultsMap
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSearchResultsMap extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The SearchIndex
	 * @var AmazonECommerceServiceTypeSearchIndex
	 */
	public $SearchIndex;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeSearchIndex SearchIndex
	 * @return AmazonECommerceServiceTypeSearchResultsMap
	 */
	public function __construct($_SearchIndex = null)
	{
		parent::__construct(array('SearchIndex'=>$_SearchIndex));
	}
	/**
	 * Set SearchIndex
	 * @param SearchIndex SearchIndex
	 * @return SearchIndex
	 */
	public function setSearchIndex($_SearchIndex)
	{
		return ($this->SearchIndex = $_SearchIndex);
	}
	/**
	 * Get SearchIndex
	 * @return AmazonECommerceServiceTypeSearchIndex
	 */
	public function getSearchIndex()
	{
		return $this->SearchIndex;
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