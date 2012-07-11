<?php
/**
 * Class file for AmazonSimpleDBTypeListDomains
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeListDomains
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeListDomains extends AmazonSimpleDBWsdlClass
{
	/**
	 * The MaxNumberOfDomains
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $MaxNumberOfDomains;
	/**
	 * The NextToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NextToken;
	/**
	 * Constructor
	 * @param int MaxNumberOfDomains
	 * @param string NextToken
	 * @return AmazonSimpleDBTypeListDomains
	 */
	public function __construct($_MaxNumberOfDomains = null,$_NextToken = null)
	{
		parent::__construct(array('MaxNumberOfDomains'=>$_MaxNumberOfDomains,'NextToken'=>$_NextToken));
	}
	/**
	 * Set MaxNumberOfDomains
	 * @param int MaxNumberOfDomains
	 * @return int
	 */
	public function setMaxNumberOfDomains($_MaxNumberOfDomains)
	{
		return ($this->MaxNumberOfDomains = $_MaxNumberOfDomains);
	}
	/**
	 * Get MaxNumberOfDomains
	 * @return int
	 */
	public function getMaxNumberOfDomains()
	{
		return $this->MaxNumberOfDomains;
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