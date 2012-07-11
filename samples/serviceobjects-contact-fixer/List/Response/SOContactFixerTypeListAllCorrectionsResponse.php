<?php
/**
 * Class file for SOContactFixerTypeListAllCorrectionsResponse
 * @date 08/07/2012
 */
/**
 * Class SOContactFixerTypeListAllCorrectionsResponse
 * @date 08/07/2012
 */
class SOContactFixerTypeListAllCorrectionsResponse extends SOContactFixerWsdlClass
{
	/**
	 * The ListAllCorrectionsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactFixerTypeCorrectionList
	 */
	public $ListAllCorrectionsResult;
	/**
	 * Constructor
	 * @param SOContactFixerTypeCorrectionList ListAllCorrectionsResult
	 * @return SOContactFixerTypeListAllCorrectionsResponse
	 */
	public function __construct($_ListAllCorrectionsResult = null)
	{
		parent::__construct(array('ListAllCorrectionsResult'=>$_ListAllCorrectionsResult));
	}
	/**
	 * Set ListAllCorrectionsResult
	 * @param CorrectionList ListAllCorrectionsResult
	 * @return CorrectionList
	 */
	public function setListAllCorrectionsResult($_ListAllCorrectionsResult)
	{
		return ($this->ListAllCorrectionsResult = $_ListAllCorrectionsResult);
	}
	/**
	 * Get ListAllCorrectionsResult
	 * @return SOContactFixerTypeCorrectionList
	 */
	public function getListAllCorrectionsResult()
	{
		return $this->ListAllCorrectionsResult;
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