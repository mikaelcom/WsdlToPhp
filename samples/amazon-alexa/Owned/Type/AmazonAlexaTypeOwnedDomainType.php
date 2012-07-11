<?php
/**
 * Class file for AmazonAlexaTypeOwnedDomainType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeOwnedDomainType
 * @date 10/07/2012
 */
class AmazonAlexaTypeOwnedDomainType extends AmazonAlexaWsdlClass
{
	/**
	 * The Domain
	 * @var token
	 */
	public $Domain;
	/**
	 * The Title
	 * @var normalizedString
	 */
	public $Title;
	/**
	 * Constructor
	 * @param token Domain
	 * @param normalizedString Title
	 * @return AmazonAlexaTypeOwnedDomainType
	 */
	public function __construct($_Domain = null,$_Title = null)
	{
		parent::__construct(array('Domain'=>$_Domain,'Title'=>$_Title));
	}
	/**
	 * Set Domain
	 * @param token Domain
	 * @return token
	 */
	public function setDomain($_Domain)
	{
		return ($this->Domain = $_Domain);
	}
	/**
	 * Get Domain
	 * @return token
	 */
	public function getDomain()
	{
		return $this->Domain;
	}
	/**
	 * Set Title
	 * @param normalizedString Title
	 * @return normalizedString
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return normalizedString
	 */
	public function getTitle()
	{
		return $this->Title;
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