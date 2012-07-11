<?php
/**
 * Class file for XiQuotesTypeGetTopGainersResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetTopGainersResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetTopGainersResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetTopGainersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfTop
	 */
	public $GetTopGainersResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfTop GetTopGainersResult
	 * @return XiQuotesTypeGetTopGainersResponse
	 */
	public function __construct($_GetTopGainersResult = null)
	{
		parent::__construct(array('GetTopGainersResult'=>new XiQuotesTypeArrayOfTop($_GetTopGainersResult)));
	}
	/**
	 * Set GetTopGainersResult
	 * @param ArrayOfTop GetTopGainersResult
	 * @return ArrayOfTop
	 */
	public function setGetTopGainersResult($_GetTopGainersResult)
	{
		return ($this->GetTopGainersResult = $_GetTopGainersResult);
	}
	/**
	 * Get GetTopGainersResult
	 * @return XiQuotesTypeArrayOfTop
	 */
	public function getGetTopGainersResult()
	{
		return $this->GetTopGainersResult;
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