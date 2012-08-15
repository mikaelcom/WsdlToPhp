<?php
/**
 * Class file for RFBibleASVTypeGetVerse
 * @date 15/08/2012
 */
/**
 * Class RFBibleASVTypeGetVerse
 * @date 15/08/2012
 */
class RFBibleASVTypeGetVerse extends RFBibleASVWsdlClass
{
	/**
	 * The bookName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $bookName;
	/**
	 * The chapter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $chapter;
	/**
	 * The verse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $verse;
	/**
	 * Constructor
	 * @param string bookName
	 * @param int chapter
	 * @param int verse
	 * @return RFBibleASVTypeGetVerse
	 */
	public function __construct($_bookName = null,$_chapter = null,$_verse = null)
	{
		parent::__construct(array('bookName'=>$_bookName,'chapter'=>$_chapter,'verse'=>$_verse));
	}
	/**
	 * Set bookName
	 * @param string bookName
	 * @return string
	 */
	public function setBookName($_bookName)
	{
		return ($this->bookName = $_bookName);
	}
	/**
	 * Get bookName
	 * @return string
	 */
	public function getBookName()
	{
		return $this->bookName;
	}
	/**
	 * Set chapter
	 * @param int chapter
	 * @return int
	 */
	public function setChapter($_chapter)
	{
		return ($this->chapter = $_chapter);
	}
	/**
	 * Get chapter
	 * @return int
	 */
	public function getChapter()
	{
		return $this->chapter;
	}
	/**
	 * Set verse
	 * @param int verse
	 * @return int
	 */
	public function setVerse($_verse)
	{
		return ($this->verse = $_verse);
	}
	/**
	 * Get verse
	 * @return int
	 */
	public function getVerse()
	{
		return $this->verse;
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