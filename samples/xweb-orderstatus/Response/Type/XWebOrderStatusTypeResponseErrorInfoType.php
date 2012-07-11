<?php
/**
 * Class file for XWebOrderStatusTypeResponseErrorInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeResponseErrorInfoType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeResponseErrorInfoType extends XWebOrderStatusWsdlClass
{
	/**
	 * The ErrorInfoIDQual
	 * @var ErrorInfoIDQual
	 */
	public $ErrorInfoIDQual;
	/**
	 * The ErrorID
	 * @var ErrorID
	 */
	public $ErrorID;
	/**
	 * The ErrorDesc
	 * @var ErrorDesc
	 */
	public $ErrorDesc;
	/**
	 * Constructor
	 * @param ErrorInfoIDQual ErrorInfoIDQual
	 * @param ErrorID ErrorID
	 * @param ErrorDesc ErrorDesc
	 * @return XWebOrderStatusTypeResponseErrorInfoType
	 */
	public function __construct($_ErrorInfoIDQual = null,$_ErrorID = null,$_ErrorDesc = null)
	{
		parent::__construct(array('ErrorInfoIDQual'=>$_ErrorInfoIDQual,'ErrorID'=>$_ErrorID,'ErrorDesc'=>$_ErrorDesc));
	}
	/**
	 * Set ErrorInfoIDQual
	 * @param ErrorInfoIDQual ErrorInfoIDQual
	 * @return ErrorInfoIDQual
	 */
	public function setErrorInfoIDQual($_ErrorInfoIDQual)
	{
		return ($this->ErrorInfoIDQual = $_ErrorInfoIDQual);
	}
	/**
	 * Get ErrorInfoIDQual
	 * @return ErrorInfoIDQual
	 */
	public function getErrorInfoIDQual()
	{
		return $this->ErrorInfoIDQual;
	}
	/**
	 * Set ErrorID
	 * @param ErrorID ErrorID
	 * @return ErrorID
	 */
	public function setErrorID($_ErrorID)
	{
		return ($this->ErrorID = $_ErrorID);
	}
	/**
	 * Get ErrorID
	 * @return ErrorID
	 */
	public function getErrorID()
	{
		return $this->ErrorID;
	}
	/**
	 * Set ErrorDesc
	 * @param ErrorDesc ErrorDesc
	 * @return ErrorDesc
	 */
	public function setErrorDesc($_ErrorDesc)
	{
		return ($this->ErrorDesc = $_ErrorDesc);
	}
	/**
	 * Get ErrorDesc
	 * @return ErrorDesc
	 */
	public function getErrorDesc()
	{
		return $this->ErrorDesc;
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