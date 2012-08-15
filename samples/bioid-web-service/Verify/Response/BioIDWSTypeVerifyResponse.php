<?php
/**
 * Class file for BioIDWSTypeVerifyResponse
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeVerifyResponse
 * @date 15/08/2012
 */
class BioIDWSTypeVerifyResponse extends BioIDWSWsdlClass
{
	/**
	 * The VerifyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $VerifyResult;
	/**
	 * The messages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $messages;
	/**
	 * Constructor
	 * @param boolean VerifyResult
	 * @param string messages
	 * @return BioIDWSTypeVerifyResponse
	 */
	public function __construct($_VerifyResult = null,$_messages = null)
	{
		parent::__construct(array('VerifyResult'=>$_VerifyResult,'messages'=>$_messages));
	}
	/**
	 * Set VerifyResult
	 * @param boolean VerifyResult
	 * @return boolean
	 */
	public function setVerifyResult($_VerifyResult)
	{
		return ($this->VerifyResult = $_VerifyResult);
	}
	/**
	 * Get VerifyResult
	 * @return boolean
	 */
	public function getVerifyResult()
	{
		return $this->VerifyResult;
	}
	/**
	 * Set messages
	 * @param string messages
	 * @return string
	 */
	public function setMessages($_messages)
	{
		return ($this->messages = $_messages);
	}
	/**
	 * Get messages
	 * @return string
	 */
	public function getMessages()
	{
		return $this->messages;
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