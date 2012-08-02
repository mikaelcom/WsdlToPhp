<?php
/**
 * Class file for BarCodeSoftTypeGS1128Response
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeGS1128Response
 * @date 02/08/2012
 */
class BarCodeSoftTypeGS1128Response extends BarCodeSoftWsdlClass
{
	/**
	 * The GS1128Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $GS1128Result;
	/**
	 * Constructor
	 * @param base64Binary GS1128Result
	 * @return BarCodeSoftTypeGS1128Response
	 */
	public function __construct($_GS1128Result = null)
	{
		parent::__construct(array('GS1128Result'=>$_GS1128Result));
	}
	/**
	 * Set GS1128Result
	 * @param base64Binary GS1128Result
	 * @return base64Binary
	 */
	public function setGS1128Result($_GS1128Result)
	{
		return ($this->GS1128Result = $_GS1128Result);
	}
	/**
	 * Get GS1128Result
	 * @return base64Binary
	 */
	public function getGS1128Result()
	{
		return $this->GS1128Result;
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