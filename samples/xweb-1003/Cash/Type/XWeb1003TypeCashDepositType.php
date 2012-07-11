<?php
/**
 * Class file for XWeb1003TypeCashDepositType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeCashDepositType
 * @date 09/07/2012
 */
class XWeb1003TypeCashDepositType extends XWeb1003WsdlClass
{
	/**
	 * The Description
	 * @var Description
	 */
	public $Description;
	/**
	 * The Amount
	 * @var Amount
	 */
	public $Amount;
	/**
	 * The Cash_Deposit_Sequence
	 * @var anonymous138
	 */
	public $Cash_Deposit_Sequence;
	/**
	 * Constructor
	 * @param Description Description
	 * @param Amount Amount
	 * @param anonymous138 Cash_Deposit_Sequence
	 * @return XWeb1003TypeCashDepositType
	 */
	public function __construct($_Description = null,$_Amount = null,$_Cash_Deposit_Sequence = null)
	{
		parent::__construct(array('Description'=>$_Description,'Amount'=>$_Amount,'Cash_Deposit_Sequence'=>$_Cash_Deposit_Sequence));
	}
	/**
	 * Set Description
	 * @param Description Description
	 * @return Description
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return Description
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Amount
	 * @param Amount Amount
	 * @return Amount
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return Amount
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Cash_Deposit_Sequence
	 * @param anonymous138 Cash_Deposit_Sequence
	 * @return anonymous138
	 */
	public function setCash_Deposit_Sequence($_Cash_Deposit_Sequence)
	{
		return ($this->Cash_Deposit_Sequence = $_Cash_Deposit_Sequence);
	}
	/**
	 * Get Cash_Deposit_Sequence
	 * @return anonymous138
	 */
	public function getCash_Deposit_Sequence()
	{
		return $this->Cash_Deposit_Sequence;
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