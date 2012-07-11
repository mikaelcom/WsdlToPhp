<?php
/**
 * Class file for XWebForumTypeLoadMessagesBySourcePagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeLoadMessagesBySourcePagedResponse
 * @date 09/07/2012
 */
class XWebForumTypeLoadMessagesBySourcePagedResponse extends XWebForumWsdlClass
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
	 * @var anonymous39
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebForumTypeMessage Message
	 * @param anonymous39 Total_Record_Count
	 * @return XWebForumTypeLoadMessagesBySourcePagedResponse
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
	 * @param anonymous39 Total_Record_Count
	 * @return anonymous39
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous39
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