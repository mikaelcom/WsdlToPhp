<?php
/**
 * Class file for OvhTypeBillingInvoiceInfoPayementStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingInvoiceInfoPayementStruct
 * @date 02/07/2012
 */
class OvhTypeBillingInvoiceInfoPayementStruct extends OvhWsdlClass
{
	/**
	 * The finaldate
	 * @var string
	 */
	public $finaldate;
	/**
	 * The deposit_date
	 * @var string
	 */
	public $deposit_date;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The customerid
	 * @var string
	 */
	public $customerid;
	/**
	 * The paymentmean
	 * @var string
	 */
	public $paymentmean;
	/**
	 * The paymentdate
	 * @var string
	 */
	public $paymentdate;
	/**
	 * The orderid
	 * @var int
	 */
	public $orderid;
	/**
	 * Constructor
	 * @param string finaldate
	 * @param string deposit_date
	 * @param string status
	 * @param string customerid
	 * @param string paymentmean
	 * @param string paymentdate
	 * @param int orderid
	 * @return OvhTypeBillingInvoiceInfoPayementStruct
	 */
	public function __construct($_finaldate = null,$_deposit_date = null,$_status = null,$_customerid = null,$_paymentmean = null,$_paymentdate = null,$_orderid = null)
	{
		parent::__construct(array('finaldate'=>$_finaldate,'deposit_date'=>$_deposit_date,'status'=>$_status,'customerid'=>$_customerid,'paymentmean'=>$_paymentmean,'paymentdate'=>$_paymentdate,'orderid'=>$_orderid));
	}
	/**
	 * Set finaldate
	 * @param string finaldate
	 * @return string
	 */
	public function setFinaldate($_finaldate)
	{
		return ($this->finaldate = $_finaldate);
	}
	/**
	 * Get finaldate
	 * @return string
	 */
	public function getFinaldate()
	{
		return $this->finaldate;
	}
	/**
	 * Set deposit_date
	 * @param string deposit_date
	 * @return string
	 */
	public function setDeposit_date($_deposit_date)
	{
		return ($this->deposit_date = $_deposit_date);
	}
	/**
	 * Get deposit_date
	 * @return string
	 */
	public function getDeposit_date()
	{
		return $this->deposit_date;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set customerid
	 * @param string customerid
	 * @return string
	 */
	public function setCustomerid($_customerid)
	{
		return ($this->customerid = $_customerid);
	}
	/**
	 * Get customerid
	 * @return string
	 */
	public function getCustomerid()
	{
		return $this->customerid;
	}
	/**
	 * Set paymentmean
	 * @param string paymentmean
	 * @return string
	 */
	public function setPaymentmean($_paymentmean)
	{
		return ($this->paymentmean = $_paymentmean);
	}
	/**
	 * Get paymentmean
	 * @return string
	 */
	public function getPaymentmean()
	{
		return $this->paymentmean;
	}
	/**
	 * Set paymentdate
	 * @param string paymentdate
	 * @return string
	 */
	public function setPaymentdate($_paymentdate)
	{
		return ($this->paymentdate = $_paymentdate);
	}
	/**
	 * Get paymentdate
	 * @return string
	 */
	public function getPaymentdate()
	{
		return $this->paymentdate;
	}
	/**
	 * Set orderid
	 * @param int orderid
	 * @return int
	 */
	public function setOrderid($_orderid)
	{
		return ($this->orderid = $_orderid);
	}
	/**
	 * Get orderid
	 * @return int
	 */
	public function getOrderid()
	{
		return $this->orderid;
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