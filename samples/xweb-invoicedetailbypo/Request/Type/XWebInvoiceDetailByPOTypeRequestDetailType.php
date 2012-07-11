<?php
/**
 * Class file for XWebInvoiceDetailByPOTypeRequestDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOTypeRequestDetailType
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOTypeRequestDetailType extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * The EDIInclusion
	 * @var EDIInclusion
	 */
	public $EDIInclusion;
	/**
	 * The POInfo
	 * @var XWebInvoiceDetailByPOTypePOInfoType
	 */
	public $POInfo;
	/**
	 * Constructor
	 * @param EDIInclusion EDIInclusion
	 * @param XWebInvoiceDetailByPOTypePOInfoType POInfo
	 * @return XWebInvoiceDetailByPOTypeRequestDetailType
	 */
	public function __construct($_EDIInclusion = null,$_POInfo = null)
	{
		parent::__construct(array('EDIInclusion'=>$_EDIInclusion,'POInfo'=>$_POInfo));
	}
	/**
	 * Set EDIInclusion
	 * @param EDIInclusion EDIInclusion
	 * @return EDIInclusion
	 */
	public function setEDIInclusion($_EDIInclusion)
	{
		return ($this->EDIInclusion = $_EDIInclusion);
	}
	/**
	 * Get EDIInclusion
	 * @return EDIInclusion
	 */
	public function getEDIInclusion()
	{
		return $this->EDIInclusion;
	}
	/**
	 * Set POInfo
	 * @param POInfoType POInfo
	 * @return POInfoType
	 */
	public function setPOInfo($_POInfo)
	{
		return ($this->POInfo = $_POInfo);
	}
	/**
	 * Get POInfo
	 * @return XWebInvoiceDetailByPOTypePOInfoType
	 */
	public function getPOInfo()
	{
		return $this->POInfo;
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