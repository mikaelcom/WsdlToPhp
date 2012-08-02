<?php
/**
 * Class file for DirectSmileTypeSendEmailTemplateResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeSendEmailTemplateResponse
 * @date 02/08/2012
 */
class DirectSmileTypeSendEmailTemplateResponse extends DirectSmileWsdlClass
{
	/**
	 * The SendEmailTemplateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SendEmailTemplateResult;
	/**
	 * Constructor
	 * @param string SendEmailTemplateResult
	 * @return DirectSmileTypeSendEmailTemplateResponse
	 */
	public function __construct($_SendEmailTemplateResult = null)
	{
		parent::__construct(array('SendEmailTemplateResult'=>$_SendEmailTemplateResult));
	}
	/**
	 * Set SendEmailTemplateResult
	 * @param string SendEmailTemplateResult
	 * @return string
	 */
	public function setSendEmailTemplateResult($_SendEmailTemplateResult)
	{
		return ($this->SendEmailTemplateResult = $_SendEmailTemplateResult);
	}
	/**
	 * Get SendEmailTemplateResult
	 * @return string
	 */
	public function getSendEmailTemplateResult()
	{
		return $this->SendEmailTemplateResult;
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