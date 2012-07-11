<?php
/**
 * Class file for XWebForumTypeMessage
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeMessage
 * @date 09/07/2012
 */
class XWebForumTypeMessage extends XWebForumWsdlClass
{
	/**
	 * The Topic_ID
	 * @var Topic_ID
	 */
	public $Topic_ID;
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
	 * The Replies_Count
	 * @var Replies_Count
	 */
	public $Replies_Count;
	/**
	 * The Message_ID
	 * @var anonymous7
	 */
	public $Message_ID;
	/**
	 * The Date_Created
	 * @var anonymous8
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Topic_ID Topic_ID
	 * @param Source_Identifier Source_Identifier
	 * @param Author Author
	 * @param Subject Subject
	 * @param Body Body
	 * @param Replies_Count Replies_Count
	 * @param anonymous7 Message_ID
	 * @param anonymous8 Date_Created
	 * @return XWebForumTypeMessage
	 */
	public function __construct($_Topic_ID = null,$_Source_Identifier = null,$_Author = null,$_Subject = null,$_Body = null,$_Replies_Count = null,$_Message_ID = null,$_Date_Created = null)
	{
		parent::__construct(array('Topic_ID'=>$_Topic_ID,'Source_Identifier'=>$_Source_Identifier,'Author'=>$_Author,'Subject'=>$_Subject,'Body'=>$_Body,'Replies_Count'=>$_Replies_Count,'Message_ID'=>$_Message_ID,'Date_Created'=>$_Date_Created));
	}
	/**
	 * Set Topic_ID
	 * @param Topic_ID Topic_ID
	 * @return Topic_ID
	 */
	public function setTopic_ID($_Topic_ID)
	{
		return ($this->Topic_ID = $_Topic_ID);
	}
	/**
	 * Get Topic_ID
	 * @return Topic_ID
	 */
	public function getTopic_ID()
	{
		return $this->Topic_ID;
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
	 * Set Message_ID
	 * @param anonymous7 Message_ID
	 * @return anonymous7
	 */
	public function setMessage_ID($_Message_ID)
	{
		return ($this->Message_ID = $_Message_ID);
	}
	/**
	 * Get Message_ID
	 * @return anonymous7
	 */
	public function getMessage_ID()
	{
		return $this->Message_ID;
	}
	/**
	 * Set Date_Created
	 * @param anonymous8 Date_Created
	 * @return anonymous8
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous8
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