<?php
/**
 * Class file for XiFinancialsTypeListRestatedResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeListRestatedResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeListRestatedResponse extends XiFinancialsWsdlClass
{
	/**
	 * The ListRestatedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeRestated
	 */
	public $ListRestatedResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeRestated ListRestatedResult
	 * @return XiFinancialsTypeListRestatedResponse
	 */
	public function __construct($_ListRestatedResult = null)
	{
		parent::__construct(array('ListRestatedResult'=>$_ListRestatedResult));
	}
	/**
	 * Set ListRestatedResult
	 * @param Restated ListRestatedResult
	 * @return Restated
	 */
	public function setListRestatedResult($_ListRestatedResult)
	{
		return ($this->ListRestatedResult = $_ListRestatedResult);
	}
	/**
	 * Get ListRestatedResult
	 * @return XiFinancialsTypeRestated
	 */
	public function getListRestatedResult()
	{
		return $this->ListRestatedResult;
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