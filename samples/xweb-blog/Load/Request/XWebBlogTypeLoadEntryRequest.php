<?php
/**
 * Class file for XWebBlogTypeLoadEntryRequest
 * @date 09/07/2012
 */
/**
 * Class XWebBlogTypeLoadEntryRequest
 * @date 09/07/2012
 */
class XWebBlogTypeLoadEntryRequest extends XWebBlogWsdlClass
{
	/**
	 * The Entry_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Entry_ID;
	/**
	 * Constructor
	 * @param positiveInteger Entry_ID
	 * @return XWebBlogTypeLoadEntryRequest
	 */
	public function __construct($_Entry_ID)
	{
		parent::__construct(array('Entry_ID'=>$_Entry_ID));
	}
	/**
	 * Set Entry_ID
	 * @param positiveInteger Entry_ID
	 * @return positiveInteger
	 */
	public function setEntry_ID($_Entry_ID)
	{
		return ($this->Entry_ID = $_Entry_ID);
	}
	/**
	 * Get Entry_ID
	 * @return positiveInteger
	 */
	public function getEntry_ID()
	{
		return $this->Entry_ID;
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