<?php
/**
 * Class file for OvhTypeTelephonyReversmentsSummationNumbersStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyReversmentsSummationNumbersStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyReversmentsSummationNumbersStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The list
	 * @var OvhTypeMyArrayOfTelephonyReversmentsSummationStructType
	 */
	public $list;
	/**
	 * Constructor
	 * @param string number
	 * @param OvhTypeMyArrayOfTelephonyReversmentsSummationStructType list
	 * @return OvhTypeTelephonyReversmentsSummationNumbersStruct
	 */
	public function __construct($_number = null,$_list = null)
	{
		parent::__construct(array('number'=>$_number,'list'=>new OvhTypeMyArrayOfTelephonyReversmentsSummationStructType($_list)));
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set list
	 * @param MyArrayOfTelephonyReversmentsSummationStructType list
	 * @return MyArrayOfTelephonyReversmentsSummationStructType
	 */
	public function setList($_list)
	{
		return ($this->list = $_list);
	}
	/**
	 * Get list
	 * @return OvhTypeMyArrayOfTelephonyReversmentsSummationStructType
	 */
	public function getList()
	{
		return $this->list;
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