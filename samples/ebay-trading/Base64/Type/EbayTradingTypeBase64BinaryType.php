<?php
/**
 * Class file for EbayTradingTypeBase64BinaryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBase64BinaryType
 * Documentation : Stores an optional reference ID to the binary attachment.
 * @date 04/07/2012
 */
class EbayTradingTypeBase64BinaryType extends EbayTradingWsdlClass
{
	/**
	 * The _
	 * @var base64Binary
	 */
	public $_;
	/**
	 * The contentType
	 * @var string
	 */
	public $contentType;
	/**
	 * Constructor
	 * @param base64Binary _
	 * @param string contentType
	 * @return EbayTradingTypeBase64BinaryType
	 */
	public function __construct($__ = null,$_contentType = null)
	{
		parent::__construct(array('_'=>$__,'contentType'=>$_contentType));
	}
	/**
	 * Set _
	 * @param base64Binary _
	 * @return base64Binary
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return base64Binary
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set contentType
	 * @param string contentType
	 * @return string
	 */
	public function setContentType($_contentType)
	{
		return ($this->contentType = $_contentType);
	}
	/**
	 * Get contentType
	 * @return string
	 */
	public function getContentType()
	{
		return $this->contentType;
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