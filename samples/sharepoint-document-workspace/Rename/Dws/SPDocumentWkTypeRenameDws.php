<?php
/**
 * Class file for SPDocumentWkTypeRenameDws
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeRenameDws
 * @date 06/07/2012
 */
class SPDocumentWkTypeRenameDws extends SPDocumentWkWsdlClass
{
	/**
	 * The title
	 * @var string
	 */
	public $title;
	/**
	 * Constructor
	 * @param string title
	 * @return SPDocumentWkTypeRenameDws
	 */
	public function __construct($_title = null)
	{
		parent::__construct(array('title'=>$_title));
	}
	/**
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
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