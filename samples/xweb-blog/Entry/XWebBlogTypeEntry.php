<?php
/**
 * Class file for XWebBlogTypeEntry
 * @date 09/07/2012
 */
/**
 * Class XWebBlogTypeEntry
 * @date 09/07/2012
 */
class XWebBlogTypeEntry extends XWebBlogWsdlClass
{
	/**
	 * The Title
	 * @var Title
	 */
	public $Title;
	/**
	 * The URL
	 * @var URL
	 */
	public $URL;
	/**
	 * The Author
	 * @var Author
	 */
	public $Author;
	/**
	 * The Body
	 * @var Body
	 */
	public $Body;
	/**
	 * The Replies
	 * @var XWebBlogTypeReplies
	 */
	public $Replies;
	/**
	 * The Replies_Count
	 * @var Replies_Count
	 */
	public $Replies_Count;
	/**
	 * The Entry_ID
	 * @var anonymous7
	 */
	public $Entry_ID;
	/**
	 * The Date_Created
	 * @var anonymous8
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Title Title
	 * @param URL URL
	 * @param Author Author
	 * @param Body Body
	 * @param XWebBlogTypeReplies Replies
	 * @param Replies_Count Replies_Count
	 * @param anonymous7 Entry_ID
	 * @param anonymous8 Date_Created
	 * @return XWebBlogTypeEntry
	 */
	public function __construct($_Title = null,$_URL = null,$_Author = null,$_Body = null,$_Replies = null,$_Replies_Count = null,$_Entry_ID = null,$_Date_Created = null)
	{
		parent::__construct(array('Title'=>$_Title,'URL'=>$_URL,'Author'=>$_Author,'Body'=>$_Body,'Replies'=>$_Replies,'Replies_Count'=>$_Replies_Count,'Entry_ID'=>$_Entry_ID,'Date_Created'=>$_Date_Created));
	}
	/**
	 * Set Title
	 * @param Title Title
	 * @return Title
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return Title
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set URL
	 * @param URL URL
	 * @return URL
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return URL
	 */
	public function getURL()
	{
		return $this->URL;
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
	 * @return XWebBlogTypeReplies
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
	 * Set Entry_ID
	 * @param anonymous7 Entry_ID
	 * @return anonymous7
	 */
	public function setEntry_ID($_Entry_ID)
	{
		return ($this->Entry_ID = $_Entry_ID);
	}
	/**
	 * Get Entry_ID
	 * @return anonymous7
	 */
	public function getEntry_ID()
	{
		return $this->Entry_ID;
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