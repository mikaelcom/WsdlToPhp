<?php
/**
 * Class file for XiEdgarTypeFilingOccurrence
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeFilingOccurrence
 * @date 08/07/2012
 */
class XiEdgarTypeFilingOccurrence extends XiEdgarTypeCommon
{
	/**
	 * The Submission
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSubmission
	 */
	public $Submission;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * Constructor
	 * @param XiEdgarTypeSubmission Submission
	 * @param int Count
	 * @return XiEdgarTypeFilingOccurrence
	 */
	public function __construct($_Submission = null,$_Count)
	{
		XiEdgarWsdlClass::__construct(array('Submission'=>$_Submission,'Count'=>$_Count));
	}
	/**
	 * Set Submission
	 * @param Submission Submission
	 * @return Submission
	 */
	public function setSubmission($_Submission)
	{
		return ($this->Submission = $_Submission);
	}
	/**
	 * Get Submission
	 * @return XiEdgarTypeSubmission
	 */
	public function getSubmission()
	{
		return $this->Submission;
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
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