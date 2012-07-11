<?php
/**
 * Class file for XiBondMasterTypeGetCapitalStructureResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeGetCapitalStructureResponse
 * @date 08/07/2012
 */
class XiBondMasterTypeGetCapitalStructureResponse extends XiBondMasterWsdlClass
{
	/**
	 * The GetCapitalStructureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeCapitalStructureComposite
	 */
	public $GetCapitalStructureResult;
	/**
	 * Constructor
	 * @param XiBondMasterTypeCapitalStructureComposite GetCapitalStructureResult
	 * @return XiBondMasterTypeGetCapitalStructureResponse
	 */
	public function __construct($_GetCapitalStructureResult = null)
	{
		parent::__construct(array('GetCapitalStructureResult'=>$_GetCapitalStructureResult));
	}
	/**
	 * Set GetCapitalStructureResult
	 * @param CapitalStructureComposite GetCapitalStructureResult
	 * @return CapitalStructureComposite
	 */
	public function setGetCapitalStructureResult($_GetCapitalStructureResult)
	{
		return ($this->GetCapitalStructureResult = $_GetCapitalStructureResult);
	}
	/**
	 * Get GetCapitalStructureResult
	 * @return XiBondMasterTypeCapitalStructureComposite
	 */
	public function getGetCapitalStructureResult()
	{
		return $this->GetCapitalStructureResult;
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