<?php
/**
 * Class file for XWebLeadTypeLoadLeadsPagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebLeadTypeLoadLeadsPagedResponse
 * @date 09/07/2012
 */
class XWebLeadTypeLoadLeadsPagedResponse extends XWebLeadWsdlClass
{
	/**
	 * The Lead
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebLeadTypeLead
	 */
	public $Lead;
	/**
	 * The Total_Record_Count
	 * @var anonymous13
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebLeadTypeLead Lead
	 * @param anonymous13 Total_Record_Count
	 * @return XWebLeadTypeLoadLeadsPagedResponse
	 */
	public function __construct($_Lead = null,$_Total_Record_Count = null)
	{
		parent::__construct(array('Lead'=>$_Lead,'Total_Record_Count'=>$_Total_Record_Count));
	}
	/**
	 * Set Lead
	 * @param Lead Lead
	 * @return Lead
	 */
	public function setLead($_Lead)
	{
		return ($this->Lead = $_Lead);
	}
	/**
	 * Get Lead
	 * @return XWebLeadTypeLead
	 */
	public function getLead()
	{
		return $this->Lead;
	}
	/**
	 * Set Total_Record_Count
	 * @param anonymous13 Total_Record_Count
	 * @return anonymous13
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous13
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