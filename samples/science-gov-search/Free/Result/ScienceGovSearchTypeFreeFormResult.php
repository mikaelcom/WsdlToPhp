<?php
/**
 * Class file for ScienceGovSearchTypeFreeFormResult
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeFreeFormResult
 * @date 13/10/2012
 */
class ScienceGovSearchTypeFreeFormResult extends ScienceGovSearchWsdlClass
{
	/**
	 * The resultField
	 * @var ScienceGovSearchTypeResultField
	 */
	public $resultField;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeResultField resultField
	 * @return ScienceGovSearchTypeFreeFormResult
	 */
	public function __construct($_resultField = null)
	{
		parent::__construct(array('resultField'=>$_resultField));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>