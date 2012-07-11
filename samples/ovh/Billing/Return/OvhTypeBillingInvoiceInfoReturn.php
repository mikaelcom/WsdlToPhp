<?php
/**
 * Class file for OvhTypeBillingInvoiceInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingInvoiceInfoReturn
 * @date 02/07/2012
 */
class OvhTypeBillingInvoiceInfoReturn extends OvhWsdlClass
{
	/**
	 * The billnum
	 * @var string
	 */
	public $billnum;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The nicbilling
	 * @var string
	 */
	public $nicbilling;
	/**
	 * The baseprice
	 * @var string
	 */
	public $baseprice;
	/**
	 * The finalprice
	 * @var float
	 */
	public $finalprice;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The order
	 * @var string
	 */
	public $order;
	/**
	 * The nicorder
	 * @var string
	 */
	public $nicorder;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The taxrate
	 * @var float
	 */
	public $taxrate;
	/**
	 * The tax
	 * @var float
	 */
	public $tax;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The details
	 * @var OvhTypeMyArrayOfBillingInvoiceInfoDetailStructType
	 */
	public $details;
	/**
	 * The payment
	 * @var OvhTypeBillingInvoiceInfoPayementStruct
	 */
	public $payment;
	/**
	 * Constructor
	 * @param string billnum
	 * @param string date
	 * @param string nicbilling
	 * @param string baseprice
	 * @param float finalprice
	 * @param string password
	 * @param string order
	 * @param string nicorder
	 * @param string country
	 * @param float taxrate
	 * @param float tax
	 * @param string type
	 * @param OvhTypeMyArrayOfBillingInvoiceInfoDetailStructType details
	 * @param OvhTypeBillingInvoiceInfoPayementStruct payment
	 * @return OvhTypeBillingInvoiceInfoReturn
	 */
	public function __construct($_billnum = null,$_date = null,$_nicbilling = null,$_baseprice = null,$_finalprice = null,$_password = null,$_order = null,$_nicorder = null,$_country = null,$_taxrate = null,$_tax = null,$_type = null,$_details = null,$_payment = null)
	{
		parent::__construct(array('billnum'=>$_billnum,'date'=>$_date,'nicbilling'=>$_nicbilling,'baseprice'=>$_baseprice,'finalprice'=>$_finalprice,'password'=>$_password,'order'=>$_order,'nicorder'=>$_nicorder,'country'=>$_country,'taxrate'=>$_taxrate,'tax'=>$_tax,'type'=>$_type,'details'=>new OvhTypeMyArrayOfBillingInvoiceInfoDetailStructType($_details),'payment'=>$_payment));
	}
	/**
	 * Set billnum
	 * @param string billnum
	 * @return string
	 */
	public function setBillnum($_billnum)
	{
		return ($this->billnum = $_billnum);
	}
	/**
	 * Get billnum
	 * @return string
	 */
	public function getBillnum()
	{
		return $this->billnum;
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set nicbilling
	 * @param string nicbilling
	 * @return string
	 */
	public function setNicbilling($_nicbilling)
	{
		return ($this->nicbilling = $_nicbilling);
	}
	/**
	 * Get nicbilling
	 * @return string
	 */
	public function getNicbilling()
	{
		return $this->nicbilling;
	}
	/**
	 * Set baseprice
	 * @param string baseprice
	 * @return string
	 */
	public function setBaseprice($_baseprice)
	{
		return ($this->baseprice = $_baseprice);
	}
	/**
	 * Get baseprice
	 * @return string
	 */
	public function getBaseprice()
	{
		return $this->baseprice;
	}
	/**
	 * Set finalprice
	 * @param float finalprice
	 * @return float
	 */
	public function setFinalprice($_finalprice)
	{
		return ($this->finalprice = $_finalprice);
	}
	/**
	 * Get finalprice
	 * @return float
	 */
	public function getFinalprice()
	{
		return $this->finalprice;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set order
	 * @param string order
	 * @return string
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get order
	 * @return string
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set nicorder
	 * @param string nicorder
	 * @return string
	 */
	public function setNicorder($_nicorder)
	{
		return ($this->nicorder = $_nicorder);
	}
	/**
	 * Get nicorder
	 * @return string
	 */
	public function getNicorder()
	{
		return $this->nicorder;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set taxrate
	 * @param float taxrate
	 * @return float
	 */
	public function setTaxrate($_taxrate)
	{
		return ($this->taxrate = $_taxrate);
	}
	/**
	 * Get taxrate
	 * @return float
	 */
	public function getTaxrate()
	{
		return $this->taxrate;
	}
	/**
	 * Set tax
	 * @param float tax
	 * @return float
	 */
	public function setTax($_tax)
	{
		return ($this->tax = $_tax);
	}
	/**
	 * Get tax
	 * @return float
	 */
	public function getTax()
	{
		return $this->tax;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set details
	 * @param MyArrayOfBillingInvoiceInfoDetailStructType details
	 * @return MyArrayOfBillingInvoiceInfoDetailStructType
	 */
	public function setDetails($_details)
	{
		return ($this->details = $_details);
	}
	/**
	 * Get details
	 * @return OvhTypeMyArrayOfBillingInvoiceInfoDetailStructType
	 */
	public function getDetails()
	{
		return $this->details;
	}
	/**
	 * Set payment
	 * @param billingInvoiceInfoPayementStruct payment
	 * @return billingInvoiceInfoPayementStruct
	 */
	public function setPayment($_payment)
	{
		return ($this->payment = $_payment);
	}
	/**
	 * Get payment
	 * @return OvhTypebillingInvoiceInfoPayementStruct
	 */
	public function getPayment()
	{
		return $this->payment;
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