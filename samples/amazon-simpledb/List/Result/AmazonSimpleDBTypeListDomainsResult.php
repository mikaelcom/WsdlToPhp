<?php
/**
 * Class file for AmazonSimpleDBTypeListDomainsResult
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeListDomainsResult
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeListDomainsResult extends AmazonSimpleDBWsdlClass
{
	/**
	 * The DomainName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $DomainName;
	/**
	 * The NextToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NextToken;
	/**
	 * Constructor
	 * @param string DomainName
	 * @param string NextToken
	 * @return AmazonSimpleDBTypeListDomainsResult
	 */
	public function __construct($_DomainName = null,$_NextToken = null)
	{
		parent::__construct(array('DomainName'=>$_DomainName,'NextToken'=>$_NextToken));
	}
	/**
	 * Set DomainName
	 * @param string DomainName
	 * @return string
	 */
	public function setDomainName($_DomainName)
	{
		return ($this->DomainName = $_DomainName);
	}
	/**
	 * Get DomainName
	 * @return string
	 */
	public function getDomainName()
	{
		return $this->DomainName;
	}
	/**
	 * Set NextToken
	 * @param string NextToken
	 * @return string
	 */
	public function setNextToken($_NextToken)
	{
		return ($this->NextToken = $_NextToken);
	}
	/**
	 * Get NextToken
	 * @return string
	 */
	public function getNextToken()
	{
		return $this->NextToken;
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