<?php
/**
 * Class file for AmazonSimpleDBTypeSelect
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeSelect
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeSelect extends AmazonSimpleDBWsdlClass
{
	/**
	 * The SelectExpression
	 * @var string
	 */
	public $SelectExpression;
	/**
	 * The NextToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NextToken;
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
	 * @param string SelectExpression
	 * @param string NextToken
	 * @param boolean ConsistentRead
	 * @return AmazonSimpleDBTypeSelect
	 */
	public function __construct($_SelectExpression = null,$_NextToken = null,$_ConsistentRead = false)
	{
		parent::__construct(array('SelectExpression'=>$_SelectExpression,'NextToken'=>$_NextToken,'ConsistentRead'=>$_ConsistentRead));
	}
	/**
	 * Set SelectExpression
	 * @param string SelectExpression
	 * @return string
	 */
	public function setSelectExpression($_SelectExpression)
	{
		return ($this->SelectExpression = $_SelectExpression);
	}
	/**
	 * Get SelectExpression
	 * @return string
	 */
	public function getSelectExpression()
	{
		return $this->SelectExpression;
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