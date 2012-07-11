<?php
/**
 * Class file for PaylineWebPaymentTypeGetWalletResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeGetWalletResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeGetWalletResponse extends PaylineWebPaymentWsdlClass
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
	 * The isDisabled
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $isDisabled;
	/**
	 * The disableDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $disableDate;
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
	 * @param string isDisabled
	 * @param string disableDate
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @return PaylineWebPaymentTypeGetWalletResponse
	 */
	public function __construct($_result = null,$_wallet = null,$_owner = null,$_isDisabled = null,$_disableDate = null,$_privateDataList = null)
	{
		parent::__construct(array('result'=>$_result,'wallet'=>$_wallet,'owner'=>$_owner,'isDisabled'=>$_isDisabled,'disableDate'=>$_disableDate,'privateDataList'=>$_privateDataList));
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
	 * Set isDisabled
	 * @param string isDisabled
	 * @return string
	 */
	public function setIsDisabled($_isDisabled)
	{
		return ($this->isDisabled = $_isDisabled);
	}
	/**
	 * Get isDisabled
	 * @return string
	 */
	public function getIsDisabled()
	{
		return $this->isDisabled;
	}
	/**
	 * Set disableDate
	 * @param string disableDate
	 * @return string
	 */
	public function setDisableDate($_disableDate)
	{
		return ($this->disableDate = $_disableDate);
	}
	/**
	 * Get disableDate
	 * @return string
	 */
	public function getDisableDate()
	{
		return $this->disableDate;
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