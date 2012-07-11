<?php
/**
 * Class file for XWebLeadTypeLoadLeadRequest
 * @date 09/07/2012
 */
/**
 * Class XWebLeadTypeLoadLeadRequest
 * @date 09/07/2012
 */
class XWebLeadTypeLoadLeadRequest extends XWebLeadWsdlClass
{
	/**
	 * The Lead_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Lead_ID;
	/**
	 * Constructor
	 * @param string Lead_ID
	 * @return XWebLeadTypeLoadLeadRequest
	 */
	public function __construct($_Lead_ID)
	{
		parent::__construct(array('Lead_ID'=>$_Lead_ID));
	}
	/**
	 * Set Lead_ID
	 * @param string Lead_ID
	 * @return string
	 */
	public function setLead_ID($_Lead_ID)
	{
		return ($this->Lead_ID = $_Lead_ID);
	}
	/**
	 * Get Lead_ID
	 * @return string
	 */
	public function getLead_ID()
	{
		return $this->Lead_ID;
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