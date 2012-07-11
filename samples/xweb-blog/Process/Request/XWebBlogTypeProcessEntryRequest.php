<?php
/**
 * Class file for XWebBlogTypeProcessEntryRequest
 * @date 09/07/2012
 */
/**
 * Class XWebBlogTypeProcessEntryRequest
 * @date 09/07/2012
 */
class XWebBlogTypeProcessEntryRequest extends XWebBlogWsdlClass
{
	/**
	 * The Entry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebBlogTypeEntry
	 */
	public $Entry;
	/**
	 * Constructor
	 * @param XWebBlogTypeEntry Entry
	 * @return XWebBlogTypeProcessEntryRequest
	 */
	public function __construct($_Entry)
	{
		parent::__construct(array('Entry'=>$_Entry));
	}
	/**
	 * Set Entry
	 * @param Entry Entry
	 * @return Entry
	 */
	public function setEntry($_Entry)
	{
		return ($this->Entry = $_Entry);
	}
	/**
	 * Get Entry
	 * @return XWebBlogTypeEntry
	 */
	public function getEntry()
	{
		return $this->Entry;
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