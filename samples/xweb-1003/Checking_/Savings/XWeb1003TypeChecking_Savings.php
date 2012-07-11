<?php
/**
 * Class file for XWeb1003TypeChecking_Savings
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeChecking_Savings
 * @date 09/07/2012
 */
class XWeb1003TypeChecking_Savings extends XWeb1003WsdlClass
{
	/**
	 * The Account
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWeb1003TypeCheckingSavingsAccountType
	 */
	public $Account;
	/**
	 * Constructor
	 * @param XWeb1003TypeCheckingSavingsAccountType Account
	 * @return XWeb1003TypeChecking_Savings
	 */
	public function __construct($_Account = null)
	{
		parent::__construct(array('Account'=>$_Account));
	}
	/**
	 * Set Account
	 * @param CheckingSavingsAccountType Account
	 * @return CheckingSavingsAccountType
	 */
	public function setAccount($_Account)
	{
		return ($this->Account = $_Account);
	}
	/**
	 * Get Account
	 * @return XWeb1003TypeCheckingSavingsAccountType
	 */
	public function getAccount()
	{
		return $this->Account;
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