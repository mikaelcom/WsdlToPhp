<?php
/**
 * Class file for XiIndicesTypeGetLastClosingValuesResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetLastClosingValuesResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetLastClosingValuesResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetLastClosingValuesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfIndexQuote
	 */
	public $GetLastClosingValuesResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfIndexQuote GetLastClosingValuesResult
	 * @return XiIndicesTypeGetLastClosingValuesResponse
	 */
	public function __construct($_GetLastClosingValuesResult = null)
	{
		parent::__construct(array('GetLastClosingValuesResult'=>new XiIndicesTypeArrayOfIndexQuote($_GetLastClosingValuesResult)));
	}
	/**
	 * Set GetLastClosingValuesResult
	 * @param ArrayOfIndexQuote GetLastClosingValuesResult
	 * @return ArrayOfIndexQuote
	 */
	public function setGetLastClosingValuesResult($_GetLastClosingValuesResult)
	{
		return ($this->GetLastClosingValuesResult = $_GetLastClosingValuesResult);
	}
	/**
	 * Get GetLastClosingValuesResult
	 * @return XiIndicesTypeArrayOfIndexQuote
	 */
	public function getGetLastClosingValuesResult()
	{
		return $this->GetLastClosingValuesResult;
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