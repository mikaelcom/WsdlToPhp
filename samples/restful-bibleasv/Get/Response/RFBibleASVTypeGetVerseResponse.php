<?php
/**
 * Class file for RFBibleASVTypeGetVerseResponse
 * @date 15/08/2012
 */
/**
 * Class RFBibleASVTypeGetVerseResponse
 * @date 15/08/2012
 */
class RFBibleASVTypeGetVerseResponse extends RFBibleASVWsdlClass
{
	/**
	 * The GetVerseResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFBibleASVTypeBibleVerse
	 */
	public $GetVerseResult;
	/**
	 * Constructor
	 * @param RFBibleASVTypeBibleVerse GetVerseResult
	 * @return RFBibleASVTypeGetVerseResponse
	 */
	public function __construct($_GetVerseResult = null)
	{
		parent::__construct(array('GetVerseResult'=>$_GetVerseResult));
	}
	/**
	 * Set GetVerseResult
	 * @param BibleVerse GetVerseResult
	 * @return BibleVerse
	 */
	public function setGetVerseResult($_GetVerseResult)
	{
		return ($this->GetVerseResult = $_GetVerseResult);
	}
	/**
	 * Get GetVerseResult
	 * @return RFBibleASVTypeBibleVerse
	 */
	public function getGetVerseResult()
	{
		return $this->GetVerseResult;
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