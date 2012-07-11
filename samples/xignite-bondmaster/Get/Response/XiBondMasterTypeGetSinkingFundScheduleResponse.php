<?php
/**
 * Class file for XiBondMasterTypeGetSinkingFundScheduleResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeGetSinkingFundScheduleResponse
 * @date 08/07/2012
 */
class XiBondMasterTypeGetSinkingFundScheduleResponse extends XiBondMasterWsdlClass
{
	/**
	 * The GetSinkingFundScheduleResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeSinkingFundScheduleComposite
	 */
	public $GetSinkingFundScheduleResult;
	/**
	 * Constructor
	 * @param XiBondMasterTypeSinkingFundScheduleComposite GetSinkingFundScheduleResult
	 * @return XiBondMasterTypeGetSinkingFundScheduleResponse
	 */
	public function __construct($_GetSinkingFundScheduleResult = null)
	{
		parent::__construct(array('GetSinkingFundScheduleResult'=>$_GetSinkingFundScheduleResult));
	}
	/**
	 * Set GetSinkingFundScheduleResult
	 * @param SinkingFundScheduleComposite GetSinkingFundScheduleResult
	 * @return SinkingFundScheduleComposite
	 */
	public function setGetSinkingFundScheduleResult($_GetSinkingFundScheduleResult)
	{
		return ($this->GetSinkingFundScheduleResult = $_GetSinkingFundScheduleResult);
	}
	/**
	 * Get GetSinkingFundScheduleResult
	 * @return XiBondMasterTypeSinkingFundScheduleComposite
	 */
	public function getGetSinkingFundScheduleResult()
	{
		return $this->GetSinkingFundScheduleResult;
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