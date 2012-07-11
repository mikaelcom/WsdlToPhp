<?php
/**
 * Class file for XiInsiderTypeGetInsiderTransactionsResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetInsiderTransactionsResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetInsiderTransactionsResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetInsiderTransactionsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeInsiderTransactions
	 */
	public $GetInsiderTransactionsResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeInsiderTransactions GetInsiderTransactionsResult
	 * @return XiInsiderTypeGetInsiderTransactionsResponse
	 */
	public function __construct($_GetInsiderTransactionsResult = null)
	{
		parent::__construct(array('GetInsiderTransactionsResult'=>$_GetInsiderTransactionsResult));
	}
	/**
	 * Set GetInsiderTransactionsResult
	 * @param InsiderTransactions GetInsiderTransactionsResult
	 * @return InsiderTransactions
	 */
	public function setGetInsiderTransactionsResult($_GetInsiderTransactionsResult)
	{
		return ($this->GetInsiderTransactionsResult = $_GetInsiderTransactionsResult);
	}
	/**
	 * Get GetInsiderTransactionsResult
	 * @return XiInsiderTypeInsiderTransactions
	 */
	public function getGetInsiderTransactionsResult()
	{
		return $this->GetInsiderTransactionsResult;
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