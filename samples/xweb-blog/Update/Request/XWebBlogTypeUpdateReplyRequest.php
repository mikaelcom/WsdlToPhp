<?php
/**
 * Class file for XWebBlogTypeUpdateReplyRequest
 * @date 09/07/2012
 */
/**
 * Class XWebBlogTypeUpdateReplyRequest
 * @date 09/07/2012
 */
class XWebBlogTypeUpdateReplyRequest extends XWebBlogWsdlClass
{
	/**
	 * The Reply
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebBlogTypeEntry_Reply
	 */
	public $Reply;
	/**
	 * Constructor
	 * @param XWebBlogTypeEntry_Reply Reply
	 * @return XWebBlogTypeUpdateReplyRequest
	 */
	public function __construct($_Reply)
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