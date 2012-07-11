<?php
/**
 * Class file for SPPeopleTypeResolvePrincipals
 * @date 06/07/2012
 */
/**
 * Class SPPeopleTypeResolvePrincipals
 * @date 06/07/2012
 */
class SPPeopleTypeResolvePrincipals extends SPPeopleWsdlClass
{
	/**
	 * The principalKeys
	 * @var SPPeopleTypeArrayOfString
	 */
	public $principalKeys;
	/**
	 * The principalType
	 * @var SPPrincipalType
	 */
	public $principalType;
	/**
	 * The addToUserInfoList
	 * @var boolean
	 */
	public $addToUserInfoList;
	/**
	 * Constructor
	 * @param SPPeopleTypeArrayOfString principalKeys
	 * @param SPPrincipalType principalType
	 * @param boolean addToUserInfoList
	 * @return SPPeopleTypeResolvePrincipals
	 */
	public function __construct($_principalKeys = null,$_principalType = null,$_addToUserInfoList = null)
	{
		parent::__construct(array('principalKeys'=>new SPPeopleTypeArrayOfString($_principalKeys),'principalType'=>$_principalType,'addToUserInfoList'=>$_addToUserInfoList));
	}
	/**
	 * Set principalKeys
	 * @param ArrayOfString principalKeys
	 * @return ArrayOfString
	 */
	public function setPrincipalKeys($_principalKeys)
	{
		return ($this->principalKeys = $_principalKeys);
	}
	/**
	 * Get principalKeys
	 * @return SPPeopleTypeArrayOfString
	 */
	public function getPrincipalKeys()
	{
		return $this->principalKeys;
	}
	/**
	 * Set principalType
	 * @param SPPrincipalType principalType
	 * @return SPPrincipalType
	 */
	public function setPrincipalType($_principalType)
	{
		return ($this->principalType = $_principalType);
	}
	/**
	 * Get principalType
	 * @return SPPrincipalType
	 */
	public function getPrincipalType()
	{
		return $this->principalType;
	}
	/**
	 * Set addToUserInfoList
	 * @param boolean addToUserInfoList
	 * @return boolean
	 */
	public function setAddToUserInfoList($_addToUserInfoList)
	{
		return ($this->addToUserInfoList = $_addToUserInfoList);
	}
	/**
	 * Get addToUserInfoList
	 * @return boolean
	 */
	public function getAddToUserInfoList()
	{
		return $this->addToUserInfoList;
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