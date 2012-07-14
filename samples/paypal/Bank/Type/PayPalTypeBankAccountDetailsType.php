<?php
/**
 * Class file for PayPalTypeBankAccountDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBankAccountDetailsType
 * Documentation : BankAccountDetailsType
 * @date 14/07/2012
 */
class PayPalTypeBankAccountDetailsType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- documentation : Name of bank Character length and limitations: 192 alphanumeric characters
	 * @var string
	 */
	public $Name;
	/**
	 * The Type
	 * Meta informations :
	 * 	- documentation : Type of bank account: Checking or Savings
	 * @var PayPalTypeBankAccountTypeType
	 */
	public $Type;
	/**
	 * The RoutingNumber
	 * Meta informations :
	 * 	- documentation : Merchant’s bank routing number Character length and limitations: 23 alphanumeric characters
	 * @var string
	 */
	public $RoutingNumber;
	/**
	 * The AccountNumber
	 * Meta informations :
	 * 	- documentation : Merchant’s bank account number Character length and limitations: 256 alphanumeric characters
	 * @var string
	 */
	public $AccountNumber;
	/**
	 * Constructor
	 * @param string Name
	 * @param PayPalTypeBankAccountTypeType Type
	 * @param string RoutingNumber
	 * @param string AccountNumber
	 * @return PayPalTypeBankAccountDetailsType
	 */
	public function __construct($_Name = null,$_Type = null,$_RoutingNumber = null,$_AccountNumber = null)
	{
		parent::__construct(array('Name'=>$_Name,'Type'=>$_Type,'RoutingNumber'=>$_RoutingNumber,'AccountNumber'=>$_AccountNumber));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Type
	 * @param BankAccountTypeType Type
	 * @return BankAccountTypeType
	 */
	public function setType($_Type)
	{
		return ($this->Type = PayPalTypeBankAccountTypeType::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return PayPalTypeBankAccountTypeType
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set RoutingNumber
	 * @param string RoutingNumber
	 * @return string
	 */
	public function setRoutingNumber($_RoutingNumber)
	{
		return ($this->RoutingNumber = $_RoutingNumber);
	}
	/**
	 * Get RoutingNumber
	 * @return string
	 */
	public function getRoutingNumber()
	{
		return $this->RoutingNumber;
	}
	/**
	 * Set AccountNumber
	 * @param string AccountNumber
	 * @return string
	 */
	public function setAccountNumber($_AccountNumber)
	{
		return ($this->AccountNumber = $_AccountNumber);
	}
	/**
	 * Get AccountNumber
	 * @return string
	 */
	public function getAccountNumber()
	{
		return $this->AccountNumber;
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