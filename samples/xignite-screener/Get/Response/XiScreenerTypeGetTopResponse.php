<?php
/**
 * Class file for XiScreenerTypeGetTopResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeGetTopResponse
 * @date 08/07/2012
 */
class XiScreenerTypeGetTopResponse extends XiScreenerWsdlClass
{
	/**
	 * The GetTopResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchResults
	 */
	public $GetTopResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeSearchResults GetTopResult
	 * @return XiScreenerTypeGetTopResponse
	 */
	public function __construct($_GetTopResult = null)
	{
		parent::__construct(array('GetTopResult'=>$_GetTopResult));
	}
	/**
	 * Set GetTopResult
	 * @param SearchResults GetTopResult
	 * @return SearchResults
	 */
	public function setGetTopResult($_GetTopResult)
	{
		return ($this->GetTopResult = $_GetTopResult);
	}
	/**
	 * Get GetTopResult
	 * @return XiScreenerTypeSearchResults
	 */
	public function getGetTopResult()
	{
		return $this->GetTopResult;
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