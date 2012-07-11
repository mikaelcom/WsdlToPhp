<?php
/**
 * Class file for XWeb1003TypeLoadApplicationsPagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeLoadApplicationsPagedResponse
 * @date 09/07/2012
 */
class XWeb1003TypeLoadApplicationsPagedResponse extends XWeb1003WsdlClass
{
	/**
	 * The Application
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWeb1003TypeApplication
	 */
	public $Application;
	/**
	 * The Total_Record_Count
	 * @var anonymous227
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWeb1003TypeApplication Application
	 * @param anonymous227 Total_Record_Count
	 * @return XWeb1003TypeLoadApplicationsPagedResponse
	 */
	public function __construct($_Application = null,$_Total_Record_Count = null)
	{
		parent::__construct(array('Application'=>$_Application,'Total_Record_Count'=>$_Total_Record_Count));
	}
	/**
	 * Set Application
	 * @param Application Application
	 * @return Application
	 */
	public function setApplication($_Application)
	{
		return ($this->Application = $_Application);
	}
	/**
	 * Get Application
	 * @return XWeb1003TypeApplication
	 */
	public function getApplication()
	{
		return $this->Application;
	}
	/**
	 * Set Total_Record_Count
	 * @param anonymous227 Total_Record_Count
	 * @return anonymous227
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous227
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