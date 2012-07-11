<?php
/**
 * Class file for PaylineWebPaymentTypeOrder
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeOrder
 * Documentation : This element contains information about the order
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeOrder extends PaylineWebPaymentWsdlClass
{
	/**
	 * The ref
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $ref;
	/**
	 * The origin
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $origin;
	/**
	 * The country
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The taxes
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $taxes;
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
	 * The date
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $date;
	/**
	 * The details
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeDetails
	 */
	public $details;
	/**
	 * Constructor
	 * @param string ref
	 * @param string origin
	 * @param string country
	 * @param string taxes
	 * @param string amount
	 * @param string currency
	 * @param string date
	 * @param PaylineWebPaymentTypeDetails details
	 * @return PaylineWebPaymentTypeOrder
	 */
	public function __construct($_ref = null,$_origin = null,$_country = null,$_taxes = null,$_amount = null,$_currency = null,$_date = null,$_details = null)
	{
		parent::__construct(array('ref'=>$_ref,'origin'=>$_origin,'country'=>$_country,'taxes'=>$_taxes,'amount'=>$_amount,'currency'=>$_currency,'date'=>$_date,'details'=>$_details));
	}
	/**
	 * Set ref
	 * @param string ref
	 * @return string
	 */
	public function setRef($_ref)
	{
		return ($this->ref = $_ref);
	}
	/**
	 * Get ref
	 * @return string
	 */
	public function getRef()
	{
		return $this->ref;
	}
	/**
	 * Set origin
	 * @param string origin
	 * @return string
	 */
	public function setOrigin($_origin)
	{
		return ($this->origin = $_origin);
	}
	/**
	 * Get origin
	 * @return string
	 */
	public function getOrigin()
	{
		return $this->origin;
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
	 * Set taxes
	 * @param string taxes
	 * @return string
	 */
	public function setTaxes($_taxes)
	{
		return ($this->taxes = $_taxes);
	}
	/**
	 * Get taxes
	 * @return string
	 */
	public function getTaxes()
	{
		return $this->taxes;
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
	 * Set details
	 * @param details details
	 * @return details
	 */
	public function setDetails($_details)
	{
		return ($this->details = $_details);
	}
	/**
	 * Get details
	 * @return PaylineWebPaymentTypedetails
	 */
	public function getDetails()
	{
		return $this->details;
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