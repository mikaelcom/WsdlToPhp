<?php
/**
 * Class file for XiRealTimeTypeGetRealTopResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealTopResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealTopResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealTopResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeArrayOfTop
	 */
	public $GetRealTopResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeArrayOfTop GetRealTopResult
	 * @return XiRealTimeTypeGetRealTopResponse
	 */
	public function __construct($_GetRealTopResult = null)
	{
		parent::__construct(array('GetRealTopResult'=>new XiRealTimeTypeArrayOfTop($_GetRealTopResult)));
	}
	/**
	 * Set GetRealTopResult
	 * @param ArrayOfTop GetRealTopResult
	 * @return ArrayOfTop
	 */
	public function setGetRealTopResult($_GetRealTopResult)
	{
		return ($this->GetRealTopResult = $_GetRealTopResult);
	}
	/**
	 * Get GetRealTopResult
	 * @return XiRealTimeTypeArrayOfTop
	 */
	public function getGetRealTopResult()
	{
		return $this->GetRealTopResult;
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