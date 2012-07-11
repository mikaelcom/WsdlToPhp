<?php
/**
 * Class file for XiScreenerTypeSingleSearchResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeSingleSearchResponse
 * @date 08/07/2012
 */
class XiScreenerTypeSingleSearchResponse extends XiScreenerWsdlClass
{
	/**
	 * The SingleSearchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchResults
	 */
	public $SingleSearchResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeSearchResults SingleSearchResult
	 * @return XiScreenerTypeSingleSearchResponse
	 */
	public function __construct($_SingleSearchResult = null)
	{
		parent::__construct(array('SingleSearchResult'=>$_SingleSearchResult));
	}
	/**
	 * Set SingleSearchResult
	 * @param SearchResults SingleSearchResult
	 * @return SearchResults
	 */
	public function setSingleSearchResult($_SingleSearchResult)
	{
		return ($this->SingleSearchResult = $_SingleSearchResult);
	}
	/**
	 * Get SingleSearchResult
	 * @return XiScreenerTypeSearchResults
	 */
	public function getSingleSearchResult()
	{
		return $this->SingleSearchResult;
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