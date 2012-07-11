<?php
/**
 * Class file for AmazonEc2TypeExportTaskIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeExportTaskIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeExportTaskIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeExportTaskIdType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeExportTaskIdType item
	 * @return AmazonEc2TypeExportTaskIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ExportTaskIdType item
	 * @return ExportTaskIdType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeExportTaskIdType
	 */
	public function getItem()
	{
		return $this->item;
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