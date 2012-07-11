<?php
/**
 * Class file for XiOFACTypeSearchByAddressResponse
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchByAddressResponse
 * @date 08/07/2012
 */
class XiOFACTypeSearchByAddressResponse extends XiOFACWsdlClass
{
	/**
	 * The SearchByAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeSearchResults
	 */
	public $SearchByAddressResult;
	/**
	 * Constructor
	 * @param XiOFACTypeSearchResults SearchByAddressResult
	 * @return XiOFACTypeSearchByAddressResponse
	 */
	public function __construct($_SearchByAddressResult = null)
	{
		parent::__construct(array('SearchByAddressResult'=>$_SearchByAddressResult));
	}
	/**
	 * Set SearchByAddressResult
	 * @param SearchResults SearchByAddressResult
	 * @return SearchResults
	 */
	public function setSearchByAddressResult($_SearchByAddressResult)
	{
		return ($this->SearchByAddressResult = $_SearchByAddressResult);
	}
	/**
	 * Get SearchByAddressResult
	 * @return XiOFACTypeSearchResults
	 */
	public function getSearchByAddressResult()
	{
		return $this->SearchByAddressResult;
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