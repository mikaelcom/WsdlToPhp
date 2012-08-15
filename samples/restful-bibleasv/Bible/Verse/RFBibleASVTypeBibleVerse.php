<?php
/**
 * Class file for RFBibleASVTypeBibleVerse
 * @date 15/08/2012
 */
/**
 * Class RFBibleASVTypeBibleVerse
 * @date 15/08/2012
 */
class RFBibleASVTypeBibleVerse extends RFBibleASVWsdlClass
{
	/**
	 * The Book
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Book;
	/**
	 * The BookTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $BookTitle;
	/**
	 * The Chapter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Chapter;
	/**
	 * The Verse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Verse;
	/**
	 * The TextData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $TextData;
	/**
	 * Constructor
	 * @param string Book
	 * @param string BookTitle
	 * @param string Chapter
	 * @param string Verse
	 * @param string TextData
	 * @return RFBibleASVTypeBibleVerse
	 */
	public function __construct($_Book = null,$_BookTitle = null,$_Chapter = null,$_Verse = null,$_TextData = null)
	{
		parent::__construct(array('Book'=>$_Book,'BookTitle'=>$_BookTitle,'Chapter'=>$_Chapter,'Verse'=>$_Verse,'TextData'=>$_TextData));
	}
	/**
	 * Set Book
	 * @param string Book
	 * @return string
	 */
	public function setBook($_Book)
	{
		return ($this->Book = $_Book);
	}
	/**
	 * Get Book
	 * @return string
	 */
	public function getBook()
	{
		return $this->Book;
	}
	/**
	 * Set BookTitle
	 * @param string BookTitle
	 * @return string
	 */
	public function setBookTitle($_BookTitle)
	{
		return ($this->BookTitle = $_BookTitle);
	}
	/**
	 * Get BookTitle
	 * @return string
	 */
	public function getBookTitle()
	{
		return $this->BookTitle;
	}
	/**
	 * Set Chapter
	 * @param string Chapter
	 * @return string
	 */
	public function setChapter($_Chapter)
	{
		return ($this->Chapter = $_Chapter);
	}
	/**
	 * Get Chapter
	 * @return string
	 */
	public function getChapter()
	{
		return $this->Chapter;
	}
	/**
	 * Set Verse
	 * @param string Verse
	 * @return string
	 */
	public function setVerse($_Verse)
	{
		return ($this->Verse = $_Verse);
	}
	/**
	 * Get Verse
	 * @return string
	 */
	public function getVerse()
	{
		return $this->Verse;
	}
	/**
	 * Set TextData
	 * @param string TextData
	 * @return string
	 */
	public function setTextData($_TextData)
	{
		return ($this->TextData = $_TextData);
	}
	/**
	 * Get TextData
	 * @return string
	 */
	public function getTextData()
	{
		return $this->TextData;
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