<?php
/**
 * Class file for PaylineWebPaymentTypeDoMassRefundRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoMassRefundRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoMassRefundRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The refundAuthorizationList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeRefundAuthorizationList
	 */
	public $refundAuthorizationList;
	/**
	 * The comment
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeRefundAuthorizationList refundAuthorizationList
	 * @param string comment
	 * @return PaylineWebPaymentTypeDoMassRefundRequest
	 */
	public function __construct($_refundAuthorizationList = null,$_comment = null)
	{
		parent::__construct(array('refundAuthorizationList'=>$_refundAuthorizationList,'comment'=>$_comment));
	}
	/**
	 * Set refundAuthorizationList
	 * @param refundAuthorizationList refundAuthorizationList
	 * @return refundAuthorizationList
	 */
	public function setRefundAuthorizationList($_refundAuthorizationList)
	{
		return ($this->refundAuthorizationList = $_refundAuthorizationList);
	}
	/**
	 * Get refundAuthorizationList
	 * @return PaylineWebPaymentTyperefundAuthorizationList
	 */
	public function getRefundAuthorizationList()
	{
		return $this->refundAuthorizationList;
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