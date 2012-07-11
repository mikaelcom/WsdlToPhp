<?php
/**
 * Class file for XiHistoricalTypeGetTopMoversResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetTopMoversResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetTopMoversResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetTopMoversResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfTop
	 */
	public $GetTopMoversResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfTop GetTopMoversResult
	 * @return XiHistoricalTypeGetTopMoversResponse
	 */
	public function __construct($_GetTopMoversResult = null)
	{
		parent::__construct(array('GetTopMoversResult'=>new XiHistoricalTypeArrayOfTop($_GetTopMoversResult)));
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
	 * @return XiHistoricalTypeArrayOfTop
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