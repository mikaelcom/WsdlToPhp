<?php
/**
 * Class file for XWebOrderTypeRequestRefNbrsType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeRequestRefNbrsType
 * @date 09/07/2012
 */
class XWebOrderTypeRequestRefNbrsType extends XWebOrderWsdlClass
{
	/**
	 * The RefIDQual
	 * @var RefIDQual
	 */
	public $RefIDQual;
	/**
	 * The RefID
	 * @var RefID
	 */
	public $RefID;
	/**
	 * Constructor
	 * @param RefIDQual RefIDQual
	 * @param RefID RefID
	 * @return XWebOrderTypeRequestRefNbrsType
	 */
	public function __construct($_RefIDQual = null,$_RefID = null)
	{
		parent::__construct(array('RefIDQual'=>$_RefIDQual,'RefID'=>$_RefID));
	}
	/**
	 * Set RefIDQual
	 * @param RefIDQual RefIDQual
	 * @return RefIDQual
	 */
	public function setRefIDQual($_RefIDQual)
	{
		return ($this->RefIDQual = $_RefIDQual);
	}
	/**
	 * Get RefIDQual
	 * @return RefIDQual
	 */
	public function getRefIDQual()
	{
		return $this->RefIDQual;
	}
	/**
	 * Set RefID
	 * @param RefID RefID
	 * @return RefID
	 */
	public function setRefID($_RefID)
	{
		return ($this->RefID = $_RefID);
	}
	/**
	 * Get RefID
	 * @return RefID
	 */
	public function getRefID()
	{
		return $this->RefID;
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