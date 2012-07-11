<?php
/**
 * Class file for PaylineWebPaymentTypeCreateWalletRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeCreateWalletRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeCreateWalletRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The contractNumber
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $contractNumber;
	/**
	 * The wallet
	 * Meta informations :
	 * 	- nillable : false
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
	 * The authentication3DSecure
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAuthentication3DSecure
	 */
	public $authentication3DSecure;
	/**
	 * Constructor
	 * @param string contractNumber
	 * @param PaylineWebPaymentTypeWallet wallet
	 * @param PaylineWebPaymentTypeOwner owner
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @param PaylineWebPaymentTypeAuthentication3DSecure authentication3DSecure
	 * @return PaylineWebPaymentTypeCreateWalletRequest
	 */
	public function __construct($_contractNumber = null,$_wallet = null,$_owner = null,$_privateDataList = null,$_authentication3DSecure = null)
	{
		parent::__construct(array('contractNumber'=>$_contractNumber,'wallet'=>$_wallet,'owner'=>$_owner,'privateDataList'=>$_privateDataList,'authentication3DSecure'=>$_authentication3DSecure));
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
	 * Set authentication3DSecure
	 * @param authentication3DSecure authentication3DSecure
	 * @return authentication3DSecure
	 */
	public function setAuthentication3DSecure($_authentication3DSecure)
	{
		return ($this->authentication3DSecure = $_authentication3DSecure);
	}
	/**
	 * Get authentication3DSecure
	 * @return PaylineWebPaymentTypeauthentication3DSecure
	 */
	public function getAuthentication3DSecure()
	{
		return $this->authentication3DSecure;
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