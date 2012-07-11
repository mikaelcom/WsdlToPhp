<?php
/**
 * Class file for XiGlobalmasterTypeGetMasterByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetMasterByExchangeResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetMasterByExchangeResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetMasterByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfRecord
	 */
	public $GetMasterByExchangeResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfRecord GetMasterByExchangeResult
	 * @return XiGlobalmasterTypeGetMasterByExchangeResponse
	 */
	public function __construct($_GetMasterByExchangeResult = null)
	{
		parent::__construct(array('GetMasterByExchangeResult'=>new XiGlobalmasterTypeArrayOfRecord($_GetMasterByExchangeResult)));
	}
	/**
	 * Set GetMasterByExchangeResult
	 * @param ArrayOfRecord GetMasterByExchangeResult
	 * @return ArrayOfRecord
	 */
	public function setGetMasterByExchangeResult($_GetMasterByExchangeResult)
	{
		return ($this->GetMasterByExchangeResult = $_GetMasterByExchangeResult);
	}
	/**
	 * Get GetMasterByExchangeResult
	 * @return XiGlobalmasterTypeArrayOfRecord
	 */
	public function getGetMasterByExchangeResult()
	{
		return $this->GetMasterByExchangeResult;
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