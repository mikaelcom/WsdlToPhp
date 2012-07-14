<?php
/**
 * Class file for PayPalTypeActivationDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeActivationDetailsType
 * @date 14/07/2012
 */
class PayPalTypeActivationDetailsType extends PayPalWsdlClass
{
	/**
	 * The InitialAmount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $InitialAmount;
	/**
	 * The FailedInitialAmountAction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeFailedPaymentActionType
	 */
	public $FailedInitialAmountAction;
	/**
	 * Constructor
	 * @param PayPalTypeBasicAmountType InitialAmount
	 * @param PayPalTypeFailedPaymentActionType FailedInitialAmountAction
	 * @return PayPalTypeActivationDetailsType
	 */
	public function __construct($_InitialAmount,$_FailedInitialAmountAction = null)
	{
		parent::__construct(array('InitialAmount'=>$_InitialAmount,'FailedInitialAmountAction'=>$_FailedInitialAmountAction));
	}
	/**
	 * Set InitialAmount
	 * @param BasicAmountType InitialAmount
	 * @return BasicAmountType
	 */
	public function setInitialAmount($_InitialAmount)
	{
		return ($this->InitialAmount = $_InitialAmount);
	}
	/**
	 * Get InitialAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getInitialAmount()
	{
		return $this->InitialAmount;
	}
	/**
	 * Set FailedInitialAmountAction
	 * @param FailedPaymentActionType FailedInitialAmountAction
	 * @return FailedPaymentActionType
	 */
	public function setFailedInitialAmountAction($_FailedInitialAmountAction)
	{
		return ($this->FailedInitialAmountAction = PayPalTypeFailedPaymentActionType::valueIsValid($_FailedInitialAmountAction)?$_FailedInitialAmountAction:null);
	}
	/**
	 * Get FailedInitialAmountAction
	 * @return PayPalTypeFailedPaymentActionType
	 */
	public function getFailedInitialAmountAction()
	{
		return $this->FailedInitialAmountAction;
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