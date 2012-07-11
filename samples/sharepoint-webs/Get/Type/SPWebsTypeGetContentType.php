<?php
/**
 * Class file for SPWebsTypeGetContentType
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetContentType
 * @date 06/07/2012
 */
class SPWebsTypeGetContentType extends SPWebsWsdlClass
{
	/**
	 * The contentTypeId
	 * @var string
	 */
	public $contentTypeId;
	/**
	 * Constructor
	 * @param string contentTypeId
	 * @return SPWebsTypeGetContentType
	 */
	public function __construct($_contentTypeId = null)
	{
		parent::__construct(array('contentTypeId'=>$_contentTypeId));
	}
	/**
	 * Set contentTypeId
	 * @param string contentTypeId
	 * @return string
	 */
	public function setContentTypeId($_contentTypeId)
	{
		return ($this->contentTypeId = $_contentTypeId);
	}
	/**
	 * Get contentTypeId
	 * @return string
	 */
	public function getContentTypeId()
	{
		return $this->contentTypeId;
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