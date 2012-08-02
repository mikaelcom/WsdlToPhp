<?php
/**
 * Class file for LifePicsTypeCreateAccountResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeCreateAccountResponse
 * @date 02/08/2012
 */
class LifePicsTypeCreateAccountResponse extends LifePicsWsdlClass
{
	/**
	 * The CreateAccountResult
	 * @var LifePicsTypeCreateAccountResult
	 */
	public $CreateAccountResult;
	/**
	 * Constructor
	 * @param LifePicsTypeCreateAccountResult CreateAccountResult
	 * @return LifePicsTypeCreateAccountResponse
	 */
	public function __construct($_CreateAccountResult = null)
	{
		parent::__construct(array('CreateAccountResult'=>$_CreateAccountResult));
	}
	/**
	 * Set CreateAccountResult
	 * @param CreateAccountResult CreateAccountResult
	 * @return CreateAccountResult
	 */
	public function setCreateAccountResult($_CreateAccountResult)
	{
		return ($this->CreateAccountResult = $_CreateAccountResult);
	}
	/**
	 * Get CreateAccountResult
	 * @return LifePicsTypeCreateAccountResult
	 */
	public function getCreateAccountResult()
	{
		return $this->CreateAccountResult;
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