<?php
/**
 * Class file for PaylineWebPaymentTypeDoMassResetRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoMassResetRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoMassResetRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The resetAuthorizationList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeResetAuthorizationList
	 */
	public $resetAuthorizationList;
	/**
	 * The comment
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResetAuthorizationList resetAuthorizationList
	 * @param string comment
	 * @return PaylineWebPaymentTypeDoMassResetRequest
	 */
	public function __construct($_resetAuthorizationList = null,$_comment = null)
	{
		parent::__construct(array('resetAuthorizationList'=>$_resetAuthorizationList,'comment'=>$_comment));
	}
	/**
	 * Set resetAuthorizationList
	 * @param resetAuthorizationList resetAuthorizationList
	 * @return resetAuthorizationList
	 */
	public function setResetAuthorizationList($_resetAuthorizationList)
	{
		return ($this->resetAuthorizationList = $_resetAuthorizationList);
	}
	/**
	 * Get resetAuthorizationList
	 * @return PaylineWebPaymentTyperesetAuthorizationList
	 */
	public function getResetAuthorizationList()
	{
		return $this->resetAuthorizationList;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
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