<?php
/**
 * Class file for SPSitesTypeGetSiteTemplatesResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeGetSiteTemplatesResponse
 * @date 06/07/2012
 */
class SPSitesTypeGetSiteTemplatesResponse extends SPSitesWsdlClass
{
	/**
	 * The GetSiteTemplatesResult
	 * @var unsignedInt
	 */
	public $GetSiteTemplatesResult;
	/**
	 * The TemplateList
	 * @var SPSitesTypeArrayOfTemplate
	 */
	public $TemplateList;
	/**
	 * Constructor
	 * @param unsignedInt GetSiteTemplatesResult
	 * @param SPSitesTypeArrayOfTemplate TemplateList
	 * @return SPSitesTypeGetSiteTemplatesResponse
	 */
	public function __construct($_GetSiteTemplatesResult = null,$_TemplateList = null)
	{
		parent::__construct(array('GetSiteTemplatesResult'=>$_GetSiteTemplatesResult,'TemplateList'=>new SPSitesTypeArrayOfTemplate($_TemplateList)));
	}
	/**
	 * Set GetSiteTemplatesResult
	 * @param unsignedInt GetSiteTemplatesResult
	 * @return unsignedInt
	 */
	public function setGetSiteTemplatesResult($_GetSiteTemplatesResult)
	{
		return ($this->GetSiteTemplatesResult = $_GetSiteTemplatesResult);
	}
	/**
	 * Get GetSiteTemplatesResult
	 * @return unsignedInt
	 */
	public function getGetSiteTemplatesResult()
	{
		return $this->GetSiteTemplatesResult;
	}
	/**
	 * Set TemplateList
	 * @param ArrayOfTemplate TemplateList
	 * @return ArrayOfTemplate
	 */
	public function setTemplateList($_TemplateList)
	{
		return ($this->TemplateList = $_TemplateList);
	}
	/**
	 * Get TemplateList
	 * @return SPSitesTypeArrayOfTemplate
	 */
	public function getTemplateList()
	{
		return $this->TemplateList;
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