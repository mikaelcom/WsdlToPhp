<?php
/**
 * Class file for PayPalTypeAccountEntryType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAccountEntryType
 * @date 14/07/2012
 */
class PayPalTypeAccountEntryType extends PayPalWsdlClass
{
	/**
	 * The Balance
	 * @var PayPalTypeAmountType
	 */
	public $Balance;
	/**
	 * The Credit
	 * Meta informations :
	 * 	- documentation : Credit Amount for a detail entry, can be 0.00.
	 * @var PayPalTypeAmountType
	 */
	public $Credit;
	/**
	 * The Date
	 * Meta informations :
	 * 	- documentation : Date entry was posted, in GMT.
	 * @var dateTime
	 */
	public $Date;
	/**
	 * The Debit
	 * Meta informations :
	 * 	- documentation : Debit Amount for this detail entry, can be 0.00.
	 * @var PayPalTypeAmountType
	 */
	public $Debit;
	/**
	 * The ItemID
	 * @var PayPalTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The Memo
	 * Meta informations :
	 * 	- documentation : Memo line for an account entry, can be empty string.
	 * @var string
	 */
	public $Memo;
	/**
	 * The RefNumber
	 * Meta informations :
	 * 	- documentation : eBay reference number for an account entry.
	 * @var int
	 */
	public $RefNumber;
	/**
	 * The AccountEntryDetailsType
	 * Meta informations :
	 * 	- documentation : Integer code for account details entry type. This element element specifies an index to a table of explanations for accounting charges.
	 * @var int
	 */
	public $AccountEntryDetailsType;
	/**
	 * Constructor
	 * @param PayPalTypeAmountType Balance
	 * @param PayPalTypeAmountType Credit
	 * @param dateTime Date
	 * @param PayPalTypeAmountType Debit
	 * @param PayPalTypeItemIDType ItemID
	 * @param string Memo
	 * @param int RefNumber
	 * @param int AccountEntryDetailsType
	 * @return PayPalTypeAccountEntryType
	 */
	public function __construct($_Balance = null,$_Credit = null,$_Date = null,$_Debit = null,$_ItemID = null,$_Memo = null,$_RefNumber = null,$_AccountEntryDetailsType = null)
	{
		parent::__construct(array('Balance'=>$_Balance,'Credit'=>$_Credit,'Date'=>$_Date,'Debit'=>$_Debit,'ItemID'=>$_ItemID,'Memo'=>$_Memo,'RefNumber'=>$_RefNumber,'AccountEntryDetailsType'=>$_AccountEntryDetailsType));
	}
	/**
	 * Set Balance
	 * @param AmountType Balance
	 * @return AmountType
	 */
	public function setBalance($_Balance)
	{
		return ($this->Balance = $_Balance);
	}
	/**
	 * Get Balance
	 * @return PayPalTypeAmountType
	 */
	public function getBalance()
	{
		return $this->Balance;
	}
	/**
	 * Set Credit
	 * @param AmountType Credit
	 * @return AmountType
	 */
	public function setCredit($_Credit)
	{
		return ($this->Credit = $_Credit);
	}
	/**
	 * Get Credit
	 * @return PayPalTypeAmountType
	 */
	public function getCredit()
	{
		return $this->Credit;
	}
	/**
	 * Set Date
	 * @param dateTime Date
	 * @return dateTime
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return dateTime
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set Debit
	 * @param AmountType Debit
	 * @return AmountType
	 */
	public function setDebit($_Debit)
	{
		return ($this->Debit = $_Debit);
	}
	/**
	 * Get Debit
	 * @return PayPalTypeAmountType
	 */
	public function getDebit()
	{
		return $this->Debit;
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = PayPalTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return PayPalTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set Memo
	 * @param string Memo
	 * @return string
	 */
	public function setMemo($_Memo)
	{
		return ($this->Memo = $_Memo);
	}
	/**
	 * Get Memo
	 * @return string
	 */
	public function getMemo()
	{
		return $this->Memo;
	}
	/**
	 * Set RefNumber
	 * @param int RefNumber
	 * @return int
	 */
	public function setRefNumber($_RefNumber)
	{
		return ($this->RefNumber = $_RefNumber);
	}
	/**
	 * Get RefNumber
	 * @return int
	 */
	public function getRefNumber()
	{
		return $this->RefNumber;
	}
	/**
	 * Set AccountEntryDetailsType
	 * @param int AccountEntryDetailsType
	 * @return int
	 */
	public function setAccountEntryDetailsType($_AccountEntryDetailsType)
	{
		return ($this->AccountEntryDetailsType = $_AccountEntryDetailsType);
	}
	/**
	 * Get AccountEntryDetailsType
	 * @return int
	 */
	public function getAccountEntryDetailsType()
	{
		return $this->AccountEntryDetailsType;
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