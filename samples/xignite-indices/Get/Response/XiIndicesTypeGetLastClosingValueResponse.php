<?php
/**
 * Class file for XiIndicesTypeGetLastClosingValueResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetLastClosingValueResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetLastClosingValueResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetLastClosingValueResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeIndexQuote
	 */
	public $GetLastClosingValueResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeIndexQuote GetLastClosingValueResult
	 * @return XiIndicesTypeGetLastClosingValueResponse
	 */
	public function __construct($_GetLastClosingValueResult = null)
	{
		parent::__construct(array('GetLastClosingValueResult'=>$_GetLastClosingValueResult));
	}
	/**
	 * Set GetLastClosingValueResult
	 * @param IndexQuote GetLastClosingValueResult
	 * @return IndexQuote
	 */
	public function setGetLastClosingValueResult($_GetLastClosingValueResult)
	{
		return ($this->GetLastClosingValueResult = $_GetLastClosingValueResult);
	}
	/**
	 * Get GetLastClosingValueResult
	 * @return XiIndicesTypeIndexQuote
	 */
	public function getGetLastClosingValueResult()
	{
		return $this->GetLastClosingValueResult;
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