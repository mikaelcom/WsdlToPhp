<?php
/**
 * Class file for OvhTypeBillingInvoiceDetailStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingInvoiceDetailStruct
 * @date 02/07/2012
 */
class OvhTypeBillingInvoiceDetailStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The reference
	 * @var string
	 */
	public $reference;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param string domain
	 * @param string reference
	 * @param string description
	 * @return OvhTypeBillingInvoiceDetailStruct
	 */
	public function __construct($_domain = null,$_reference = null,$_description = null)
	{
		parent::__construct(array('domain'=>$_domain,'reference'=>$_reference,'description'=>$_description));
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set reference
	 * @param string reference
	 * @return string
	 */
	public function setReference($_reference)
	{
		return ($this->reference = $_reference);
	}
	/**
	 * Get reference
	 * @return string
	 */
	public function getReference()
	{
		return $this->reference;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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