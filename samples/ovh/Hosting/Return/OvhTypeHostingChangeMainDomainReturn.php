<?php
/**
 * Class file for OvhTypeHostingChangeMainDomainReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeHostingChangeMainDomainReturn
 * @date 02/07/2012
 */
class OvhTypeHostingChangeMainDomainReturn extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The totalPriceWithVat
	 * @var float
	 */
	public $totalPriceWithVat;
	/**
	 * The totalPrice
	 * @var float
	 */
	public $totalPrice;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The vatRate
	 * @var float
	 */
	public $vatRate;
	/**
	 * Constructor
	 * @param int id
	 * @param string country
	 * @param string password
	 * @param float totalPriceWithVat
	 * @param float totalPrice
	 * @param string url
	 * @param float vatRate
	 * @return OvhTypeHostingChangeMainDomainReturn
	 */
	public function __construct($_id = null,$_country = null,$_password = null,$_totalPriceWithVat = null,$_totalPrice = null,$_url = null,$_vatRate = null)
	{
		parent::__construct(array('id'=>$_id,'country'=>$_country,'password'=>$_password,'totalPriceWithVat'=>$_totalPriceWithVat,'totalPrice'=>$_totalPrice,'url'=>$_url,'vatRate'=>$_vatRate));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
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
	 * Set totalPriceWithVat
	 * @param float totalPriceWithVat
	 * @return float
	 */
	public function setTotalPriceWithVat($_totalPriceWithVat)
	{
		return ($this->totalPriceWithVat = $_totalPriceWithVat);
	}
	/**
	 * Get totalPriceWithVat
	 * @return float
	 */
	public function getTotalPriceWithVat()
	{
		return $this->totalPriceWithVat;
	}
	/**
	 * Set totalPrice
	 * @param float totalPrice
	 * @return float
	 */
	public function setTotalPrice($_totalPrice)
	{
		return ($this->totalPrice = $_totalPrice);
	}
	/**
	 * Get totalPrice
	 * @return float
	 */
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set vatRate
	 * @param float vatRate
	 * @return float
	 */
	public function setVatRate($_vatRate)
	{
		return ($this->vatRate = $_vatRate);
	}
	/**
	 * Get vatRate
	 * @return float
	 */
	public function getVatRate()
	{
		return $this->vatRate;
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