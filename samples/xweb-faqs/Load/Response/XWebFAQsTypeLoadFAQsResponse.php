<?php
/**
 * Class file for XWebFAQsTypeLoadFAQsResponse
 * @date 09/07/2012
 */
/**
 * Class XWebFAQsTypeLoadFAQsResponse
 * @date 09/07/2012
 */
class XWebFAQsTypeLoadFAQsResponse extends XWebFAQsWsdlClass
{
	/**
	 * The FAQ
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebFAQsTypeFAQ
	 */
	public $FAQ;
	/**
	 * Constructor
	 * @param XWebFAQsTypeFAQ FAQ
	 * @return XWebFAQsTypeLoadFAQsResponse
	 */
	public function __construct($_FAQ = null)
	{
		parent::__construct(array('FAQ'=>$_FAQ));
	}
	/**
	 * Set FAQ
	 * @param FAQ FAQ
	 * @return FAQ
	 */
	public function setFAQ($_FAQ)
	{
		return ($this->FAQ = $_FAQ);
	}
	/**
	 * Get FAQ
	 * @return XWebFAQsTypeFAQ
	 */
	public function getFAQ()
	{
		return $this->FAQ;
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