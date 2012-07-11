<?php
/**
 * Class file for XiSecurityTypeGetCUSIPStockResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetCUSIPStockResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetCUSIPStockResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetCUSIPStockResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeCusip
	 */
	public $GetCUSIPStockResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeCusip GetCUSIPStockResult
	 * @return XiSecurityTypeGetCUSIPStockResponse
	 */
	public function __construct($_GetCUSIPStockResult = null)
	{
		parent::__construct(array('GetCUSIPStockResult'=>$_GetCUSIPStockResult));
	}
	/**
	 * Set GetCUSIPStockResult
	 * @param Cusip GetCUSIPStockResult
	 * @return Cusip
	 */
	public function setGetCUSIPStockResult($_GetCUSIPStockResult)
	{
		return ($this->GetCUSIPStockResult = $_GetCUSIPStockResult);
	}
	/**
	 * Get GetCUSIPStockResult
	 * @return XiSecurityTypeCusip
	 */
	public function getGetCUSIPStockResult()
	{
		return $this->GetCUSIPStockResult;
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