<?php
/**
 * Class file for XiBondMasterTypeGetEarlyRedemptionScheduleResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeGetEarlyRedemptionScheduleResponse
 * @date 08/07/2012
 */
class XiBondMasterTypeGetEarlyRedemptionScheduleResponse extends XiBondMasterWsdlClass
{
	/**
	 * The GetEarlyRedemptionScheduleResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeEarlyRedemptionScheduleComposite
	 */
	public $GetEarlyRedemptionScheduleResult;
	/**
	 * Constructor
	 * @param XiBondMasterTypeEarlyRedemptionScheduleComposite GetEarlyRedemptionScheduleResult
	 * @return XiBondMasterTypeGetEarlyRedemptionScheduleResponse
	 */
	public function __construct($_GetEarlyRedemptionScheduleResult = null)
	{
		parent::__construct(array('GetEarlyRedemptionScheduleResult'=>$_GetEarlyRedemptionScheduleResult));
	}
	/**
	 * Set GetEarlyRedemptionScheduleResult
	 * @param EarlyRedemptionScheduleComposite GetEarlyRedemptionScheduleResult
	 * @return EarlyRedemptionScheduleComposite
	 */
	public function setGetEarlyRedemptionScheduleResult($_GetEarlyRedemptionScheduleResult)
	{
		return ($this->GetEarlyRedemptionScheduleResult = $_GetEarlyRedemptionScheduleResult);
	}
	/**
	 * Get GetEarlyRedemptionScheduleResult
	 * @return XiBondMasterTypeEarlyRedemptionScheduleComposite
	 */
	public function getGetEarlyRedemptionScheduleResult()
	{
		return $this->GetEarlyRedemptionScheduleResult;
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