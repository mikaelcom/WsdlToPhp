<?php
/**
 * Class file for XiRealTimeTypeGetRealTopMoversResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealTopMoversResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealTopMoversResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealTopMoversResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeTop
	 */
	public $GetRealTopMoversResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTop GetRealTopMoversResult
	 * @return XiRealTimeTypeGetRealTopMoversResponse
	 */
	public function __construct($_GetRealTopMoversResult = null)
	{
		parent::__construct(array('GetRealTopMoversResult'=>$_GetRealTopMoversResult));
	}
	/**
	 * Set GetRealTopMoversResult
	 * @param Top GetRealTopMoversResult
	 * @return Top
	 */
	public function setGetRealTopMoversResult($_GetRealTopMoversResult)
	{
		return ($this->GetRealTopMoversResult = $_GetRealTopMoversResult);
	}
	/**
	 * Get GetRealTopMoversResult
	 * @return XiRealTimeTypeTop
	 */
	public function getGetRealTopMoversResult()
	{
		return $this->GetRealTopMoversResult;
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