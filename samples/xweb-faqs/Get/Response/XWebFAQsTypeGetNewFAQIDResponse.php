<?php
/**
 * Class file for XWebFAQsTypeGetNewFAQIDResponse
 * @date 09/07/2012
 */
/**
 * Class XWebFAQsTypeGetNewFAQIDResponse
 * @date 09/07/2012
 */
class XWebFAQsTypeGetNewFAQIDResponse extends XWebFAQsWsdlClass
{
	/**
	 * The FAQ_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $FAQ_ID;
	/**
	 * Constructor
	 * @param positiveInteger FAQ_ID
	 * @return XWebFAQsTypeGetNewFAQIDResponse
	 */
	public function __construct($_FAQ_ID)
	{
		parent::__construct(array('FAQ_ID'=>$_FAQ_ID));
	}
	/**
	 * Set FAQ_ID
	 * @param positiveInteger FAQ_ID
	 * @return positiveInteger
	 */
	public function setFAQ_ID($_FAQ_ID)
	{
		return ($this->FAQ_ID = $_FAQ_ID);
	}
	/**
	 * Get FAQ_ID
	 * @return positiveInteger
	 */
	public function getFAQ_ID()
	{
		return $this->FAQ_ID;
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