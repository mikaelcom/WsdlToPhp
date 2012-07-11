<?php
/**
 * Class file for PaylineWebPaymentTypeNationalID
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeNationalID
 * Documentation : unique national merchant ID
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeNationalID extends PaylineWebPaymentWsdlClass
{
	/**
	 * The SIRET
	 * @var SIRET
	 */
	public $SIRET;
	/**
	 * The other
	 * Meta informations :
	 * 	- documentation : to use if country is not France
	 * @var string
	 */
	public $other;
	/**
	 * Constructor
	 * @param SIRET SIRET
	 * @param string other
	 * @return PaylineWebPaymentTypeNationalID
	 */
	public function __construct($_SIRET = null,$_other = null)
	{
		parent::__construct(array('SIRET'=>$_SIRET,'other'=>$_other));
	}
	/**
	 * Set SIRET
	 * @param SIRET SIRET
	 * @return SIRET
	 */
	public function setSIRET($_SIRET)
	{
		return ($this->SIRET = $_SIRET);
	}
	/**
	 * Get SIRET
	 * @return SIRET
	 */
	public function getSIRET()
	{
		return $this->SIRET;
	}
	/**
	 * Set other
	 * @param string other
	 * @return string
	 */
	public function setOther($_other)
	{
		return ($this->other = $_other);
	}
	/**
	 * Get other
	 * @return string
	 */
	public function getOther()
	{
		return $this->other;
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