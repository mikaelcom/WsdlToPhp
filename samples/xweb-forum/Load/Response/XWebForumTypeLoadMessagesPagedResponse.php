<?php
/**
 * Class file for XWebForumTypeLoadMessagesPagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeLoadMessagesPagedResponse
 * @date 09/07/2012
 */
class XWebForumTypeLoadMessagesPagedResponse extends XWebForumWsdlClass
{
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebForumTypeMessage
	 */
	public $Message;
	/**
	 * The Total_Record_Count
	 * @var anonymous29
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebForumTypeMessage Message
	 * @param anonymous29 Total_Record_Count
	 * @return XWebForumTypeLoadMessagesPagedResponse
	 */
	public function __construct($_Message = null,$_Total_Record_Count = null)
	{
		parent::__construct(array('Message'=>$_Message,'Total_Record_Count'=>$_Total_Record_Count));
	}
	/**
	 * Set Message
	 * @param Message Message
	 * @return Message
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return XWebForumTypeMessage
	 */
	public function getMessage()
	{
		return $this->Message;
	}
	/**
	 * Set Total_Record_Count
	 * @param anonymous29 Total_Record_Count
	 * @return anonymous29
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous29
	 */
	public function getTotal_Record_Count()
	{
		return $this->Total_Record_Count;
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