<?php
/**
 * Class file for XiInsiderTypeTransactionAmounts
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeTransactionAmounts
 * @date 08/07/2012
 */
class XiInsiderTypeTransactionAmounts extends XiInsiderWsdlClass
{
	/**
	 * The transactionShares
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $transactionShares;
	/**
	 * The transactionPricePerShare
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $transactionPricePerShare;
	/**
	 * The transactionAcquiredDisposedCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $transactionAcquiredDisposedCode;
	/**
	 * Constructor
	 * @param XiInsiderTypeValue transactionShares
	 * @param XiInsiderTypeValue transactionPricePerShare
	 * @param XiInsiderTypeValue transactionAcquiredDisposedCode
	 * @return XiInsiderTypeTransactionAmounts
	 */
	public function __construct($_transactionShares = null,$_transactionPricePerShare = null,$_transactionAcquiredDisposedCode = null)
	{
		parent::__construct(array('transactionShares'=>$_transactionShares,'transactionPricePerShare'=>$_transactionPricePerShare,'transactionAcquiredDisposedCode'=>$_transactionAcquiredDisposedCode));
	}
	/**
	 * Set transactionShares
	 * @param value transactionShares
	 * @return value
	 */
	public function setTransactionShares($_transactionShares)
	{
		return ($this->transactionShares = $_transactionShares);
	}
	/**
	 * Get transactionShares
	 * @return XiInsiderTypevalue
	 */
	public function getTransactionShares()
	{
		return $this->transactionShares;
	}
	/**
	 * Set transactionPricePerShare
	 * @param value transactionPricePerShare
	 * @return value
	 */
	public function setTransactionPricePerShare($_transactionPricePerShare)
	{
		return ($this->transactionPricePerShare = $_transactionPricePerShare);
	}
	/**
	 * Get transactionPricePerShare
	 * @return XiInsiderTypevalue
	 */
	public function getTransactionPricePerShare()
	{
		return $this->transactionPricePerShare;
	}
	/**
	 * Set transactionAcquiredDisposedCode
	 * @param value transactionAcquiredDisposedCode
	 * @return value
	 */
	public function setTransactionAcquiredDisposedCode($_transactionAcquiredDisposedCode)
	{
		return ($this->transactionAcquiredDisposedCode = $_transactionAcquiredDisposedCode);
	}
	/**
	 * Get transactionAcquiredDisposedCode
	 * @return XiInsiderTypevalue
	 */
	public function getTransactionAcquiredDisposedCode()
	{
		return $this->transactionAcquiredDisposedCode;
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