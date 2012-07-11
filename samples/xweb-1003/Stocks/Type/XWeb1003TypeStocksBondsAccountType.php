<?php
/**
 * Class file for XWeb1003TypeStocksBondsAccountType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeStocksBondsAccountType
 * @date 09/07/2012
 */
class XWeb1003TypeStocksBondsAccountType extends XWeb1003WsdlClass
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
	 * The Account_Sequence
	 * @var anonymous152
	 */
	public $Account_Sequence;
	/**
	 * Constructor
	 * @param Description Description
	 * @param Amount Amount
	 * @param anonymous152 Account_Sequence
	 * @return XWeb1003TypeStocksBondsAccountType
	 */
	public function __construct($_Description = null,$_Amount = null,$_Account_Sequence = null)
	{
		parent::__construct(array('Description'=>$_Description,'Amount'=>$_Amount,'Account_Sequence'=>$_Account_Sequence));
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
	 * Set Account_Sequence
	 * @param anonymous152 Account_Sequence
	 * @return anonymous152
	 */
	public function setAccount_Sequence($_Account_Sequence)
	{
		return ($this->Account_Sequence = $_Account_Sequence);
	}
	/**
	 * Get Account_Sequence
	 * @return anonymous152
	 */
	public function getAccount_Sequence()
	{
		return $this->Account_Sequence;
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