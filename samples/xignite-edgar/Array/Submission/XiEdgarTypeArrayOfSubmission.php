<?php
/**
 * Class file for XiEdgarTypeArrayOfSubmission
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeArrayOfSubmission
 * @date 08/07/2012
 */
class XiEdgarTypeArrayOfSubmission extends XiEdgarWsdlClass
{
	/**
	 * The Submission
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEdgarTypeSubmission
	 */
	public $Submission;
	/**
	 * Constructor
	 * @param XiEdgarTypeSubmission Submission
	 * @return XiEdgarTypeArrayOfSubmission
	 */
	public function __construct($_Submission = null)
	{
		parent::__construct(array('Submission'=>$_Submission));
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
	 * Returns the current element
	 * @see XiEdgarWsdlClass::current()
	 * @return XiEdgarTypeSubmission
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEdgarWsdlClass::item()
	 * @param int
	 * @return XiEdgarTypeSubmission
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::first()
	 * @return XiEdgarTypeSubmission
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::last()
	 * @return XiEdgarTypeSubmission
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEdgarTypeSubmission
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Submission'
	 */
	public function getAttributeName()
	{
		return 'Submission';
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