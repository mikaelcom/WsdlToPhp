<?php
/**
 * Class file for OvhTypeSqlpriveGetPossibleDumpStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveGetPossibleDumpStruct
 * @date 02/07/2012
 */
class OvhTypeSqlpriveGetPossibleDumpStruct extends OvhWsdlClass
{
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The file
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $file;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor
	 * @param string date
	 * @param OvhTypeMyArrayOfStringType file
	 * @param string comment
	 * @return OvhTypeSqlpriveGetPossibleDumpStruct
	 */
	public function __construct($_date = null,$_file = null,$_comment = null)
	{
		parent::__construct(array('date'=>$_date,'file'=>new OvhTypeMyArrayOfStringType($_file),'comment'=>$_comment));
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set file
	 * @param MyArrayOfStringType file
	 * @return MyArrayOfStringType
	 */
	public function setFile($_file)
	{
		return ($this->file = $_file);
	}
	/**
	 * Get file
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getFile()
	{
		return $this->file;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
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