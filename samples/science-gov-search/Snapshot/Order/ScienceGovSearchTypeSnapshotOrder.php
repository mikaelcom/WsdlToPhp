<?php
/**
 * Class file for ScienceGovSearchTypeSnapshotOrder
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSnapshotOrder
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSnapshotOrder extends ScienceGovSearchWsdlClass
{
	/**
	 * The resultField
	 * @var ScienceGovSearchTypeResultField
	 */
	public $resultField;
	/**
	 * The descending
	 * @var boolean
	 */
	public $descending;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeResultField resultField
	 * @param boolean descending
	 * @return ScienceGovSearchTypeSnapshotOrder
	 */
	public function __construct($_resultField = null,$_descending = null)
	{
		parent::__construct(array('resultField'=>$_resultField,'descending'=>$_descending));
	}
	/**
	 * Set resultField
	 * @param ResultField resultField
	 * @return ResultField
	 */
	public function setResultField($_resultField)
	{
		return ($this->resultField = $_resultField);
	}
	/**
	 * Get resultField
	 * @return ScienceGovSearchTypeResultField
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