<?php
/**
 * Class file for OvhTypeTelephonyRateStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyRateStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyRateStruct extends OvhWsdlClass
{
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The countrySuffixe
	 * @var string
	 */
	public $countrySuffixe;
	/**
	 * The price
	 * @var float
	 */
	public $price;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * Constructor
	 * @param string country
	 * @param string countrySuffixe
	 * @param float price
	 * @param string type
	 * @return OvhTypeTelephonyRateStruct
	 */
	public function __construct($_country = null,$_countrySuffixe = null,$_price = null,$_type = null)
	{
		parent::__construct(array('country'=>$_country,'countrySuffixe'=>$_countrySuffixe,'price'=>$_price,'type'=>$_type));
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
	 * Set countrySuffixe
	 * @param string countrySuffixe
	 * @return string
	 */
	public function setCountrySuffixe($_countrySuffixe)
	{
		return ($this->countrySuffixe = $_countrySuffixe);
	}
	/**
	 * Get countrySuffixe
	 * @return string
	 */
	public function getCountrySuffixe()
	{
		return $this->countrySuffixe;
	}
	/**
	 * Set price
	 * @param float price
	 * @return float
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Get price
	 * @return float
	 */
	public function getPrice()
	{
		return $this->price;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>