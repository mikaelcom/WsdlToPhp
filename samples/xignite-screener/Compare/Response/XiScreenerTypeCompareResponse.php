<?php
/**
 * Class file for XiScreenerTypeCompareResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeCompareResponse
 * @date 08/07/2012
 */
class XiScreenerTypeCompareResponse extends XiScreenerWsdlClass
{
	/**
	 * The CompareResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchResults
	 */
	public $CompareResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeSearchResults CompareResult
	 * @return XiScreenerTypeCompareResponse
	 */
	public function __construct($_CompareResult = null)
	{
		parent::__construct(array('CompareResult'=>$_CompareResult));
	}
	/**
	 * Set CompareResult
	 * @param SearchResults CompareResult
	 * @return SearchResults
	 */
	public function setCompareResult($_CompareResult)
	{
		return ($this->CompareResult = $_CompareResult);
	}
	/**
	 * Get CompareResult
	 * @return XiScreenerTypeSearchResults
	 */
	public function getCompareResult()
	{
		return $this->CompareResult;
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