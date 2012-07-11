<?php
/**
 * Class file for XWebBlogTypeLoadBlogPagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebBlogTypeLoadBlogPagedResponse
 * @date 09/07/2012
 */
class XWebBlogTypeLoadBlogPagedResponse extends XWebBlogWsdlClass
{
	/**
	 * The Entry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebBlogTypeEntry
	 */
	public $Entry;
	/**
	 * The Total_Record_Count
	 * @var anonymous21
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebBlogTypeEntry Entry
	 * @param anonymous21 Total_Record_Count
	 * @return XWebBlogTypeLoadBlogPagedResponse
	 */
	public function __construct($_Entry = null,$_Total_Record_Count = null)
	{
		parent::__construct(array('Entry'=>$_Entry,'Total_Record_Count'=>$_Total_Record_Count));
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
	 * Set Total_Record_Count
	 * @param anonymous21 Total_Record_Count
	 * @return anonymous21
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous21
	 */
	public function getTotal_Record_Count()
	{
		return $this->Total_Record_Count;
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