<?php
/**
 * Class file for PaylineWebPaymentTypeWalletIdList
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeWalletIdList
 * Documentation : This element contains the list of selected card
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeWalletIdList extends PaylineWebPaymentWsdlClass
{
	/**
	 * The walletId
	 * Meta informations :
	 * 	- maxOccurs : 500
	 * 	- minOccurs : 1
	 * @var string
	 */
	public $walletId;
	/**
	 * Constructor
	 * @param string walletId
	 * @return PaylineWebPaymentTypeWalletIdList
	 */
	public function __construct($_walletId)
	{
		parent::__construct(array('walletId'=>$_walletId));
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