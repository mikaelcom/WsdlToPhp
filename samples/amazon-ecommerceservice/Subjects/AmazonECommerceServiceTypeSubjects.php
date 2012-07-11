<?php
/**
 * Class file for AmazonECommerceServiceTypeSubjects
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSubjects
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSubjects extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Subject;
	/**
	 * Constructor
	 * @param string Subject
	 * @return AmazonECommerceServiceTypeSubjects
	 */
	public function __construct($_Subject = null)
	{
		parent::__construct(array('Subject'=>$_Subject));
	}
	/**
	 * Set Subject
	 * @param string Subject
	 * @return string
	 */
	public function setSubject($_Subject)
	{
		return ($this->Subject = $_Subject);
	}
	/**
	 * Get Subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->Subject;
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