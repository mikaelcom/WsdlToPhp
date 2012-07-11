<?php
/**
 * Class file for XWebBlogTypeEntry_Reply
 * @date 09/07/2012
 */
/**
 * Class XWebBlogTypeEntry_Reply
 * @date 09/07/2012
 */
class XWebBlogTypeEntry_Reply extends XWebBlogWsdlClass
{
	/**
	 * The Entry_ID
	 * @var Entry_ID
	 */
	public $Entry_ID;
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
	 * The Reply_ID
	 * @var anonymous14
	 */
	public $Reply_ID;
	/**
	 * The Date_Created
	 * @var anonymous15
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Entry_ID Entry_ID
	 * @param URL URL
	 * @param Author Author
	 * @param Body Body
	 * @param anonymous14 Reply_ID
	 * @param anonymous15 Date_Created
	 * @return XWebBlogTypeEntry_Reply
	 */
	public function __construct($_Entry_ID = null,$_URL = null,$_Author = null,$_Body = null,$_Reply_ID = null,$_Date_Created = null)
	{
		parent::__construct(array('Entry_ID'=>$_Entry_ID,'URL'=>$_URL,'Author'=>$_Author,'Body'=>$_Body,'Reply_ID'=>$_Reply_ID,'Date_Created'=>$_Date_Created));
	}
	/**
	 * Set Entry_ID
	 * @param Entry_ID Entry_ID
	 * @return Entry_ID
	 */
	public function setEntry_ID($_Entry_ID)
	{
		return ($this->Entry_ID = $_Entry_ID);
	}
	/**
	 * Get Entry_ID
	 * @return Entry_ID
	 */
	public function getEntry_ID()
	{
		return $this->Entry_ID;
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
	 * Set Reply_ID
	 * @param anonymous14 Reply_ID
	 * @return anonymous14
	 */
	public function setReply_ID($_Reply_ID)
	{
		return ($this->Reply_ID = $_Reply_ID);
	}
	/**
	 * Get Reply_ID
	 * @return anonymous14
	 */
	public function getReply_ID()
	{
		return $this->Reply_ID;
	}
	/**
	 * Set Date_Created
	 * @param anonymous15 Date_Created
	 * @return anonymous15
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous15
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