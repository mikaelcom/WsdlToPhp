<?php
/**
 * Class file for XiRealTimeTypeGetRealTopGainersResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealTopGainersResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealTopGainersResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealTopGainersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeTop
	 */
	public $GetRealTopGainersResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTop GetRealTopGainersResult
	 * @return XiRealTimeTypeGetRealTopGainersResponse
	 */
	public function __construct($_GetRealTopGainersResult = null)
	{
		parent::__construct(array('GetRealTopGainersResult'=>$_GetRealTopGainersResult));
	}
	/**
	 * Set GetRealTopGainersResult
	 * @param Top GetRealTopGainersResult
	 * @return Top
	 */
	public function setGetRealTopGainersResult($_GetRealTopGainersResult)
	{
		return ($this->GetRealTopGainersResult = $_GetRealTopGainersResult);
	}
	/**
	 * Get GetRealTopGainersResult
	 * @return XiRealTimeTypeTop
	 */
	public function getGetRealTopGainersResult()
	{
		return $this->GetRealTopGainersResult;
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