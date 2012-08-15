<?php
/**
 * Class file for BioIDWSTypeDeleteClassResponse
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeDeleteClassResponse
 * @date 15/08/2012
 */
class BioIDWSTypeDeleteClassResponse extends BioIDWSWsdlClass
{
	/**
	 * The DeleteClassResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $DeleteClassResult;
	/**
	 * Constructor
	 * @param boolean DeleteClassResult
	 * @return BioIDWSTypeDeleteClassResponse
	 */
	public function __construct($_DeleteClassResult = null)
	{
		parent::__construct(array('DeleteClassResult'=>$_DeleteClassResult));
	}
	/**
	 * Set DeleteClassResult
	 * @param boolean DeleteClassResult
	 * @return boolean
	 */
	public function setDeleteClassResult($_DeleteClassResult)
	{
		return ($this->DeleteClassResult = $_DeleteClassResult);
	}
	/**
	 * Get DeleteClassResult
	 * @return boolean
	 */
	public function getDeleteClassResult()
	{
		return $this->DeleteClassResult;
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