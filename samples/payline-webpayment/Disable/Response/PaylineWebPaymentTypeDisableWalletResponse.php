<?php
/**
 * Class file for PaylineWebPaymentTypeDisableWalletResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDisableWalletResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDisableWalletResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The walletIdList
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeWalletIdList
	 */
	public $walletIdList;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeWalletIdList walletIdList
	 * @return PaylineWebPaymentTypeDisableWalletResponse
	 */
	public function __construct($_result = null,$_walletIdList = null)
	{
		parent::__construct(array('result'=>$_result,'walletIdList'=>$_walletIdList));
	}
	/**
	 * Set result
	 * @param result result
	 * @return result
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return PaylineWebPaymentTyperesult
	 */
	public function getResult()
	{
		return $this->result;
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