<?php
/**
 * Class file for PayPalTypeIncentiveInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveInfoType
 * Documentation : Details of incentive application on individual bucket.
 * @date 14/07/2012
 */
class PayPalTypeIncentiveInfoType extends PayPalWsdlClass
{
	/**
	 * The IncentiveCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Incentive redemption code.
	 * @var string
	 */
	public $IncentiveCode;
	/**
	 * The ApplyIndication
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Defines which bucket or item that the incentive should be applied to.
	 * @var PayPalTypeIncentiveApplyIndicationType
	 */
	public $ApplyIndication;
	/**
	 * Constructor
	 * @param string IncentiveCode
	 * @param PayPalTypeIncentiveApplyIndicationType ApplyIndication
	 * @return PayPalTypeIncentiveInfoType
	 */
	public function __construct($_IncentiveCode = null,$_ApplyIndication = null)
	{
		parent::__construct(array('IncentiveCode'=>$_IncentiveCode,'ApplyIndication'=>$_ApplyIndication));
	}
	/**
	 * Set IncentiveCode
	 * @param string IncentiveCode
	 * @return string
	 */
	public function setIncentiveCode($_IncentiveCode)
	{
		return ($this->IncentiveCode = $_IncentiveCode);
	}
	/**
	 * Get IncentiveCode
	 * @return string
	 */
	public function getIncentiveCode()
	{
		return $this->IncentiveCode;
	}
	/**
	 * Set ApplyIndication
	 * @param IncentiveApplyIndicationType ApplyIndication
	 * @return IncentiveApplyIndicationType
	 */
	public function setApplyIndication($_ApplyIndication)
	{
		return ($this->ApplyIndication = $_ApplyIndication);
	}
	/**
	 * Get ApplyIndication
	 * @return PayPalTypeIncentiveApplyIndicationType
	 */
	public function getApplyIndication()
	{
		return $this->ApplyIndication;
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