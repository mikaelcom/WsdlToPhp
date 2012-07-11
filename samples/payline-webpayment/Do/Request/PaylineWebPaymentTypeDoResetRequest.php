<?php
/**
 * Class file for PaylineWebPaymentTypeDoResetRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoResetRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoResetRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The transactionID
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $transactionID;
	/**
	 * The comment
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor
	 * @param string transactionID
	 * @param string comment
	 * @return PaylineWebPaymentTypeDoResetRequest
	 */
	public function __construct($_transactionID = null,$_comment = null)
	{
		parent::__construct(array('transactionID'=>$_transactionID,'comment'=>$_comment));
	}
	/**
	 * Set transactionID
	 * @param string transactionID
	 * @return string
	 */
	public function setTransactionID($_transactionID)
	{
		return ($this->transactionID = $_transactionID);
	}
	/**
	 * Get transactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->transactionID;
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