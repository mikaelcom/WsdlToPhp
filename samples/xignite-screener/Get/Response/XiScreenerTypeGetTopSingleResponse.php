<?php
/**
 * Class file for XiScreenerTypeGetTopSingleResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeGetTopSingleResponse
 * @date 08/07/2012
 */
class XiScreenerTypeGetTopSingleResponse extends XiScreenerWsdlClass
{
	/**
	 * The GetTopSingleResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchResults
	 */
	public $GetTopSingleResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeSearchResults GetTopSingleResult
	 * @return XiScreenerTypeGetTopSingleResponse
	 */
	public function __construct($_GetTopSingleResult = null)
	{
		parent::__construct(array('GetTopSingleResult'=>$_GetTopSingleResult));
	}
	/**
	 * Set GetTopSingleResult
	 * @param SearchResults GetTopSingleResult
	 * @return SearchResults
	 */
	public function setGetTopSingleResult($_GetTopSingleResult)
	{
		return ($this->GetTopSingleResult = $_GetTopSingleResult);
	}
	/**
	 * Get GetTopSingleResult
	 * @return XiScreenerTypeSearchResults
	 */
	public function getGetTopSingleResult()
	{
		return $this->GetTopSingleResult;
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