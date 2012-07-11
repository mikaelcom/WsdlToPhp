<?php
/**
 * Class file for XWebForumTypeDeleteMessageRequest
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeDeleteMessageRequest
 * @date 09/07/2012
 */
class XWebForumTypeDeleteMessageRequest extends XWebForumWsdlClass
{
	/**
	 * The Message_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Message_ID;
	/**
	 * Constructor
	 * @param positiveInteger Message_ID
	 * @return XWebForumTypeDeleteMessageRequest
	 */
	public function __construct($_Message_ID)
	{
		parent::__construct(array('Message_ID'=>$_Message_ID));
	}
	/**
	 * Set Message_ID
	 * @param positiveInteger Message_ID
	 * @return positiveInteger
	 */
	public function setMessage_ID($_Message_ID)
	{
		return ($this->Message_ID = $_Message_ID);
	}
	/**
	 * Get Message_ID
	 * @return positiveInteger
	 */
	public function getMessage_ID()
	{
		return $this->Message_ID;
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