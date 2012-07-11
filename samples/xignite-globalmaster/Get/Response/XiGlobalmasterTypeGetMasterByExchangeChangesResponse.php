<?php
/**
 * Class file for XiGlobalmasterTypeGetMasterByExchangeChangesResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetMasterByExchangeChangesResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetMasterByExchangeChangesResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetMasterByExchangeChangesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfRecord
	 */
	public $GetMasterByExchangeChangesResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfRecord GetMasterByExchangeChangesResult
	 * @return XiGlobalmasterTypeGetMasterByExchangeChangesResponse
	 */
	public function __construct($_GetMasterByExchangeChangesResult = null)
	{
		parent::__construct(array('GetMasterByExchangeChangesResult'=>new XiGlobalmasterTypeArrayOfRecord($_GetMasterByExchangeChangesResult)));
	}
	/**
	 * Set GetMasterByExchangeChangesResult
	 * @param ArrayOfRecord GetMasterByExchangeChangesResult
	 * @return ArrayOfRecord
	 */
	public function setGetMasterByExchangeChangesResult($_GetMasterByExchangeChangesResult)
	{
		return ($this->GetMasterByExchangeChangesResult = $_GetMasterByExchangeChangesResult);
	}
	/**
	 * Get GetMasterByExchangeChangesResult
	 * @return XiGlobalmasterTypeArrayOfRecord
	 */
	public function getGetMasterByExchangeChangesResult()
	{
		return $this->GetMasterByExchangeChangesResult;
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