<?php
/**
 * Class file for GGAdwordsTypeOperation
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeOperation
 * Documentation : This represents an operation that includes an operator and an operand specified type.
 * @date 03/07/2012
 */
class GGAdwordsTypeOperation extends GGAdwordsWsdlClass
{
	/**
	 * The operator
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Operator. <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * @var GGAdwordsTypeOperator
	 */
	public $operator;
	/**
	 * The OperationType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that this instance is a subtype of Operation. Although this field is returned in the response, it is ignored on input and cannot be selected. Specify xsi:type instead.
	 * @var string
	 */
	public $OperationType;
	/**
	 * Constructor
	 * @param GGAdwordsTypeOperator operator
	 * @param string OperationType
	 * @return GGAdwordsTypeOperation
	 */
	public function __construct($_operator = null,$_OperationType = null)
	{
		parent::__construct(array('operator'=>$_operator,'OperationType'=>$_OperationType));
	}
	/**
	 * Set operator
	 * @param Operator operator
	 * @return Operator
	 */
	public function setOperator($_operator)
	{
		return ($this->operator = GGAdwordsTypeOperator::valueIsValid($_operator)?$_operator:null);
	}
	/**
	 * Get operator
	 * @return GGAdwordsTypeOperator
	 */
	public function getOperator()
	{
		return $this->operator;
	}
	/**
	 * Set OperationType
	 * @param string OperationType
	 * @return string
	 */
	public function setOperationType($_OperationType)
	{
		return ($this->OperationType = $_OperationType);
	}
	/**
	 * Get OperationType
	 * @return string
	 */
	public function getOperationType()
	{
		return $this->OperationType;
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