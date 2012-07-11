<?php
/**
 * Class file for XiQuotesTypeGetTopLosersResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetTopLosersResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetTopLosersResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetTopLosersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfTop
	 */
	public $GetTopLosersResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfTop GetTopLosersResult
	 * @return XiQuotesTypeGetTopLosersResponse
	 */
	public function __construct($_GetTopLosersResult = null)
	{
		parent::__construct(array('GetTopLosersResult'=>new XiQuotesTypeArrayOfTop($_GetTopLosersResult)));
	}
	/**
	 * Set GetTopLosersResult
	 * @param ArrayOfTop GetTopLosersResult
	 * @return ArrayOfTop
	 */
	public function setGetTopLosersResult($_GetTopLosersResult)
	{
		return ($this->GetTopLosersResult = $_GetTopLosersResult);
	}
	/**
	 * Get GetTopLosersResult
	 * @return XiQuotesTypeArrayOfTop
	 */
	public function getGetTopLosersResult()
	{
		return $this->GetTopLosersResult;
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