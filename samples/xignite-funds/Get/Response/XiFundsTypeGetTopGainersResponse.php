<?php
/**
 * Class file for XiFundsTypeGetTopGainersResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetTopGainersResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetTopGainersResponse extends XiFundsWsdlClass
{
	/**
	 * The GetTopGainersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfTop
	 */
	public $GetTopGainersResult;
	/**
	 * Constructor
	 * @param XiFundsTypeArrayOfTop GetTopGainersResult
	 * @return XiFundsTypeGetTopGainersResponse
	 */
	public function __construct($_GetTopGainersResult = null)
	{
		parent::__construct(array('GetTopGainersResult'=>new XiFundsTypeArrayOfTop($_GetTopGainersResult)));
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
	 * @return XiFundsTypeArrayOfTop
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