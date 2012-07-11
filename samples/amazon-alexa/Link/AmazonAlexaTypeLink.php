<?php
/**
 * Class file for AmazonAlexaTypeLink
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeLink
 * @date 10/07/2012
 */
class AmazonAlexaTypeLink extends AmazonAlexaWsdlClass
{
	/**
	 * The Name
	 * @var token
	 */
	public $Name;
	/**
	 * The LocationURI
	 * @var token
	 */
	public $LocationURI;
	/**
	 * Constructor
	 * @param token Name
	 * @param token LocationURI
	 * @return AmazonAlexaTypeLink
	 */
	public function __construct($_Name = null,$_LocationURI = null)
	{
		parent::__construct(array('Name'=>$_Name,'LocationURI'=>$_LocationURI));
	}
	/**
	 * Set Name
	 * @param token Name
	 * @return token
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return token
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set LocationURI
	 * @param token LocationURI
	 * @return token
	 */
	public function setLocationURI($_LocationURI)
	{
		return ($this->LocationURI = $_LocationURI);
	}
	/**
	 * Get LocationURI
	 * @return token
	 */
	public function getLocationURI()
	{
		return $this->LocationURI;
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