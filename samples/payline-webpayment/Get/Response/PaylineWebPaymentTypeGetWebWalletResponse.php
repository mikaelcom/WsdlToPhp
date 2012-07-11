<?php
/**
 * Class file for PaylineWebPaymentTypeGetWebWalletResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeGetWebWalletResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeGetWebWalletResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The wallet
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeWallet
	 */
	public $wallet;
	/**
	 * The owner
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeOwner
	 */
	public $owner;
	/**
	 * The privateDataList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePrivateDataList
	 */
	public $privateDataList;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeWallet wallet
	 * @param PaylineWebPaymentTypeOwner owner
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @return PaylineWebPaymentTypeGetWebWalletResponse
	 */
	public function __construct($_result = null,$_wallet = null,$_owner = null,$_privateDataList = null)
	{
		parent::__construct(array('result'=>$_result,'wallet'=>$_wallet,'owner'=>$_owner,'privateDataList'=>$_privateDataList));
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
	 * Set wallet
	 * @param wallet wallet
	 * @return wallet
	 */
	public function setWallet($_wallet)
	{
		return ($this->wallet = $_wallet);
	}
	/**
	 * Get wallet
	 * @return PaylineWebPaymentTypewallet
	 */
	public function getWallet()
	{
		return $this->wallet;
	}
	/**
	 * Set owner
	 * @param owner owner
	 * @return owner
	 */
	public function setOwner($_owner)
	{
		return ($this->owner = $_owner);
	}
	/**
	 * Get owner
	 * @return PaylineWebPaymentTypeowner
	 */
	public function getOwner()
	{
		return $this->owner;
	}
	/**
	 * Set privateDataList
	 * @param privateDataList privateDataList
	 * @return privateDataList
	 */
	public function setPrivateDataList($_privateDataList)
	{
		return ($this->privateDataList = $_privateDataList);
	}
	/**
	 * Get privateDataList
	 * @return PaylineWebPaymentTypeprivateDataList
	 */
	public function getPrivateDataList()
	{
		return $this->privateDataList;
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