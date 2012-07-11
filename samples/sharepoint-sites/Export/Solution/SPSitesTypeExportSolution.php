<?php
/**
 * Class file for SPSitesTypeExportSolution
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeExportSolution
 * @date 06/07/2012
 */
class SPSitesTypeExportSolution extends SPSitesWsdlClass
{
	/**
	 * The solutionFileName
	 * @var string
	 */
	public $solutionFileName;
	/**
	 * The title
	 * @var string
	 */
	public $title;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The fullReuseExportMode
	 * @var boolean
	 */
	public $fullReuseExportMode;
	/**
	 * The includeWebContent
	 * @var boolean
	 */
	public $includeWebContent;
	/**
	 * Constructor
	 * @param string solutionFileName
	 * @param string title
	 * @param string description
	 * @param boolean fullReuseExportMode
	 * @param boolean includeWebContent
	 * @return SPSitesTypeExportSolution
	 */
	public function __construct($_solutionFileName = null,$_title = null,$_description = null,$_fullReuseExportMode = null,$_includeWebContent = null)
	{
		parent::__construct(array('solutionFileName'=>$_solutionFileName,'title'=>$_title,'description'=>$_description,'fullReuseExportMode'=>$_fullReuseExportMode,'includeWebContent'=>$_includeWebContent));
	}
	/**
	 * Set solutionFileName
	 * @param string solutionFileName
	 * @return string
	 */
	public function setSolutionFileName($_solutionFileName)
	{
		return ($this->solutionFileName = $_solutionFileName);
	}
	/**
	 * Get solutionFileName
	 * @return string
	 */
	public function getSolutionFileName()
	{
		return $this->solutionFileName;
	}
	/**
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set fullReuseExportMode
	 * @param boolean fullReuseExportMode
	 * @return boolean
	 */
	public function setFullReuseExportMode($_fullReuseExportMode)
	{
		return ($this->fullReuseExportMode = $_fullReuseExportMode);
	}
	/**
	 * Get fullReuseExportMode
	 * @return boolean
	 */
	public function getFullReuseExportMode()
	{
		return $this->fullReuseExportMode;
	}
	/**
	 * Set includeWebContent
	 * @param boolean includeWebContent
	 * @return boolean
	 */
	public function setIncludeWebContent($_includeWebContent)
	{
		return ($this->includeWebContent = $_includeWebContent);
	}
	/**
	 * Get includeWebContent
	 * @return boolean
	 */
	public function getIncludeWebContent()
	{
		return $this->includeWebContent;
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