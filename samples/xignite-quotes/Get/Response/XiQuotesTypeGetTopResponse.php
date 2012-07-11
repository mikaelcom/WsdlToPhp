<?php
/**
 * Class file for XiQuotesTypeGetTopResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetTopResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetTopResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetTopResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfTop
	 */
	public $GetTopResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfTop GetTopResult
	 * @return XiQuotesTypeGetTopResponse
	 */
	public function __construct($_GetTopResult = null)
	{
		parent::__construct(array('GetTopResult'=>new XiQuotesTypeArrayOfTop($_GetTopResult)));
	}
	/**
	 * Set GetTopResult
	 * @param ArrayOfTop GetTopResult
	 * @return ArrayOfTop
	 */
	public function setGetTopResult($_GetTopResult)
	{
		return ($this->GetTopResult = $_GetTopResult);
	}
	/**
	 * Get GetTopResult
	 * @return XiQuotesTypeArrayOfTop
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