<?php
/**
 * Class file for OvhTypeBillingInvoiceStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingInvoiceStruct
 * @date 02/07/2012
 */
class OvhTypeBillingInvoiceStruct extends OvhWsdlClass
{
	/**
	 * The vat
	 * @var string
	 */
	public $vat;
	/**
	 * The totalPrice
	 * @var string
	 */
	public $totalPrice;
	/**
	 * The totalPriceWithVat
	 * @var string
	 */
	public $totalPriceWithVat;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The billnum
	 * @var string
	 */
	public $billnum;
	/**
	 * The details
	 * @var OvhTypeMyArrayOfBillingInvoiceDetailStructType
	 */
	public $details;
	/**
	 * The domains
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $domains;
	/**
	 * The billingCountry
	 * @var string
	 */
	public $billingCountry;
	/**
	 * The ordernum
	 * @var string
	 */
	public $ordernum;
	/**
	 * Constructor
	 * @param string vat
	 * @param string totalPrice
	 * @param string totalPriceWithVat
	 * @param string date
	 * @param string nic
	 * @param string billnum
	 * @param OvhTypeMyArrayOfBillingInvoiceDetailStructType details
	 * @param OvhTypeMyArrayOfStringType domains
	 * @param string billingCountry
	 * @param string ordernum
	 * @return OvhTypeBillingInvoiceStruct
	 */
	public function __construct($_vat = null,$_totalPrice = null,$_totalPriceWithVat = null,$_date = null,$_nic = null,$_billnum = null,$_details = null,$_domains = null,$_billingCountry = null,$_ordernum = null)
	{
		parent::__construct(array('vat'=>$_vat,'totalPrice'=>$_totalPrice,'totalPriceWithVat'=>$_totalPriceWithVat,'date'=>$_date,'nic'=>$_nic,'billnum'=>$_billnum,'details'=>new OvhTypeMyArrayOfBillingInvoiceDetailStructType($_details),'domains'=>new OvhTypeMyArrayOfStringType($_domains),'billingCountry'=>$_billingCountry,'ordernum'=>$_ordernum));
	}
	/**
	 * Set vat
	 * @param string vat
	 * @return string
	 */
	public function setVat($_vat)
	{
		return ($this->vat = $_vat);
	}
	/**
	 * Get vat
	 * @return string
	 */
	public function getVat()
	{
		return $this->vat;
	}
	/**
	 * Set totalPrice
	 * @param string totalPrice
	 * @return string
	 */
	public function setTotalPrice($_totalPrice)
	{
		return ($this->totalPrice = $_totalPrice);
	}
	/**
	 * Get totalPrice
	 * @return string
	 */
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}
	/**
	 * Set totalPriceWithVat
	 * @param string totalPriceWithVat
	 * @return string
	 */
	public function setTotalPriceWithVat($_totalPriceWithVat)
	{
		return ($this->totalPriceWithVat = $_totalPriceWithVat);
	}
	/**
	 * Get totalPriceWithVat
	 * @return string
	 */
	public function getTotalPriceWithVat()
	{
		return $this->totalPriceWithVat;
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
	 * Set nic
	 * @param string nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get nic
	 * @return string
	 */
	public function getNic()
	{
		return $this->nic;
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
	 * Set details
	 * @param MyArrayOfBillingInvoiceDetailStructType details
	 * @return MyArrayOfBillingInvoiceDetailStructType
	 */
	public function setDetails($_details)
	{
		return ($this->details = $_details);
	}
	/**
	 * Get details
	 * @return OvhTypeMyArrayOfBillingInvoiceDetailStructType
	 */
	public function getDetails()
	{
		return $this->details;
	}
	/**
	 * Set domains
	 * @param MyArrayOfStringType domains
	 * @return MyArrayOfStringType
	 */
	public function setDomains($_domains)
	{
		return ($this->domains = $_domains);
	}
	/**
	 * Get domains
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getDomains()
	{
		return $this->domains;
	}
	/**
	 * Set billingCountry
	 * @param string billingCountry
	 * @return string
	 */
	public function setBillingCountry($_billingCountry)
	{
		return ($this->billingCountry = $_billingCountry);
	}
	/**
	 * Get billingCountry
	 * @return string
	 */
	public function getBillingCountry()
	{
		return $this->billingCountry;
	}
	/**
	 * Set ordernum
	 * @param string ordernum
	 * @return string
	 */
	public function setOrdernum($_ordernum)
	{
		return ($this->ordernum = $_ordernum);
	}
	/**
	 * Get ordernum
	 * @return string
	 */
	public function getOrdernum()
	{
		return $this->ordernum;
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