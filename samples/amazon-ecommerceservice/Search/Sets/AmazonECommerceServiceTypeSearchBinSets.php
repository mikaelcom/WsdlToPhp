<?php
/**
 * Class file for AmazonECommerceServiceTypeSearchBinSets
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSearchBinSets
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSearchBinSets extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The SearchBinSet
	 * @var AmazonECommerceServiceTypeSearchBinSet
	 */
	public $SearchBinSet;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeSearchBinSet SearchBinSet
	 * @return AmazonECommerceServiceTypeSearchBinSets
	 */
	public function __construct($_SearchBinSet = null)
	{
		parent::__construct(array('SearchBinSet'=>$_SearchBinSet));
	}
	/**
	 * Set SearchBinSet
	 * @param SearchBinSet SearchBinSet
	 * @return SearchBinSet
	 */
	public function setSearchBinSet($_SearchBinSet)
	{
		return ($this->SearchBinSet = $_SearchBinSet);
	}
	/**
	 * Get SearchBinSet
	 * @return AmazonECommerceServiceTypeSearchBinSet
	 */
	public function getSearchBinSet()
	{
		return $this->SearchBinSet;
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