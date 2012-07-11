<?php
/**
 * Class file for XiHistoricalTypeGetTopLosersResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetTopLosersResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetTopLosersResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetTopLosersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfTop
	 */
	public $GetTopLosersResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfTop GetTopLosersResult
	 * @return XiHistoricalTypeGetTopLosersResponse
	 */
	public function __construct($_GetTopLosersResult = null)
	{
		parent::__construct(array('GetTopLosersResult'=>new XiHistoricalTypeArrayOfTop($_GetTopLosersResult)));
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
	 * @return XiHistoricalTypeArrayOfTop
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