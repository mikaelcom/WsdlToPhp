<?php
/**
 * Class file for XWebEmailValidationTypeValidateEmailRequest
 * @date 09/07/2012
 */
/**
 * Class XWebEmailValidationTypeValidateEmailRequest
 * @date 09/07/2012
 */
class XWebEmailValidationTypeValidateEmailRequest extends XWebEmailValidationWsdlClass
{
	/**
	 * The Email
	 * @var Email
	 */
	public $Email;
	/**
	 * Constructor
	 * @param Email Email
	 * @return XWebEmailValidationTypeValidateEmailRequest
	 */
	public function __construct($_Email = null)
	{
		parent::__construct(array('Email'=>$_Email));
	}
	/**
	 * Set Email
	 * @param Email Email
	 * @return Email
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return Email
	 */
	public function getEmail()
	{
		return $this->Email;
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