<?php
/**
 * Class file for XiFinancialsTypeCashFromFinancingActivities
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeCashFromFinancingActivities
 * @date 08/07/2012
 */
class XiFinancialsTypeCashFromFinancingActivities extends XiFinancialsWsdlClass
{
	/**
	 * The IssuanceOfDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IssuanceOfDebt;
	/**
	 * The IssuanceOfCapitalStock
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IssuanceOfCapitalStock;
	/**
	 * The RepaymentOfDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RepaymentOfDebt;
	/**
	 * The RepurchaseOfCapitalStock
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RepurchaseOfCapitalStock;
	/**
	 * The PaymentofCashDividends
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PaymentofCashDividends;
	/**
	 * The NetOtherFinancingCharges
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetOtherFinancingCharges;
	/**
	 * The CashFromDiscontinuedFinancingActivities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashFromDiscontinuedFinancingActivities;
	/**
	 * The NetCashFromFinancingActivities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetCashFromFinancingActivities;
	/**
	 * Constructor
	 * @param double IssuanceOfDebt
	 * @param double IssuanceOfCapitalStock
	 * @param double RepaymentOfDebt
	 * @param double RepurchaseOfCapitalStock
	 * @param double PaymentofCashDividends
	 * @param double NetOtherFinancingCharges
	 * @param double CashFromDiscontinuedFinancingActivities
	 * @param double NetCashFromFinancingActivities
	 * @return XiFinancialsTypeCashFromFinancingActivities
	 */
	public function __construct($_IssuanceOfDebt,$_IssuanceOfCapitalStock,$_RepaymentOfDebt,$_RepurchaseOfCapitalStock,$_PaymentofCashDividends,$_NetOtherFinancingCharges,$_CashFromDiscontinuedFinancingActivities,$_NetCashFromFinancingActivities)
	{
		parent::__construct(array('IssuanceOfDebt'=>$_IssuanceOfDebt,'IssuanceOfCapitalStock'=>$_IssuanceOfCapitalStock,'RepaymentOfDebt'=>$_RepaymentOfDebt,'RepurchaseOfCapitalStock'=>$_RepurchaseOfCapitalStock,'PaymentofCashDividends'=>$_PaymentofCashDividends,'NetOtherFinancingCharges'=>$_NetOtherFinancingCharges,'CashFromDiscontinuedFinancingActivities'=>$_CashFromDiscontinuedFinancingActivities,'NetCashFromFinancingActivities'=>$_NetCashFromFinancingActivities));
	}
	/**
	 * Set IssuanceOfDebt
	 * @param double IssuanceOfDebt
	 * @return double
	 */
	public function setIssuanceOfDebt($_IssuanceOfDebt)
	{
		return ($this->IssuanceOfDebt = $_IssuanceOfDebt);
	}
	/**
	 * Get IssuanceOfDebt
	 * @return double
	 */
	public function getIssuanceOfDebt()
	{
		return $this->IssuanceOfDebt;
	}
	/**
	 * Set IssuanceOfCapitalStock
	 * @param double IssuanceOfCapitalStock
	 * @return double
	 */
	public function setIssuanceOfCapitalStock($_IssuanceOfCapitalStock)
	{
		return ($this->IssuanceOfCapitalStock = $_IssuanceOfCapitalStock);
	}
	/**
	 * Get IssuanceOfCapitalStock
	 * @return double
	 */
	public function getIssuanceOfCapitalStock()
	{
		return $this->IssuanceOfCapitalStock;
	}
	/**
	 * Set RepaymentOfDebt
	 * @param double RepaymentOfDebt
	 * @return double
	 */
	public function setRepaymentOfDebt($_RepaymentOfDebt)
	{
		return ($this->RepaymentOfDebt = $_RepaymentOfDebt);
	}
	/**
	 * Get RepaymentOfDebt
	 * @return double
	 */
	public function getRepaymentOfDebt()
	{
		return $this->RepaymentOfDebt;
	}
	/**
	 * Set RepurchaseOfCapitalStock
	 * @param double RepurchaseOfCapitalStock
	 * @return double
	 */
	public function setRepurchaseOfCapitalStock($_RepurchaseOfCapitalStock)
	{
		return ($this->RepurchaseOfCapitalStock = $_RepurchaseOfCapitalStock);
	}
	/**
	 * Get RepurchaseOfCapitalStock
	 * @return double
	 */
	public function getRepurchaseOfCapitalStock()
	{
		return $this->RepurchaseOfCapitalStock;
	}
	/**
	 * Set PaymentofCashDividends
	 * @param double PaymentofCashDividends
	 * @return double
	 */
	public function setPaymentofCashDividends($_PaymentofCashDividends)
	{
		return ($this->PaymentofCashDividends = $_PaymentofCashDividends);
	}
	/**
	 * Get PaymentofCashDividends
	 * @return double
	 */
	public function getPaymentofCashDividends()
	{
		return $this->PaymentofCashDividends;
	}
	/**
	 * Set NetOtherFinancingCharges
	 * @param double NetOtherFinancingCharges
	 * @return double
	 */
	public function setNetOtherFinancingCharges($_NetOtherFinancingCharges)
	{
		return ($this->NetOtherFinancingCharges = $_NetOtherFinancingCharges);
	}
	/**
	 * Get NetOtherFinancingCharges
	 * @return double
	 */
	public function getNetOtherFinancingCharges()
	{
		return $this->NetOtherFinancingCharges;
	}
	/**
	 * Set CashFromDiscontinuedFinancingActivities
	 * @param double CashFromDiscontinuedFinancingActivities
	 * @return double
	 */
	public function setCashFromDiscontinuedFinancingActivities($_CashFromDiscontinuedFinancingActivities)
	{
		return ($this->CashFromDiscontinuedFinancingActivities = $_CashFromDiscontinuedFinancingActivities);
	}
	/**
	 * Get CashFromDiscontinuedFinancingActivities
	 * @return double
	 */
	public function getCashFromDiscontinuedFinancingActivities()
	{
		return $this->CashFromDiscontinuedFinancingActivities;
	}
	/**
	 * Set NetCashFromFinancingActivities
	 * @param double NetCashFromFinancingActivities
	 * @return double
	 */
	public function setNetCashFromFinancingActivities($_NetCashFromFinancingActivities)
	{
		return ($this->NetCashFromFinancingActivities = $_NetCashFromFinancingActivities);
	}
	/**
	 * Get NetCashFromFinancingActivities
	 * @return double
	 */
	public function getNetCashFromFinancingActivities()
	{
		return $this->NetCashFromFinancingActivities;
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