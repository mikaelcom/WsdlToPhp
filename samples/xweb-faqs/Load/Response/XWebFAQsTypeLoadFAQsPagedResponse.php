<?php
/**
 * Class file for XWebFAQsTypeLoadFAQsPagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebFAQsTypeLoadFAQsPagedResponse
 * @date 09/07/2012
 */
class XWebFAQsTypeLoadFAQsPagedResponse extends XWebFAQsWsdlClass
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
	 * The Total_Record_Count
	 * @var anonymous10
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebFAQsTypeFAQ FAQ
	 * @param anonymous10 Total_Record_Count
	 * @return XWebFAQsTypeLoadFAQsPagedResponse
	 */
	public function __construct($_FAQ = null,$_Total_Record_Count = null)
	{
		parent::__construct(array('FAQ'=>$_FAQ,'Total_Record_Count'=>$_Total_Record_Count));
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
	 * Set Total_Record_Count
	 * @param anonymous10 Total_Record_Count
	 * @return anonymous10
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous10
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