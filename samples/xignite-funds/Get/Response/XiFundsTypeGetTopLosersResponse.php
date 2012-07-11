<?php
/**
 * Class file for XiFundsTypeGetTopLosersResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetTopLosersResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetTopLosersResponse extends XiFundsWsdlClass
{
	/**
	 * The GetTopLosersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfTop
	 */
	public $GetTopLosersResult;
	/**
	 * Constructor
	 * @param XiFundsTypeArrayOfTop GetTopLosersResult
	 * @return XiFundsTypeGetTopLosersResponse
	 */
	public function __construct($_GetTopLosersResult = null)
	{
		parent::__construct(array('GetTopLosersResult'=>new XiFundsTypeArrayOfTop($_GetTopLosersResult)));
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
	 * @return XiFundsTypeArrayOfTop
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