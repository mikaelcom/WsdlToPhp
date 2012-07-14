<?php
/**
 * Class file for PayPalTypeRecurringPaymentsSummaryType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRecurringPaymentsSummaryType
 * @date 14/07/2012
 */
class PayPalTypeRecurringPaymentsSummaryType extends PayPalWsdlClass
{
	/**
	 * The NextBillingDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var dateTime
	 */
	public $NextBillingDate;
	/**
	 * The NumberCyclesCompleted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var int
	 */
	public $NumberCyclesCompleted;
	/**
	 * The NumberCyclesRemaining
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var int
	 */
	public $NumberCyclesRemaining;
	/**
	 * The OutstandingBalance
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $OutstandingBalance;
	/**
	 * The FailedPaymentCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var int
	 */
	public $FailedPaymentCount;
	/**
	 * The LastPaymentDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var dateTime
	 */
	public $LastPaymentDate;
	/**
	 * The LastPaymentAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $LastPaymentAmount;
	/**
	 * Constructor
	 * @param dateTime NextBillingDate
	 * @param int NumberCyclesCompleted
	 * @param int NumberCyclesRemaining
	 * @param PayPalTypeBasicAmountType OutstandingBalance
	 * @param int FailedPaymentCount
	 * @param dateTime LastPaymentDate
	 * @param PayPalTypeBasicAmountType LastPaymentAmount
	 * @return PayPalTypeRecurringPaymentsSummaryType
	 */
	public function __construct($_NextBillingDate = null,$_NumberCyclesCompleted,$_NumberCyclesRemaining,$_OutstandingBalance,$_FailedPaymentCount,$_LastPaymentDate = null,$_LastPaymentAmount = null)
	{
		parent::__construct(array('NextBillingDate'=>$_NextBillingDate,'NumberCyclesCompleted'=>$_NumberCyclesCompleted,'NumberCyclesRemaining'=>$_NumberCyclesRemaining,'OutstandingBalance'=>$_OutstandingBalance,'FailedPaymentCount'=>$_FailedPaymentCount,'LastPaymentDate'=>$_LastPaymentDate,'LastPaymentAmount'=>$_LastPaymentAmount));
	}
	/**
	 * Set NextBillingDate
	 * @param dateTime NextBillingDate
	 * @return dateTime
	 */
	public function setNextBillingDate($_NextBillingDate)
	{
		return ($this->NextBillingDate = $_NextBillingDate);
	}
	/**
	 * Get NextBillingDate
	 * @return dateTime
	 */
	public function getNextBillingDate()
	{
		return $this->NextBillingDate;
	}
	/**
	 * Set NumberCyclesCompleted
	 * @param int NumberCyclesCompleted
	 * @return int
	 */
	public function setNumberCyclesCompleted($_NumberCyclesCompleted)
	{
		return ($this->NumberCyclesCompleted = $_NumberCyclesCompleted);
	}
	/**
	 * Get NumberCyclesCompleted
	 * @return int
	 */
	public function getNumberCyclesCompleted()
	{
		return $this->NumberCyclesCompleted;
	}
	/**
	 * Set NumberCyclesRemaining
	 * @param int NumberCyclesRemaining
	 * @return int
	 */
	public function setNumberCyclesRemaining($_NumberCyclesRemaining)
	{
		return ($this->NumberCyclesRemaining = $_NumberCyclesRemaining);
	}
	/**
	 * Get NumberCyclesRemaining
	 * @return int
	 */
	public function getNumberCyclesRemaining()
	{
		return $this->NumberCyclesRemaining;
	}
	/**
	 * Set OutstandingBalance
	 * @param BasicAmountType OutstandingBalance
	 * @return BasicAmountType
	 */
	public function setOutstandingBalance($_OutstandingBalance)
	{
		return ($this->OutstandingBalance = $_OutstandingBalance);
	}
	/**
	 * Get OutstandingBalance
	 * @return PayPalTypeBasicAmountType
	 */
	public function getOutstandingBalance()
	{
		return $this->OutstandingBalance;
	}
	/**
	 * Set FailedPaymentCount
	 * @param int FailedPaymentCount
	 * @return int
	 */
	public function setFailedPaymentCount($_FailedPaymentCount)
	{
		return ($this->FailedPaymentCount = $_FailedPaymentCount);
	}
	/**
	 * Get FailedPaymentCount
	 * @return int
	 */
	public function getFailedPaymentCount()
	{
		return $this->FailedPaymentCount;
	}
	/**
	 * Set LastPaymentDate
	 * @param dateTime LastPaymentDate
	 * @return dateTime
	 */
	public function setLastPaymentDate($_LastPaymentDate)
	{
		return ($this->LastPaymentDate = $_LastPaymentDate);
	}
	/**
	 * Get LastPaymentDate
	 * @return dateTime
	 */
	public function getLastPaymentDate()
	{
		return $this->LastPaymentDate;
	}
	/**
	 * Set LastPaymentAmount
	 * @param BasicAmountType LastPaymentAmount
	 * @return BasicAmountType
	 */
	public function setLastPaymentAmount($_LastPaymentAmount)
	{
		return ($this->LastPaymentAmount = $_LastPaymentAmount);
	}
	/**
	 * Get LastPaymentAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getLastPaymentAmount()
	{
		return $this->LastPaymentAmount;
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