<?php
/**
 * Class file for XiInsiderTypeGetAllIssuerTransactionsRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetAllIssuerTransactionsRangeResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetAllIssuerTransactionsRangeResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetAllIssuerTransactionsRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfIssuerChange
	 */
	public $GetAllIssuerTransactionsRangeResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeArrayOfIssuerChange GetAllIssuerTransactionsRangeResult
	 * @return XiInsiderTypeGetAllIssuerTransactionsRangeResponse
	 */
	public function __construct($_GetAllIssuerTransactionsRangeResult = null)
	{
		parent::__construct(array('GetAllIssuerTransactionsRangeResult'=>new XiInsiderTypeArrayOfIssuerChange($_GetAllIssuerTransactionsRangeResult)));
	}
	/**
	 * Set GetAllIssuerTransactionsRangeResult
	 * @param ArrayOfIssuerChange GetAllIssuerTransactionsRangeResult
	 * @return ArrayOfIssuerChange
	 */
	public function setGetAllIssuerTransactionsRangeResult($_GetAllIssuerTransactionsRangeResult)
	{
		return ($this->GetAllIssuerTransactionsRangeResult = $_GetAllIssuerTransactionsRangeResult);
	}
	/**
	 * Get GetAllIssuerTransactionsRangeResult
	 * @return XiInsiderTypeArrayOfIssuerChange
	 */
	public function getGetAllIssuerTransactionsRangeResult()
	{
		return $this->GetAllIssuerTransactionsRangeResult;
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