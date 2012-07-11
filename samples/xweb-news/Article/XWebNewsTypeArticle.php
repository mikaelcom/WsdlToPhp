<?php
/**
 * Class file for XWebNewsTypeArticle
 * @date 09/07/2012
 */
/**
 * Class XWebNewsTypeArticle
 * @date 09/07/2012
 */
class XWebNewsTypeArticle extends XWebNewsWsdlClass
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
	 * The Introduction
	 * @var Introduction
	 */
	public $Introduction;
	/**
	 * The Body
	 * @var Body
	 */
	public $Body;
	/**
	 * The Article_ID
	 * @var anonymous7
	 */
	public $Article_ID;
	/**
	 * The Date_Created
	 * @var anonymous8
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Source_Identifier Source_Identifier
	 * @param Author Author
	 * @param Title Title
	 * @param URL URL
	 * @param Introduction Introduction
	 * @param Body Body
	 * @param anonymous7 Article_ID
	 * @param anonymous8 Date_Created
	 * @return XWebNewsTypeArticle
	 */
	public function __construct($_Source_Identifier = null,$_Author = null,$_Title = null,$_URL = null,$_Introduction = null,$_Body = null,$_Article_ID = null,$_Date_Created = null)
	{
		parent::__construct(array('Source_Identifier'=>$_Source_Identifier,'Author'=>$_Author,'Title'=>$_Title,'URL'=>$_URL,'Introduction'=>$_Introduction,'Body'=>$_Body,'Article_ID'=>$_Article_ID,'Date_Created'=>$_Date_Created));
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
	 * Set Introduction
	 * @param Introduction Introduction
	 * @return Introduction
	 */
	public function setIntroduction($_Introduction)
	{
		return ($this->Introduction = $_Introduction);
	}
	/**
	 * Get Introduction
	 * @return Introduction
	 */
	public function getIntroduction()
	{
		return $this->Introduction;
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
	 * Set Article_ID
	 * @param anonymous7 Article_ID
	 * @return anonymous7
	 */
	public function setArticle_ID($_Article_ID)
	{
		return ($this->Article_ID = $_Article_ID);
	}
	/**
	 * Get Article_ID
	 * @return anonymous7
	 */
	public function getArticle_ID()
	{
		return $this->Article_ID;
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