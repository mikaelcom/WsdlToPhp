<?php
/**
 * Class file for AmazonAlexaTypeOwnedDomainsType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeOwnedDomainsType
 * @date 10/07/2012
 */
class AmazonAlexaTypeOwnedDomainsType extends AmazonAlexaWsdlClass
{
	/**
	 * The OwnedDomain
	 * @var AmazonAlexaTypeOwnedDomainType
	 */
	public $OwnedDomain;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeOwnedDomainType OwnedDomain
	 * @return AmazonAlexaTypeOwnedDomainsType
	 */
	public function __construct($_OwnedDomain = null)
	{
		parent::__construct(array('OwnedDomain'=>$_OwnedDomain));
	}
	/**
	 * Set OwnedDomain
	 * @param OwnedDomainType OwnedDomain
	 * @return OwnedDomainType
	 */
	public function setOwnedDomain($_OwnedDomain)
	{
		return ($this->OwnedDomain = $_OwnedDomain);
	}
	/**
	 * Get OwnedDomain
	 * @return AmazonAlexaTypeOwnedDomainType
	 */
	public function getOwnedDomain()
	{
		return $this->OwnedDomain;
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