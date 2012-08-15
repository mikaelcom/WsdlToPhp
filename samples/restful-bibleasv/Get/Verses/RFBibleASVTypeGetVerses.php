<?php
/**
 * Class file for RFBibleASVTypeGetVerses
 * @date 15/08/2012
 */
/**
 * Class RFBibleASVTypeGetVerses
 * @date 15/08/2012
 */
class RFBibleASVTypeGetVerses extends RFBibleASVWsdlClass
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
	 * The fromVerse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $fromVerse;
	/**
	 * The toVerse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $toVerse;
	/**
	 * Constructor
	 * @param string bookName
	 * @param int chapter
	 * @param int fromVerse
	 * @param int toVerse
	 * @return RFBibleASVTypeGetVerses
	 */
	public function __construct($_bookName = null,$_chapter = null,$_fromVerse = null,$_toVerse = null)
	{
		parent::__construct(array('bookName'=>$_bookName,'chapter'=>$_chapter,'fromVerse'=>$_fromVerse,'toVerse'=>$_toVerse));
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
	 * Set fromVerse
	 * @param int fromVerse
	 * @return int
	 */
	public function setFromVerse($_fromVerse)
	{
		return ($this->fromVerse = $_fromVerse);
	}
	/**
	 * Get fromVerse
	 * @return int
	 */
	public function getFromVerse()
	{
		return $this->fromVerse;
	}
	/**
	 * Set toVerse
	 * @param int toVerse
	 * @return int
	 */
	public function setToVerse($_toVerse)
	{
		return ($this->toVerse = $_toVerse);
	}
	/**
	 * Get toVerse
	 * @return int
	 */
	public function getToVerse()
	{
		return $this->toVerse;
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