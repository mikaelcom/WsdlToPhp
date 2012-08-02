<?php
/**
 * Class file for BarCodeSoftTypeDatamatrixResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeDatamatrixResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeDatamatrixResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The DatamatrixResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $DatamatrixResult;
	/**
	 * Constructor
	 * @param base64Binary DatamatrixResult
	 * @return BarCodeSoftTypeDatamatrixResponse
	 */
	public function __construct($_DatamatrixResult = null)
	{
		parent::__construct(array('DatamatrixResult'=>$_DatamatrixResult));
	}
	/**
	 * Set DatamatrixResult
	 * @param base64Binary DatamatrixResult
	 * @return base64Binary
	 */
	public function setDatamatrixResult($_DatamatrixResult)
	{
		return ($this->DatamatrixResult = $_DatamatrixResult);
	}
	/**
	 * Get DatamatrixResult
	 * @return base64Binary
	 */
	public function getDatamatrixResult()
	{
		return $this->DatamatrixResult;
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