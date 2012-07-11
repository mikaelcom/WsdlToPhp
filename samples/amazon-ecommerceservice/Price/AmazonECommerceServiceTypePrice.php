<?php
/**
 * Class file for AmazonECommerceServiceTypePrice
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypePrice
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypePrice extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $Amount;
	/**
	 * The CurrencyCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CurrencyCode;
	/**
	 * The FormattedPrice
	 * @var string
	 */
	public $FormattedPrice;
	/**
	 * Constructor
	 * @param integer Amount
	 * @param string CurrencyCode
	 * @param string FormattedPrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function __construct($_Amount = null,$_CurrencyCode = null,$_FormattedPrice = null)
	{
		parent::__construct(array('Amount'=>$_Amount,'CurrencyCode'=>$_CurrencyCode,'FormattedPrice'=>$_FormattedPrice));
	}
	/**
	 * Set Amount
	 * @param integer Amount
	 * @return integer
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return integer
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set CurrencyCode
	 * @param string CurrencyCode
	 * @return string
	 */
	public function setCurrencyCode($_CurrencyCode)
	{
		return ($this->CurrencyCode = $_CurrencyCode);
	}
	/**
	 * Get CurrencyCode
	 * @return string
	 */
	public function getCurrencyCode()
	{
		return $this->CurrencyCode;
	}
	/**
	 * Set FormattedPrice
	 * @param string FormattedPrice
	 * @return string
	 */
	public function setFormattedPrice($_FormattedPrice)
	{
		return ($this->FormattedPrice = $_FormattedPrice);
	}
	/**
	 * Get FormattedPrice
	 * @return string
	 */
	public function getFormattedPrice()
	{
		return $this->FormattedPrice;
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