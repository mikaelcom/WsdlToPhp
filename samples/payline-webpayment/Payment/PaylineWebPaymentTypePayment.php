<?php
/**
 * Class file for PaylineWebPaymentTypePayment
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypePayment
 * Documentation : This element contains information about the payment
 * @date 10/07/2012
 */
class PaylineWebPaymentTypePayment extends PaylineWebPaymentWsdlClass
{
	/**
	 * The amount
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $amount;
	/**
	 * The currency
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $currency;
	/**
	 * The action
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $action;
	/**
	 * The mode
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $mode;
	/**
	 * The contractNumber
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $contractNumber;
	/**
	 * The differedActionDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $differedActionDate;
	/**
	 * Constructor
	 * @param string amount
	 * @param string currency
	 * @param string action
	 * @param string mode
	 * @param string contractNumber
	 * @param string differedActionDate
	 * @return PaylineWebPaymentTypePayment
	 */
	public function __construct($_amount = null,$_currency = null,$_action = null,$_mode = null,$_contractNumber = null,$_differedActionDate = null)
	{
		parent::__construct(array('amount'=>$_amount,'currency'=>$_currency,'action'=>$_action,'mode'=>$_mode,'contractNumber'=>$_contractNumber,'differedActionDate'=>$_differedActionDate));
	}
	/**
	 * Set amount
	 * @param string amount
	 * @return string
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Get amount
	 * @return string
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set currency
	 * @param string currency
	 * @return string
	 */
	public function setCurrency($_currency)
	{
		return ($this->currency = $_currency);
	}
	/**
	 * Get currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->currency;
	}
	/**
	 * Set action
	 * @param string action
	 * @return string
	 */
	public function setAction($_action)
	{
		return ($this->action = $_action);
	}
	/**
	 * Get action
	 * @return string
	 */
	public function getAction()
	{
		return $this->action;
	}
	/**
	 * Set mode
	 * @param string mode
	 * @return string
	 */
	public function setMode($_mode)
	{
		return ($this->mode = $_mode);
	}
	/**
	 * Get mode
	 * @return string
	 */
	public function getMode()
	{
		return $this->mode;
	}
	/**
	 * Set contractNumber
	 * @param string contractNumber
	 * @return string
	 */
	public function setContractNumber($_contractNumber)
	{
		return ($this->contractNumber = $_contractNumber);
	}
	/**
	 * Get contractNumber
	 * @return string
	 */
	public function getContractNumber()
	{
		return $this->contractNumber;
	}
	/**
	 * Set differedActionDate
	 * @param string differedActionDate
	 * @return string
	 */
	public function setDifferedActionDate($_differedActionDate)
	{
		return ($this->differedActionDate = $_differedActionDate);
	}
	/**
	 * Get differedActionDate
	 * @return string
	 */
	public function getDifferedActionDate()
	{
		return $this->differedActionDate;
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