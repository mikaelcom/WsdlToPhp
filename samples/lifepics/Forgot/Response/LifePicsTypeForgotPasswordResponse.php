<?php
/**
 * Class file for LifePicsTypeForgotPasswordResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeForgotPasswordResponse
 * @date 02/08/2012
 */
class LifePicsTypeForgotPasswordResponse extends LifePicsWsdlClass
{
	/**
	 * The ForgotPasswordResult
	 * @var LifePicsTypeForgotPasswordResult
	 */
	public $ForgotPasswordResult;
	/**
	 * Constructor
	 * @param LifePicsTypeForgotPasswordResult ForgotPasswordResult
	 * @return LifePicsTypeForgotPasswordResponse
	 */
	public function __construct($_ForgotPasswordResult = null)
	{
		parent::__construct(array('ForgotPasswordResult'=>$_ForgotPasswordResult));
	}
	/**
	 * Set ForgotPasswordResult
	 * @param ForgotPasswordResult ForgotPasswordResult
	 * @return ForgotPasswordResult
	 */
	public function setForgotPasswordResult($_ForgotPasswordResult)
	{
		return ($this->ForgotPasswordResult = $_ForgotPasswordResult);
	}
	/**
	 * Get ForgotPasswordResult
	 * @return LifePicsTypeForgotPasswordResult
	 */
	public function getForgotPasswordResult()
	{
		return $this->ForgotPasswordResult;
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