<?php
/**
 * Class file for XiQuotesTypeGetTopMoversResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetTopMoversResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetTopMoversResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetTopMoversResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfTop
	 */
	public $GetTopMoversResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfTop GetTopMoversResult
	 * @return XiQuotesTypeGetTopMoversResponse
	 */
	public function __construct($_GetTopMoversResult = null)
	{
		parent::__construct(array('GetTopMoversResult'=>new XiQuotesTypeArrayOfTop($_GetTopMoversResult)));
	}
	/**
	 * Set GetTopMoversResult
	 * @param ArrayOfTop GetTopMoversResult
	 * @return ArrayOfTop
	 */
	public function setGetTopMoversResult($_GetTopMoversResult)
	{
		return ($this->GetTopMoversResult = $_GetTopMoversResult);
	}
	/**
	 * Get GetTopMoversResult
	 * @return XiQuotesTypeArrayOfTop
	 */
	public function getGetTopMoversResult()
	{
		return $this->GetTopMoversResult;
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