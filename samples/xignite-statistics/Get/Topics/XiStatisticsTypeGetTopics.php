<?php
/**
 * Class file for XiStatisticsTypeGetTopics
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopics
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopics extends XiStatisticsWsdlClass
{
	/**
	 * The CategoryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CategoryCode;
	/**
	 * Constructor
	 * @param string CategoryCode
	 * @return XiStatisticsTypeGetTopics
	 */
	public function __construct($_CategoryCode = null)
	{
		parent::__construct(array('CategoryCode'=>$_CategoryCode));
	}
	/**
	 * Set CategoryCode
	 * @param string CategoryCode
	 * @return string
	 */
	public function setCategoryCode($_CategoryCode)
	{
		return ($this->CategoryCode = $_CategoryCode);
	}
	/**
	 * Get CategoryCode
	 * @return string
	 */
	public function getCategoryCode()
	{
		return $this->CategoryCode;
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