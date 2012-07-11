<?php
/**
 * Class file for XiFinancialsTypeListFinancialsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeListFinancialsResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeListFinancialsResponse extends XiFinancialsWsdlClass
{
	/**
	 * The ListFinancialsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfDescription
	 */
	public $ListFinancialsResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfDescription ListFinancialsResult
	 * @return XiFinancialsTypeListFinancialsResponse
	 */
	public function __construct($_ListFinancialsResult = null)
	{
		parent::__construct(array('ListFinancialsResult'=>new XiFinancialsTypeArrayOfDescription($_ListFinancialsResult)));
	}
	/**
	 * Set ListFinancialsResult
	 * @param ArrayOfDescription ListFinancialsResult
	 * @return ArrayOfDescription
	 */
	public function setListFinancialsResult($_ListFinancialsResult)
	{
		return ($this->ListFinancialsResult = $_ListFinancialsResult);
	}
	/**
	 * Get ListFinancialsResult
	 * @return XiFinancialsTypeArrayOfDescription
	 */
	public function getListFinancialsResult()
	{
		return $this->ListFinancialsResult;
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