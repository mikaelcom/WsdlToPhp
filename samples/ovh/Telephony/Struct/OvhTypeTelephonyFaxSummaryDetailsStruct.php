<?php
/**
 * Class file for OvhTypeTelephonyFaxSummaryDetailsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxSummaryDetailsStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxSummaryDetailsStruct extends OvhWsdlClass
{
	/**
	 * The count
	 * @var int
	 */
	public $count;
	/**
	 * The pages
	 * @var int
	 */
	public $pages;
	/**
	 * The priceWithoutVAT
	 * @var float
	 */
	public $priceWithoutVAT;
	/**
	 * Constructor
	 * @param int count
	 * @param int pages
	 * @param float priceWithoutVAT
	 * @return OvhTypeTelephonyFaxSummaryDetailsStruct
	 */
	public function __construct($_count = null,$_pages = null,$_priceWithoutVAT = null)
	{
		parent::__construct(array('count'=>$_count,'pages'=>$_pages,'priceWithoutVAT'=>$_priceWithoutVAT));
	}
	/**
	 * Set count
	 * @param int count
	 * @return int
	 */
	public function setCount($_count)
	{
		return ($this->count = $_count);
	}
	/**
	 * Get count
	 * @return int
	 */
	public function getCount()
	{
		return $this->count;
	}
	/**
	 * Set pages
	 * @param int pages
	 * @return int
	 */
	public function setPages($_pages)
	{
		return ($this->pages = $_pages);
	}
	/**
	 * Get pages
	 * @return int
	 */
	public function getPages()
	{
		return $this->pages;
	}
	/**
	 * Set priceWithoutVAT
	 * @param float priceWithoutVAT
	 * @return float
	 */
	public function setPriceWithoutVAT($_priceWithoutVAT)
	{
		return ($this->priceWithoutVAT = $_priceWithoutVAT);
	}
	/**
	 * Get priceWithoutVAT
	 * @return float
	 */
	public function getPriceWithoutVAT()
	{
		return $this->priceWithoutVAT;
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