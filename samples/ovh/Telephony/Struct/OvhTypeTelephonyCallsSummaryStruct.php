<?php
/**
 * Class file for OvhTypeTelephonyCallsSummaryStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyCallsSummaryStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyCallsSummaryStruct extends OvhWsdlClass
{
	/**
	 * The pricePlan
	 * @var OvhTypeTelephonyCallsSummaryDetailsStruct
	 */
	public $pricePlan;
	/**
	 * The outPlan
	 * @var OvhTypeTelephonyCallsSummaryDetailsStruct
	 */
	public $outPlan;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyCallsSummaryDetailsStruct pricePlan
	 * @param OvhTypeTelephonyCallsSummaryDetailsStruct outPlan
	 * @return OvhTypeTelephonyCallsSummaryStruct
	 */
	public function __construct($_pricePlan = null,$_outPlan = null)
	{
		parent::__construct(array('pricePlan'=>$_pricePlan,'outPlan'=>$_outPlan));
	}
	/**
	 * Set pricePlan
	 * @param telephonyCallsSummaryDetailsStruct pricePlan
	 * @return telephonyCallsSummaryDetailsStruct
	 */
	public function setPricePlan($_pricePlan)
	{
		return ($this->pricePlan = $_pricePlan);
	}
	/**
	 * Get pricePlan
	 * @return OvhTypetelephonyCallsSummaryDetailsStruct
	 */
	public function getPricePlan()
	{
		return $this->pricePlan;
	}
	/**
	 * Set outPlan
	 * @param telephonyCallsSummaryDetailsStruct outPlan
	 * @return telephonyCallsSummaryDetailsStruct
	 */
	public function setOutPlan($_outPlan)
	{
		return ($this->outPlan = $_outPlan);
	}
	/**
	 * Get outPlan
	 * @return OvhTypetelephonyCallsSummaryDetailsStruct
	 */
	public function getOutPlan()
	{
		return $this->outPlan;
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