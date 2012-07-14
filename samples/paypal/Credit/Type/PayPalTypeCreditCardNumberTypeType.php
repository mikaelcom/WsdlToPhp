<?php
/**
 * Class file for PayPalTypeCreditCardNumberTypeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreditCardNumberTypeType
 * Documentation : 
 * @date 14/07/2012
 */
class PayPalTypeCreditCardNumberTypeType extends PayPalWsdlClass
{
	/**
	 * The CreditCardType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeCreditCardTypeType
	 */
	public $CreditCardType;
	/**
	 * The CreditCardNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CreditCardNumber;
	/**
	 * Constructor
	 * @param PayPalTypeCreditCardTypeType CreditCardType
	 * @param string CreditCardNumber
	 * @return PayPalTypeCreditCardNumberTypeType
	 */
	public function __construct($_CreditCardType = null,$_CreditCardNumber = null)
	{
		parent::__construct(array('CreditCardType'=>$_CreditCardType,'CreditCardNumber'=>$_CreditCardNumber));
	}
	/**
	 * Set CreditCardType
	 * @param CreditCardTypeType CreditCardType
	 * @return CreditCardTypeType
	 */
	public function setCreditCardType($_CreditCardType)
	{
		return ($this->CreditCardType = PayPalTypeCreditCardTypeType::valueIsValid($_CreditCardType)?$_CreditCardType:null);
	}
	/**
	 * Get CreditCardType
	 * @return PayPalTypeCreditCardTypeType
	 */
	public function getCreditCardType()
	{
		return $this->CreditCardType;
	}
	/**
	 * Set CreditCardNumber
	 * @param string CreditCardNumber
	 * @return string
	 */
	public function setCreditCardNumber($_CreditCardNumber)
	{
		return ($this->CreditCardNumber = $_CreditCardNumber);
	}
	/**
	 * Get CreditCardNumber
	 * @return string
	 */
	public function getCreditCardNumber()
	{
		return $this->CreditCardNumber;
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