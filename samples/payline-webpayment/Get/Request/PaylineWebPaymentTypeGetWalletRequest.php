<?php
/**
 * Class file for PaylineWebPaymentTypeGetWalletRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeGetWalletRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeGetWalletRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The contractNumber
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $contractNumber;
	/**
	 * The walletId
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $walletId;
	/**
	 * Constructor
	 * @param string contractNumber
	 * @param string walletId
	 * @return PaylineWebPaymentTypeGetWalletRequest
	 */
	public function __construct($_contractNumber = null,$_walletId = null)
	{
		parent::__construct(array('contractNumber'=>$_contractNumber,'walletId'=>$_walletId));
	}
	/**
	 * Set contractNumber
	 * @param string contractNumber
	 * @return string
	 */
	public function setContractNumber($_contractNumber)
	{
		return ($this->contractNumber = $_contractNumber);
	}
	/**
	 * Get contractNumber
	 * @return string
	 */
	public function getContractNumber()
	{
		return $this->contractNumber;
	}
	/**
	 * Set walletId
	 * @param string walletId
	 * @return string
	 */
	public function setWalletId($_walletId)
	{
		return ($this->walletId = $_walletId);
	}
	/**
	 * Get walletId
	 * @return string
	 */
	public function getWalletId()
	{
		return $this->walletId;
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