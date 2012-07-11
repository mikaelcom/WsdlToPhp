<?php
/**
 * Class file for SPImagingTypeGetItemsByIds
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeGetItemsByIds
 * @date 06/07/2012
 */
class SPImagingTypeGetItemsByIds extends SPImagingWsdlClass
{
	/**
	 * The strListName
	 * @var string
	 */
	public $strListName;
	/**
	 * The ids
	 * @var SPImagingTypeArrayOfUnsignedInt
	 */
	public $ids;
	/**
	 * Constructor
	 * @param string strListName
	 * @param SPImagingTypeArrayOfUnsignedInt ids
	 * @return SPImagingTypeGetItemsByIds
	 */
	public function __construct($_strListName = null,$_ids = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'ids'=>new SPImagingTypeArrayOfUnsignedInt($_ids)));
	}
	/**
	 * Set strListName
	 * @param string strListName
	 * @return string
	 */
	public function setStrListName($_strListName)
	{
		return ($this->strListName = $_strListName);
	}
	/**
	 * Get strListName
	 * @return string
	 */
	public function getStrListName()
	{
		return $this->strListName;
	}
	/**
	 * Set ids
	 * @param ArrayOfUnsignedInt ids
	 * @return ArrayOfUnsignedInt
	 */
	public function setIds($_ids)
	{
		return ($this->ids = $_ids);
	}
	/**
	 * Get ids
	 * @return SPImagingTypeArrayOfUnsignedInt
	 */
	public function getIds()
	{
		return $this->ids;
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