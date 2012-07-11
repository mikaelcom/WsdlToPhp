<?php
/**
 * Class file for XWebCheckOutTypeComments
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeComments
 * @date 09/07/2012
 */
class XWebCheckOutTypeComments extends XWebCheckOutWsdlClass
{
	/**
	 * The Comment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebCheckOutTypeComment
	 */
	public $Comment;
	/**
	 * Constructor
	 * @param XWebCheckOutTypeComment Comment
	 * @return XWebCheckOutTypeComments
	 */
	public function __construct($_Comment = null)
	{
		parent::__construct(array('Comment'=>$_Comment));
	}
	/**
	 * Set Comment
	 * @param Comment Comment
	 * @return Comment
	 */
	public function setComment($_Comment)
	{
		return ($this->Comment = $_Comment);
	}
	/**
	 * Get Comment
	 * @return XWebCheckOutTypeComment
	 */
	public function getComment()
	{
		return $this->Comment;
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