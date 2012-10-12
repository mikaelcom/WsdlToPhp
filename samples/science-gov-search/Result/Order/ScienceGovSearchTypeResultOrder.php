<?php
/**
 * Class file for ScienceGovSearchTypeResultOrder
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeResultOrder
 * @date 13/10/2012
 */
class ScienceGovSearchTypeResultOrder extends ScienceGovSearchWsdlClass
{
	/**
	 * The resultField
	 * @var ScienceGovSearchTypeResultOrderFieldType
	 */
	public $resultField;
	/**
	 * The descending
	 * @var boolean
	 */
	public $descending;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeResultOrderFieldType resultField
	 * @param boolean descending
	 * @return ScienceGovSearchTypeResultOrder
	 */
	public function __construct($_resultField = null,$_descending = null)
	{
		parent::__construct(array('resultField'=>$_resultField,'descending'=>$_descending));
	}
	/**
	 * Set resultField
	 * @param ResultOrderFieldType resultField
	 * @return ResultOrderFieldType
	 */
	public function setResultField($_resultField)
	{
		return ($this->resultField = ScienceGovSearchTypeResultOrderFieldType::valueIsValid($_resultField)?$_resultField:null);
	}
	/**
	 * Get resultField
	 * @return ScienceGovSearchTypeResultOrderFieldType
	 */
	public function getResultField()
	{
		return $this->resultField;
	}
	/**
	 * Set descending
	 * @param boolean descending
	 * @return boolean
	 */
	public function setDescending($_descending)
	{
		return ($this->descending = $_descending);
	}
	/**
	 * Get descending
	 * @return boolean
	 */
	public function getDescending()
	{
		return $this->descending;
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