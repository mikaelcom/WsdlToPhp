<?php
/**
 * Class file for XiInsiderTypeGetAllInsiderTransactionsResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetAllInsiderTransactionsResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetAllInsiderTransactionsResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetAllInsiderTransactionsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeInsiderTransactions
	 */
	public $GetAllInsiderTransactionsResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeInsiderTransactions GetAllInsiderTransactionsResult
	 * @return XiInsiderTypeGetAllInsiderTransactionsResponse
	 */
	public function __construct($_GetAllInsiderTransactionsResult = null)
	{
		parent::__construct(array('GetAllInsiderTransactionsResult'=>$_GetAllInsiderTransactionsResult));
	}
	/**
	 * Set GetAllInsiderTransactionsResult
	 * @param InsiderTransactions GetAllInsiderTransactionsResult
	 * @return InsiderTransactions
	 */
	public function setGetAllInsiderTransactionsResult($_GetAllInsiderTransactionsResult)
	{
		return ($this->GetAllInsiderTransactionsResult = $_GetAllInsiderTransactionsResult);
	}
	/**
	 * Get GetAllInsiderTransactionsResult
	 * @return XiInsiderTypeInsiderTransactions
	 */
	public function getGetAllInsiderTransactionsResult()
	{
		return $this->GetAllInsiderTransactionsResult;
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