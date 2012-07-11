<?php
/**
 * Class file for PaylineWebPaymentTypeBankAccount
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeBankAccount
 * Documentation : This element contains bankAccount information
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeBankAccount extends PaylineWebPaymentWsdlClass
{
	/**
	 * The bankCode
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $bankCode;
	/**
	 * The iban
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeIban
	 */
	public $iban;
	/**
	 * The rib
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeRib
	 */
	public $rib;
	/**
	 * Constructor
	 * @param string bankCode
	 * @param PaylineWebPaymentTypeIban iban
	 * @param PaylineWebPaymentTypeRib rib
	 * @return PaylineWebPaymentTypeBankAccount
	 */
	public function __construct($_bankCode = null,$_iban = null,$_rib = null)
	{
		parent::__construct(array('bankCode'=>$_bankCode,'iban'=>$_iban,'rib'=>$_rib));
	}
	/**
	 * Set bankCode
	 * @param string bankCode
	 * @return string
	 */
	public function setBankCode($_bankCode)
	{
		return ($this->bankCode = $_bankCode);
	}
	/**
	 * Get bankCode
	 * @return string
	 */
	public function getBankCode()
	{
		return $this->bankCode;
	}
	/**
	 * Set iban
	 * @param iban iban
	 * @return iban
	 */
	public function setIban($_iban)
	{
		return ($this->iban = $_iban);
	}
	/**
	 * Get iban
	 * @return PaylineWebPaymentTypeiban
	 */
	public function getIban()
	{
		return $this->iban;
	}
	/**
	 * Set rib
	 * @param rib rib
	 * @return rib
	 */
	public function setRib($_rib)
	{
		return ($this->rib = $_rib);
	}
	/**
	 * Get rib
	 * @return PaylineWebPaymentTyperib
	 */
	public function getRib()
	{
		return $this->rib;
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