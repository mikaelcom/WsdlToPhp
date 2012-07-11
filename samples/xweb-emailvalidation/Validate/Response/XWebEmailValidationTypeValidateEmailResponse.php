<?php
/**
 * Class file for XWebEmailValidationTypeValidateEmailResponse
 * @date 09/07/2012
 */
/**
 * Class XWebEmailValidationTypeValidateEmailResponse
 * @date 09/07/2012
 */
class XWebEmailValidationTypeValidateEmailResponse extends XWebEmailValidationWsdlClass
{
	/**
	 * The Status
	 * @var Status
	 */
	public $Status;
	/**
	 * Constructor
	 * @param Status Status
	 * @return XWebEmailValidationTypeValidateEmailResponse
	 */
	public function __construct($_Status = null)
	{
		parent::__construct(array('Status'=>$_Status));
	}
	/**
	 * Set Status
	 * @param Status Status
	 * @return Status
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return Status
	 */
	public function getStatus()
	{
		return $this->Status;
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