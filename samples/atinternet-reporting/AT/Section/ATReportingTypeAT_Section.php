<?php
/**
 * Class file for ATReportingTypeAT_Section
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeAT_Section
 * @date 03/07/2012
 */
class ATReportingTypeAT_Section extends ATReportingWsdlClass
{
	/**
	 * The id
	 * Meta informations :
	 * 	- use : required
	 * @var int
	 */
	public $id;
	/**
	 * The label
	 * @var string
	 */
	public $label;
	/**
	 * Constructor
	 * @param int id
	 * @param string label
	 * @return ATReportingTypeAT_Section
	 */
	public function __construct($_id = null,$_label = null)
	{
		parent::__construct(array('id'=>$_id,'label'=>$_label));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set label
	 * @param string label
	 * @return string
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Get label
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
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