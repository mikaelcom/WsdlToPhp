<?php
/**
 * Class file for PaylineWebPaymentTypeDisableWalletRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDisableWalletRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDisableWalletRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The contractNumber
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $contractNumber;
	/**
	 * The walletIdList
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeWalletIdList
	 */
	public $walletIdList;
	/**
	 * Constructor
	 * @param string contractNumber
	 * @param PaylineWebPaymentTypeWalletIdList walletIdList
	 * @return PaylineWebPaymentTypeDisableWalletRequest
	 */
	public function __construct($_contractNumber = null,$_walletIdList = null)
	{
		parent::__construct(array('contractNumber'=>$_contractNumber,'walletIdList'=>$_walletIdList));
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
	 * Set walletIdList
	 * @param walletIdList walletIdList
	 * @return walletIdList
	 */
	public function setWalletIdList($_walletIdList)
	{
		return ($this->walletIdList = $_walletIdList);
	}
	/**
	 * Get walletIdList
	 * @return PaylineWebPaymentTypewalletIdList
	 */
	public function getWalletIdList()
	{
		return $this->walletIdList;
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