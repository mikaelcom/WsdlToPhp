<?php
/**
 * Class file for XiInsiderTypePostTransactionAmounts
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypePostTransactionAmounts
 * @date 08/07/2012
 */
class XiInsiderTypePostTransactionAmounts extends XiInsiderWsdlClass
{
	/**
	 * The sharesOwnedFollowingTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $sharesOwnedFollowingTransaction;
	/**
	 * Constructor
	 * @param XiInsiderTypeValue sharesOwnedFollowingTransaction
	 * @return XiInsiderTypePostTransactionAmounts
	 */
	public function __construct($_sharesOwnedFollowingTransaction = null)
	{
		parent::__construct(array('sharesOwnedFollowingTransaction'=>$_sharesOwnedFollowingTransaction));
	}
	/**
	 * Set sharesOwnedFollowingTransaction
	 * @param value sharesOwnedFollowingTransaction
	 * @return value
	 */
	public function setSharesOwnedFollowingTransaction($_sharesOwnedFollowingTransaction)
	{
		return ($this->sharesOwnedFollowingTransaction = $_sharesOwnedFollowingTransaction);
	}
	/**
	 * Get sharesOwnedFollowingTransaction
	 * @return XiInsiderTypevalue
	 */
	public function getSharesOwnedFollowingTransaction()
	{
		return $this->sharesOwnedFollowingTransaction;
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