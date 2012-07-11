<?php
/**
 * Class file for XWebForumTypeTopic
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeTopic
 * @date 09/07/2012
 */
class XWebForumTypeTopic extends XWebForumWsdlClass
{
	/**
	 * The Source_Identifier
	 * @var Source_Identifier
	 */
	public $Source_Identifier;
	/**
	 * The Author
	 * @var Author
	 */
	public $Author;
	/**
	 * The Subject
	 * @var Subject
	 */
	public $Subject;
	/**
	 * The Body
	 * @var Body
	 */
	public $Body;
	/**
	 * The Replies
	 * @var XWebForumTypeReplies
	 */
	public $Replies;
	/**
	 * The Replies_Count
	 * @var Replies_Count
	 */
	public $Replies_Count;
	/**
	 * The Topic_ID
	 * @var anonymous16
	 */
	public $Topic_ID;
	/**
	 * The Date_Created
	 * @var anonymous17
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Source_Identifier Source_Identifier
	 * @param Author Author
	 * @param Subject Subject
	 * @param Body Body
	 * @param XWebForumTypeReplies Replies
	 * @param Replies_Count Replies_Count
	 * @param anonymous16 Topic_ID
	 * @param anonymous17 Date_Created
	 * @return XWebForumTypeTopic
	 */
	public function __construct($_Source_Identifier = null,$_Author = null,$_Subject = null,$_Body = null,$_Replies = null,$_Replies_Count = null,$_Topic_ID = null,$_Date_Created = null)
	{
		parent::__construct(array('Source_Identifier'=>$_Source_Identifier,'Author'=>$_Author,'Subject'=>$_Subject,'Body'=>$_Body,'Replies'=>$_Replies,'Replies_Count'=>$_Replies_Count,'Topic_ID'=>$_Topic_ID,'Date_Created'=>$_Date_Created));
	}
	/**
	 * Set Source_Identifier
	 * @param Source_Identifier Source_Identifier
	 * @return Source_Identifier
	 */
	public function setSource_Identifier($_Source_Identifier)
	{
		return ($this->Source_Identifier = $_Source_Identifier);
	}
	/**
	 * Get Source_Identifier
	 * @return Source_Identifier
	 */
	public function getSource_Identifier()
	{
		return $this->Source_Identifier;
	}
	/**
	 * Set Author
	 * @param Author Author
	 * @return Author
	 */
	public function setAuthor($_Author)
	{
		return ($this->Author = $_Author);
	}
	/**
	 * Get Author
	 * @return Author
	 */
	public function getAuthor()
	{
		return $this->Author;
	}
	/**
	 * Set Subject
	 * @param Subject Subject
	 * @return Subject
	 */
	public function setSubject($_Subject)
	{
		return ($this->Subject = $_Subject);
	}
	/**
	 * Get Subject
	 * @return Subject
	 */
	public function getSubject()
	{
		return $this->Subject;
	}
	/**
	 * Set Body
	 * @param Body Body
	 * @return Body
	 */
	public function setBody($_Body)
	{
		return ($this->Body = $_Body);
	}
	/**
	 * Get Body
	 * @return Body
	 */
	public function getBody()
	{
		return $this->Body;
	}
	/**
	 * Set Replies
	 * @param Replies Replies
	 * @return Replies
	 */
	public function setReplies($_Replies)
	{
		return ($this->Replies = $_Replies);
	}
	/**
	 * Get Replies
	 * @return XWebForumTypeReplies
	 */
	public function getReplies()
	{
		return $this->Replies;
	}
	/**
	 * Set Replies_Count
	 * @param Replies_Count Replies_Count
	 * @return Replies_Count
	 */
	public function setReplies_Count($_Replies_Count)
	{
		return ($this->Replies_Count = $_Replies_Count);
	}
	/**
	 * Get Replies_Count
	 * @return Replies_Count
	 */
	public function getReplies_Count()
	{
		return $this->Replies_Count;
	}
	/**
	 * Set Topic_ID
	 * @param anonymous16 Topic_ID
	 * @return anonymous16
	 */
	public function setTopic_ID($_Topic_ID)
	{
		return ($this->Topic_ID = $_Topic_ID);
	}
	/**
	 * Get Topic_ID
	 * @return anonymous16
	 */
	public function getTopic_ID()
	{
		return $this->Topic_ID;
	}
	/**
	 * Set Date_Created
	 * @param anonymous17 Date_Created
	 * @return anonymous17
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous17
	 */
	public function getDate_Created()
	{
		return $this->Date_Created;
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