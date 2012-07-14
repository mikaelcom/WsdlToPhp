<?php
/**
 * Class file for PayPalTypeShippingInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeShippingInfoType
 * Documentation : 
 * @date 14/07/2012
 */
class PayPalTypeShippingInfoType extends PayPalWsdlClass
{
	/**
	 * The ShippingMethod
	 * @var string
	 */
	public $ShippingMethod;
	/**
	 * The ShippingCarrier
	 * @var string
	 */
	public $ShippingCarrier;
	/**
	 * The ShippingAmount
	 * @var PayPalTypeBasicAmountType
	 */
	public $ShippingAmount;
	/**
	 * The HandlingAmount
	 * @var PayPalTypeBasicAmountType
	 */
	public $HandlingAmount;
	/**
	 * The InsuranceAmount
	 * @var PayPalTypeBasicAmountType
	 */
	public $InsuranceAmount;
	/**
	 * Constructor
	 * @param string ShippingMethod
	 * @param string ShippingCarrier
	 * @param PayPalTypeBasicAmountType ShippingAmount
	 * @param PayPalTypeBasicAmountType HandlingAmount
	 * @param PayPalTypeBasicAmountType InsuranceAmount
	 * @return PayPalTypeShippingInfoType
	 */
	public function __construct($_ShippingMethod = null,$_ShippingCarrier = null,$_ShippingAmount = null,$_HandlingAmount = null,$_InsuranceAmount = null)
	{
		parent::__construct(array('ShippingMethod'=>$_ShippingMethod,'ShippingCarrier'=>$_ShippingCarrier,'ShippingAmount'=>$_ShippingAmount,'HandlingAmount'=>$_HandlingAmount,'InsuranceAmount'=>$_InsuranceAmount));
	}
	/**
	 * Set ShippingMethod
	 * @param string ShippingMethod
	 * @return string
	 */
	public function setShippingMethod($_ShippingMethod)
	{
		return ($this->ShippingMethod = $_ShippingMethod);
	}
	/**
	 * Get ShippingMethod
	 * @return string
	 */
	public function getShippingMethod()
	{
		return $this->ShippingMethod;
	}
	/**
	 * Set ShippingCarrier
	 * @param string ShippingCarrier
	 * @return string
	 */
	public function setShippingCarrier($_ShippingCarrier)
	{
		return ($this->ShippingCarrier = $_ShippingCarrier);
	}
	/**
	 * Get ShippingCarrier
	 * @return string
	 */
	public function getShippingCarrier()
	{
		return $this->ShippingCarrier;
	}
	/**
	 * Set ShippingAmount
	 * @param BasicAmountType ShippingAmount
	 * @return BasicAmountType
	 */
	public function setShippingAmount($_ShippingAmount)
	{
		return ($this->ShippingAmount = $_ShippingAmount);
	}
	/**
	 * Get ShippingAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getShippingAmount()
	{
		return $this->ShippingAmount;
	}
	/**
	 * Set HandlingAmount
	 * @param BasicAmountType HandlingAmount
	 * @return BasicAmountType
	 */
	public function setHandlingAmount($_HandlingAmount)
	{
		return ($this->HandlingAmount = $_HandlingAmount);
	}
	/**
	 * Get HandlingAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getHandlingAmount()
	{
		return $this->HandlingAmount;
	}
	/**
	 * Set InsuranceAmount
	 * @param BasicAmountType InsuranceAmount
	 * @return BasicAmountType
	 */
	public function setInsuranceAmount($_InsuranceAmount)
	{
		return ($this->InsuranceAmount = $_InsuranceAmount);
	}
	/**
	 * Get InsuranceAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getInsuranceAmount()
	{
		return $this->InsuranceAmount;
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