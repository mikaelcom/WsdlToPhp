<?php
/**
 * Class file for SPEmailWsTypeCreateContactResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeCreateContactResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeCreateContactResponse extends SPEmailWsWsdlClass
{
	/**
	 * The CreateContactResult
	 * @var RequestStatus
	 */
	public $CreateContactResult;
	/**
	 * Constructor
	 * @param RequestStatus CreateContactResult
	 * @return SPEmailWsTypeCreateContactResponse
	 */
	public function __construct($_CreateContactResult = null)
	{
		parent::__construct(array('CreateContactResult'=>$_CreateContactResult));
	}
	/**
	 * Set CreateContactResult
	 * @param RequestStatus CreateContactResult
	 * @return RequestStatus
	 */
	public function setCreateContactResult($_CreateContactResult)
	{
		return ($this->CreateContactResult = $_CreateContactResult);
	}
	/**
	 * Get CreateContactResult
	 * @return RequestStatus
	 */
	public function getCreateContactResult()
	{
		return $this->CreateContactResult;
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