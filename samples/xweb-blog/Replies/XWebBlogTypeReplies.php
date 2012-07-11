<?php
/**
 * Class file for XWebBlogTypeReplies
 * @date 09/07/2012
 */
/**
 * Class XWebBlogTypeReplies
 * @date 09/07/2012
 */
class XWebBlogTypeReplies extends XWebBlogWsdlClass
{
	/**
	 * The Reply
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebBlogTypeEntry_Reply
	 */
	public $Reply;
	/**
	 * Constructor
	 * @param XWebBlogTypeEntry_Reply Reply
	 * @return XWebBlogTypeReplies
	 */
	public function __construct($_Reply = null)
	{
		parent::__construct(array('Reply'=>$_Reply));
	}
	/**
	 * Set Reply
	 * @param Entry_Reply Reply
	 * @return Entry_Reply
	 */
	public function setReply($_Reply)
	{
		return ($this->Reply = $_Reply);
	}
	/**
	 * Get Reply
	 * @return XWebBlogTypeEntry_Reply
	 */
	public function getReply()
	{
		return $this->Reply;
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