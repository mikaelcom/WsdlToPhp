<?php
/**
 * Class file for AmazonSimpleDBTypeGetAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeGetAttributes
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeGetAttributes extends AmazonSimpleDBWsdlClass
{
	/**
	 * The DomainName
	 * @var string
	 */
	public $DomainName;
	/**
	 * The ItemName
	 * @var string
	 */
	public $ItemName;
	/**
	 * The AttributeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $AttributeName;
	/**
	 * The ConsistentRead
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- default : false
	 * @var boolean
	 */
	public $ConsistentRead;
	/**
	 * Constructor
	 * @param string DomainName
	 * @param string ItemName
	 * @param string AttributeName
	 * @param boolean ConsistentRead
	 * @return AmazonSimpleDBTypeGetAttributes
	 */
	public function __construct($_DomainName = null,$_ItemName = null,$_AttributeName = null,$_ConsistentRead = false)
	{
		parent::__construct(array('DomainName'=>$_DomainName,'ItemName'=>$_ItemName,'AttributeName'=>$_AttributeName,'ConsistentRead'=>$_ConsistentRead));
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
	 * Set ItemName
	 * @param string ItemName
	 * @return string
	 */
	public function setItemName($_ItemName)
	{
		return ($this->ItemName = $_ItemName);
	}
	/**
	 * Get ItemName
	 * @return string
	 */
	public function getItemName()
	{
		return $this->ItemName;
	}
	/**
	 * Set AttributeName
	 * @param string AttributeName
	 * @return string
	 */
	public function setAttributeName($_AttributeName)
	{
		return ($this->AttributeName = $_AttributeName);
	}
	/**
	 * Get AttributeName
	 * @return string
	 */
	public function getAttributeName()
	{
		return $this->AttributeName;
	}
	/**
	 * Set ConsistentRead
	 * @param boolean ConsistentRead
	 * @return boolean
	 */
	public function setConsistentRead($_ConsistentRead)
	{
		return ($this->ConsistentRead = $_ConsistentRead);
	}
	/**
	 * Get ConsistentRead
	 * @return boolean
	 */
	public function getConsistentRead()
	{
		return $this->ConsistentRead;
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