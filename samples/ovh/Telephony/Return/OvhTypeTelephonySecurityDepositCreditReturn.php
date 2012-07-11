<?php
/**
 * Class file for OvhTypeTelephonySecurityDepositCreditReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySecurityDepositCreditReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonySecurityDepositCreditReturn extends OvhWsdlClass
{
	/**
	 * The orderId
	 * @var int
	 */
	public $orderId;
	/**
	 * The orderPassword
	 * @var string
	 */
	public $orderPassword;
	/**
	 * The orderUrl
	 * @var string
	 */
	public $orderUrl;
	/**
	 * The totalPrice
	 * @var float
	 */
	public $totalPrice;
	/**
	 * The vat
	 * @var float
	 */
	public $vat;
	/**
	 * The totalPriceWithVat
	 * @var float
	 */
	public $totalPriceWithVat;
	/**
	 * The ribBankCode
	 * @var string
	 */
	public $ribBankCode;
	/**
	 * The ribAgencyCode
	 * @var string
	 */
	public $ribAgencyCode;
	/**
	 * The ribAccountNumber
	 * @var string
	 */
	public $ribAccountNumber;
	/**
	 * The ribKey
	 * @var string
	 */
	public $ribKey;
	/**
	 * The iban
	 * @var string
	 */
	public $iban;
	/**
	 * The bic
	 * @var string
	 */
	public $bic;
	/**
	 * Constructor
	 * @param int orderId
	 * @param string orderPassword
	 * @param string orderUrl
	 * @param float totalPrice
	 * @param float vat
	 * @param float totalPriceWithVat
	 * @param string ribBankCode
	 * @param string ribAgencyCode
	 * @param string ribAccountNumber
	 * @param string ribKey
	 * @param string iban
	 * @param string bic
	 * @return OvhTypeTelephonySecurityDepositCreditReturn
	 */
	public function __construct($_orderId = null,$_orderPassword = null,$_orderUrl = null,$_totalPrice = null,$_vat = null,$_totalPriceWithVat = null,$_ribBankCode = null,$_ribAgencyCode = null,$_ribAccountNumber = null,$_ribKey = null,$_iban = null,$_bic = null)
	{
		parent::__construct(array('orderId'=>$_orderId,'orderPassword'=>$_orderPassword,'orderUrl'=>$_orderUrl,'totalPrice'=>$_totalPrice,'vat'=>$_vat,'totalPriceWithVat'=>$_totalPriceWithVat,'ribBankCode'=>$_ribBankCode,'ribAgencyCode'=>$_ribAgencyCode,'ribAccountNumber'=>$_ribAccountNumber,'ribKey'=>$_ribKey,'iban'=>$_iban,'bic'=>$_bic));
	}
	/**
	 * Set orderId
	 * @param int orderId
	 * @return int
	 */
	public function setOrderId($_orderId)
	{
		return ($this->orderId = $_orderId);
	}
	/**
	 * Get orderId
	 * @return int
	 */
	public function getOrderId()
	{
		return $this->orderId;
	}
	/**
	 * Set orderPassword
	 * @param string orderPassword
	 * @return string
	 */
	public function setOrderPassword($_orderPassword)
	{
		return ($this->orderPassword = $_orderPassword);
	}
	/**
	 * Get orderPassword
	 * @return string
	 */
	public function getOrderPassword()
	{
		return $this->orderPassword;
	}
	/**
	 * Set orderUrl
	 * @param string orderUrl
	 * @return string
	 */
	public function setOrderUrl($_orderUrl)
	{
		return ($this->orderUrl = $_orderUrl);
	}
	/**
	 * Get orderUrl
	 * @return string
	 */
	public function getOrderUrl()
	{
		return $this->orderUrl;
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
	 * Set vat
	 * @param float vat
	 * @return float
	 */
	public function setVat($_vat)
	{
		return ($this->vat = $_vat);
	}
	/**
	 * Get vat
	 * @return float
	 */
	public function getVat()
	{
		return $this->vat;
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
	 * Set ribBankCode
	 * @param string ribBankCode
	 * @return string
	 */
	public function setRibBankCode($_ribBankCode)
	{
		return ($this->ribBankCode = $_ribBankCode);
	}
	/**
	 * Get ribBankCode
	 * @return string
	 */
	public function getRibBankCode()
	{
		return $this->ribBankCode;
	}
	/**
	 * Set ribAgencyCode
	 * @param string ribAgencyCode
	 * @return string
	 */
	public function setRibAgencyCode($_ribAgencyCode)
	{
		return ($this->ribAgencyCode = $_ribAgencyCode);
	}
	/**
	 * Get ribAgencyCode
	 * @return string
	 */
	public function getRibAgencyCode()
	{
		return $this->ribAgencyCode;
	}
	/**
	 * Set ribAccountNumber
	 * @param string ribAccountNumber
	 * @return string
	 */
	public function setRibAccountNumber($_ribAccountNumber)
	{
		return ($this->ribAccountNumber = $_ribAccountNumber);
	}
	/**
	 * Get ribAccountNumber
	 * @return string
	 */
	public function getRibAccountNumber()
	{
		return $this->ribAccountNumber;
	}
	/**
	 * Set ribKey
	 * @param string ribKey
	 * @return string
	 */
	public function setRibKey($_ribKey)
	{
		return ($this->ribKey = $_ribKey);
	}
	/**
	 * Get ribKey
	 * @return string
	 */
	public function getRibKey()
	{
		return $this->ribKey;
	}
	/**
	 * Set iban
	 * @param string iban
	 * @return string
	 */
	public function setIban($_iban)
	{
		return ($this->iban = $_iban);
	}
	/**
	 * Get iban
	 * @return string
	 */
	public function getIban()
	{
		return $this->iban;
	}
	/**
	 * Set bic
	 * @param string bic
	 * @return string
	 */
	public function setBic($_bic)
	{
		return ($this->bic = $_bic);
	}
	/**
	 * Get bic
	 * @return string
	 */
	public function getBic()
	{
		return $this->bic;
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