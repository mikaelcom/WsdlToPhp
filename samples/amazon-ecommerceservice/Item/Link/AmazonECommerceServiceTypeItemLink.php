<?php
/**
 * Class file for AmazonECommerceServiceTypeItemLink
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeItemLink
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeItemLink extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $URL;
	/**
	 * Constructor
	 * @param string Description
	 * @param string URL
	 * @return AmazonECommerceServiceTypeItemLink
	 */
	public function __construct($_Description = null,$_URL = null)
	{
		parent::__construct(array('Description'=>$_Description,'URL'=>$_URL));
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set URL
	 * @param string URL
	 * @return string
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return string
	 */
	public function getURL()
	{
		return $this->URL;
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