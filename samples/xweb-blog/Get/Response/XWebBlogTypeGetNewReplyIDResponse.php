<?php
/**
 * Class file for XWebBlogTypeGetNewReplyIDResponse
 * @date 09/07/2012
 */
/**
 * Class XWebBlogTypeGetNewReplyIDResponse
 * @date 09/07/2012
 */
class XWebBlogTypeGetNewReplyIDResponse extends XWebBlogWsdlClass
{
	/**
	 * The Reply_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Reply_ID;
	/**
	 * Constructor
	 * @param positiveInteger Reply_ID
	 * @return XWebBlogTypeGetNewReplyIDResponse
	 */
	public function __construct($_Reply_ID)
	{
		parent::__construct(array('Reply_ID'=>$_Reply_ID));
	}
	/**
	 * Set Reply_ID
	 * @param positiveInteger Reply_ID
	 * @return positiveInteger
	 */
	public function setReply_ID($_Reply_ID)
	{
		return ($this->Reply_ID = $_Reply_ID);
	}
	/**
	 * Get Reply_ID
	 * @return positiveInteger
	 */
	public function getReply_ID()
	{
		return $this->Reply_ID;
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