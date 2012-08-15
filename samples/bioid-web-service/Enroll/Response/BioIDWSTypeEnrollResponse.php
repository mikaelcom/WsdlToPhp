<?php
/**
 * Class file for BioIDWSTypeEnrollResponse
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeEnrollResponse
 * @date 15/08/2012
 */
class BioIDWSTypeEnrollResponse extends BioIDWSWsdlClass
{
	/**
	 * The EnrollResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $EnrollResult;
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
	 * @param boolean EnrollResult
	 * @param string messages
	 * @return BioIDWSTypeEnrollResponse
	 */
	public function __construct($_EnrollResult = null,$_messages = null)
	{
		parent::__construct(array('EnrollResult'=>$_EnrollResult,'messages'=>$_messages));
	}
	/**
	 * Set EnrollResult
	 * @param boolean EnrollResult
	 * @return boolean
	 */
	public function setEnrollResult($_EnrollResult)
	{
		return ($this->EnrollResult = $_EnrollResult);
	}
	/**
	 * Get EnrollResult
	 * @return boolean
	 */
	public function getEnrollResult()
	{
		return $this->EnrollResult;
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