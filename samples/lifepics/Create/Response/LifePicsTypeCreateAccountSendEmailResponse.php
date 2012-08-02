<?php
/**
 * Class file for LifePicsTypeCreateAccountSendEmailResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeCreateAccountSendEmailResponse
 * @date 02/08/2012
 */
class LifePicsTypeCreateAccountSendEmailResponse extends LifePicsWsdlClass
{
	/**
	 * The CreateAccountSendEmailResult
	 * @var LifePicsTypeCreateAccountSendEmailResult
	 */
	public $CreateAccountSendEmailResult;
	/**
	 * Constructor
	 * @param LifePicsTypeCreateAccountSendEmailResult CreateAccountSendEmailResult
	 * @return LifePicsTypeCreateAccountSendEmailResponse
	 */
	public function __construct($_CreateAccountSendEmailResult = null)
	{
		parent::__construct(array('CreateAccountSendEmailResult'=>$_CreateAccountSendEmailResult));
	}
	/**
	 * Set CreateAccountSendEmailResult
	 * @param CreateAccountSendEmailResult CreateAccountSendEmailResult
	 * @return CreateAccountSendEmailResult
	 */
	public function setCreateAccountSendEmailResult($_CreateAccountSendEmailResult)
	{
		return ($this->CreateAccountSendEmailResult = $_CreateAccountSendEmailResult);
	}
	/**
	 * Get CreateAccountSendEmailResult
	 * @return LifePicsTypeCreateAccountSendEmailResult
	 */
	public function getCreateAccountSendEmailResult()
	{
		return $this->CreateAccountSendEmailResult;
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