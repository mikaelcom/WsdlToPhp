<?php
/**
 * Class file for XWebCheckOutTypeComment
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeComment
 * @date 09/07/2012
 */
class XWebCheckOutTypeComment extends XWebCheckOutWsdlClass
{
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
	 * The Comment_Sequence
	 * @var anonymous49
	 */
	public $Comment_Sequence;
	/**
	 * The Date_Created
	 * @var anonymous50
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Subject Subject
	 * @param Body Body
	 * @param anonymous49 Comment_Sequence
	 * @param anonymous50 Date_Created
	 * @return XWebCheckOutTypeComment
	 */
	public function __construct($_Subject = null,$_Body = null,$_Comment_Sequence = null,$_Date_Created = null)
	{
		parent::__construct(array('Subject'=>$_Subject,'Body'=>$_Body,'Comment_Sequence'=>$_Comment_Sequence,'Date_Created'=>$_Date_Created));
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
	 * Set Comment_Sequence
	 * @param anonymous49 Comment_Sequence
	 * @return anonymous49
	 */
	public function setComment_Sequence($_Comment_Sequence)
	{
		return ($this->Comment_Sequence = $_Comment_Sequence);
	}
	/**
	 * Get Comment_Sequence
	 * @return anonymous49
	 */
	public function getComment_Sequence()
	{
		return $this->Comment_Sequence;
	}
	/**
	 * Set Date_Created
	 * @param anonymous50 Date_Created
	 * @return anonymous50
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous50
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