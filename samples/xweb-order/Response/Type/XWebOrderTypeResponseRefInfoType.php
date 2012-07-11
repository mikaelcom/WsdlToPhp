<?php
/**
 * Class file for XWebOrderTypeResponseRefInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeResponseRefInfoType
 * @date 09/07/2012
 */
class XWebOrderTypeResponseRefInfoType extends XWebOrderWsdlClass
{
	/**
	 * The RefIDQual2
	 * @var RefIDQual2
	 */
	public $RefIDQual2;
	/**
	 * The RefID2
	 * @var RefID2
	 */
	public $RefID2;
	/**
	 * Constructor
	 * @param RefIDQual2 RefIDQual2
	 * @param RefID2 RefID2
	 * @return XWebOrderTypeResponseRefInfoType
	 */
	public function __construct($_RefIDQual2 = null,$_RefID2 = null)
	{
		parent::__construct(array('RefIDQual2'=>$_RefIDQual2,'RefID2'=>$_RefID2));
	}
	/**
	 * Set RefIDQual2
	 * @param RefIDQual2 RefIDQual2
	 * @return RefIDQual2
	 */
	public function setRefIDQual2($_RefIDQual2)
	{
		return ($this->RefIDQual2 = $_RefIDQual2);
	}
	/**
	 * Get RefIDQual2
	 * @return RefIDQual2
	 */
	public function getRefIDQual2()
	{
		return $this->RefIDQual2;
	}
	/**
	 * Set RefID2
	 * @param RefID2 RefID2
	 * @return RefID2
	 */
	public function setRefID2($_RefID2)
	{
		return ($this->RefID2 = $_RefID2);
	}
	/**
	 * Get RefID2
	 * @return RefID2
	 */
	public function getRefID2()
	{
		return $this->RefID2;
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