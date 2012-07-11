<?php
/**
 * Class file for XWebFAQsTypeFAQ
 * @date 09/07/2012
 */
/**
 * Class XWebFAQsTypeFAQ
 * @date 09/07/2012
 */
class XWebFAQsTypeFAQ extends XWebFAQsWsdlClass
{
	/**
	 * The Question
	 * @var Question
	 */
	public $Question;
	/**
	 * The Answer
	 * @var Answer
	 */
	public $Answer;
	/**
	 * The FAQ_ID
	 * @var anonymous3
	 */
	public $FAQ_ID;
	/**
	 * The Date_Created
	 * @var anonymous4
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Question Question
	 * @param Answer Answer
	 * @param anonymous3 FAQ_ID
	 * @param anonymous4 Date_Created
	 * @return XWebFAQsTypeFAQ
	 */
	public function __construct($_Question = null,$_Answer = null,$_FAQ_ID = null,$_Date_Created = null)
	{
		parent::__construct(array('Question'=>$_Question,'Answer'=>$_Answer,'FAQ_ID'=>$_FAQ_ID,'Date_Created'=>$_Date_Created));
	}
	/**
	 * Set Question
	 * @param Question Question
	 * @return Question
	 */
	public function setQuestion($_Question)
	{
		return ($this->Question = $_Question);
	}
	/**
	 * Get Question
	 * @return Question
	 */
	public function getQuestion()
	{
		return $this->Question;
	}
	/**
	 * Set Answer
	 * @param Answer Answer
	 * @return Answer
	 */
	public function setAnswer($_Answer)
	{
		return ($this->Answer = $_Answer);
	}
	/**
	 * Get Answer
	 * @return Answer
	 */
	public function getAnswer()
	{
		return $this->Answer;
	}
	/**
	 * Set FAQ_ID
	 * @param anonymous3 FAQ_ID
	 * @return anonymous3
	 */
	public function setFAQ_ID($_FAQ_ID)
	{
		return ($this->FAQ_ID = $_FAQ_ID);
	}
	/**
	 * Get FAQ_ID
	 * @return anonymous3
	 */
	public function getFAQ_ID()
	{
		return $this->FAQ_ID;
	}
	/**
	 * Set Date_Created
	 * @param anonymous4 Date_Created
	 * @return anonymous4
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous4
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