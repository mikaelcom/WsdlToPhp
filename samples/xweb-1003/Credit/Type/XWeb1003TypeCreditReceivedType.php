<?php
/**
 * Class file for XWeb1003TypeCreditReceivedType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeCreditReceivedType
 * @date 09/07/2012
 */
class XWeb1003TypeCreditReceivedType extends XWeb1003WsdlClass
{
	/**
	 * The Alternate_Name
	 * @var Alternate_Name
	 */
	public $Alternate_Name;
	/**
	 * The Creditor_Name
	 * @var Creditor_Name
	 */
	public $Creditor_Name;
	/**
	 * The Account_Number
	 * @var Account_Number
	 */
	public $Account_Number;
	/**
	 * The Credit_Received_Sequence
	 * @var anonymous197
	 */
	public $Credit_Received_Sequence;
	/**
	 * Constructor
	 * @param Alternate_Name Alternate_Name
	 * @param Creditor_Name Creditor_Name
	 * @param Account_Number Account_Number
	 * @param anonymous197 Credit_Received_Sequence
	 * @return XWeb1003TypeCreditReceivedType
	 */
	public function __construct($_Alternate_Name = null,$_Creditor_Name = null,$_Account_Number = null,$_Credit_Received_Sequence = null)
	{
		parent::__construct(array('Alternate_Name'=>$_Alternate_Name,'Creditor_Name'=>$_Creditor_Name,'Account_Number'=>$_Account_Number,'Credit_Received_Sequence'=>$_Credit_Received_Sequence));
	}
	/**
	 * Set Alternate_Name
	 * @param Alternate_Name Alternate_Name
	 * @return Alternate_Name
	 */
	public function setAlternate_Name($_Alternate_Name)
	{
		return ($this->Alternate_Name = $_Alternate_Name);
	}
	/**
	 * Get Alternate_Name
	 * @return Alternate_Name
	 */
	public function getAlternate_Name()
	{
		return $this->Alternate_Name;
	}
	/**
	 * Set Creditor_Name
	 * @param Creditor_Name Creditor_Name
	 * @return Creditor_Name
	 */
	public function setCreditor_Name($_Creditor_Name)
	{
		return ($this->Creditor_Name = $_Creditor_Name);
	}
	/**
	 * Get Creditor_Name
	 * @return Creditor_Name
	 */
	public function getCreditor_Name()
	{
		return $this->Creditor_Name;
	}
	/**
	 * Set Account_Number
	 * @param Account_Number Account_Number
	 * @return Account_Number
	 */
	public function setAccount_Number($_Account_Number)
	{
		return ($this->Account_Number = $_Account_Number);
	}
	/**
	 * Get Account_Number
	 * @return Account_Number
	 */
	public function getAccount_Number()
	{
		return $this->Account_Number;
	}
	/**
	 * Set Credit_Received_Sequence
	 * @param anonymous197 Credit_Received_Sequence
	 * @return anonymous197
	 */
	public function setCredit_Received_Sequence($_Credit_Received_Sequence)
	{
		return ($this->Credit_Received_Sequence = $_Credit_Received_Sequence);
	}
	/**
	 * Get Credit_Received_Sequence
	 * @return anonymous197
	 */
	public function getCredit_Received_Sequence()
	{
		return $this->Credit_Received_Sequence;
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