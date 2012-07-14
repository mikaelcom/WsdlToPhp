<?php
/**
 * Class file for PayPalTypeUATPDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUATPDetailsType
 * Documentation : UATP Card Details Type
 * @date 14/07/2012
 */
class PayPalTypeUATPDetailsType extends PayPalWsdlClass
{
	/**
	 * The UATPNumber
	 * Meta informations :
	 * 	- documentation : UATP Card Number
	 * @var string
	 */
	public $UATPNumber;
	/**
	 * The ExpMonth
	 * Meta informations :
	 * 	- documentation : UATP Card expirty month
	 * @var int
	 */
	public $ExpMonth;
	/**
	 * The ExpYear
	 * Meta informations :
	 * 	- documentation : UATP Card expirty year
	 * @var int
	 */
	public $ExpYear;
	/**
	 * Constructor
	 * @param string UATPNumber
	 * @param int ExpMonth
	 * @param int ExpYear
	 * @return PayPalTypeUATPDetailsType
	 */
	public function __construct($_UATPNumber = null,$_ExpMonth = null,$_ExpYear = null)
	{
		parent::__construct(array('UATPNumber'=>$_UATPNumber,'ExpMonth'=>$_ExpMonth,'ExpYear'=>$_ExpYear));
	}
	/**
	 * Set UATPNumber
	 * @param string UATPNumber
	 * @return string
	 */
	public function setUATPNumber($_UATPNumber)
	{
		return ($this->UATPNumber = $_UATPNumber);
	}
	/**
	 * Get UATPNumber
	 * @return string
	 */
	public function getUATPNumber()
	{
		return $this->UATPNumber;
	}
	/**
	 * Set ExpMonth
	 * @param int ExpMonth
	 * @return int
	 */
	public function setExpMonth($_ExpMonth)
	{
		return ($this->ExpMonth = $_ExpMonth);
	}
	/**
	 * Get ExpMonth
	 * @return int
	 */
	public function getExpMonth()
	{
		return $this->ExpMonth;
	}
	/**
	 * Set ExpYear
	 * @param int ExpYear
	 * @return int
	 */
	public function setExpYear($_ExpYear)
	{
		return ($this->ExpYear = $_ExpYear);
	}
	/**
	 * Get ExpYear
	 * @return int
	 */
	public function getExpYear()
	{
		return $this->ExpYear;
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