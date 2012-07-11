<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartPage
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartPage
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartPage extends SPWebPartPagesWsdlClass
{
	/**
	 * The documentName
	 * @var string
	 */
	public $documentName;
	/**
	 * The behavior
	 * @var SPWebServiceBehavior
	 */
	public $behavior;
	/**
	 * Constructor
	 * @param string documentName
	 * @param SPWebServiceBehavior behavior
	 * @return SPWebPartPagesTypeGetWebPartPage
	 */
	public function __construct($_documentName = null,$_behavior = null)
	{
		parent::__construct(array('documentName'=>$_documentName,'behavior'=>$_behavior));
	}
	/**
	 * Set documentName
	 * @param string documentName
	 * @return string
	 */
	public function setDocumentName($_documentName)
	{
		return ($this->documentName = $_documentName);
	}
	/**
	 * Get documentName
	 * @return string
	 */
	public function getDocumentName()
	{
		return $this->documentName;
	}
	/**
	 * Set behavior
	 * @param SPWebServiceBehavior behavior
	 * @return SPWebServiceBehavior
	 */
	public function setBehavior($_behavior)
	{
		return ($this->behavior = $_behavior);
	}
	/**
	 * Get behavior
	 * @return SPWebServiceBehavior
	 */
	public function getBehavior()
	{
		return $this->behavior;
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