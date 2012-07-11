<?php
/**
 * Class file for XiRealTimeTypeGetRealTopLosersResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealTopLosersResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealTopLosersResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealTopLosersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeTop
	 */
	public $GetRealTopLosersResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTop GetRealTopLosersResult
	 * @return XiRealTimeTypeGetRealTopLosersResponse
	 */
	public function __construct($_GetRealTopLosersResult = null)
	{
		parent::__construct(array('GetRealTopLosersResult'=>$_GetRealTopLosersResult));
	}
	/**
	 * Set GetRealTopLosersResult
	 * @param Top GetRealTopLosersResult
	 * @return Top
	 */
	public function setGetRealTopLosersResult($_GetRealTopLosersResult)
	{
		return ($this->GetRealTopLosersResult = $_GetRealTopLosersResult);
	}
	/**
	 * Get GetRealTopLosersResult
	 * @return XiRealTimeTypeTop
	 */
	public function getGetRealTopLosersResult()
	{
		return $this->GetRealTopLosersResult;
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