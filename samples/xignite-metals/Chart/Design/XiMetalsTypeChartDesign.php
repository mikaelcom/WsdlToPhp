<?php
/**
 * Class file for XiMetalsTypeChartDesign
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeChartDesign
 * @date 08/07/2012
 */
class XiMetalsTypeChartDesign extends XiMetalsTypeCommon
{
	/**
	 * The Secure
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Secure;
	/**
	 * The TextTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextTitle;
	/**
	 * The TextHeader
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextHeader;
	/**
	 * The TextFooter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextFooter;
	/**
	 * The TextPriceLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextPriceLine;
	/**
	 * The TextVolumeBar
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextVolumeBar;
	/**
	 * The TextHighest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextHighest;
	/**
	 * The TextLowest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextLowest;
	/**
	 * The TextOpen
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextOpen;
	/**
	 * The TextClose
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextClose;
	/**
	 * The TextUp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextUp;
	/**
	 * The TextDown
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextDown;
	/**
	 * The ColorBackground
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorBackground;
	/**
	 * The ColorBackWall
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorBackWall;
	/**
	 * The ColorVolumeBackWall
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorVolumeBackWall;
	/**
	 * The ShowVolumeBackWall
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowVolumeBackWall;
	/**
	 * The ColorHighlight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorHighlight;
	/**
	 * The ColorPriceLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorPriceLine;
	/**
	 * The ColorVolumeBar
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorVolumeBar;
	/**
	 * The ColorVolumeBarFill
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorVolumeBarFill;
	/**
	 * The ColorHigh
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorHigh;
	/**
	 * The ColorStickUp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorStickUp;
	/**
	 * The ColorStickLow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorStickLow;
	/**
	 * The ColorConstant
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorConstant;
	/**
	 * The ColorLow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorLow;
	/**
	 * The ColorPoint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorPoint;
	/**
	 * The ColorTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorTitle;
	/**
	 * The ColorFooter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorFooter;
	/**
	 * The ColorHeader
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorHeader;
	/**
	 * The ColorAxis
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorAxis;
	/**
	 * The ColorGrid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorGrid;
	/**
	 * The ColorFonts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorFonts;
	/**
	 * The ColorStripe
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorStripe;
	/**
	 * The ColorOpen
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorOpen;
	/**
	 * The ColorClose
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorClose;
	/**
	 * The ColorVerticalGrid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorVerticalGrid;
	/**
	 * The ColorHorizontalGrid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorHorizontalGrid;
	/**
	 * The ColorUp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorUp;
	/**
	 * The ColorDown
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorDown;
	/**
	 * The ColorHighLowLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorHighLowLine;
	/**
	 * The ColorCollection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorCollection;
	/**
	 * The GridHorizontalStyle
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeLinePattern
	 */
	public $GridHorizontalStyle;
	/**
	 * The GridVerticalStyle
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeLinePattern
	 */
	public $GridVerticalStyle;
	/**
	 * The GridHorizontalWidth
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $GridHorizontalWidth;
	/**
	 * The GridVerticalWidth
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $GridVerticalWidth;
	/**
	 * The ColorFrame
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorFrame;
	/**
	 * The FrameBorder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FrameBorder;
	/**
	 * The FormatPriceLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FormatPriceLine;
	/**
	 * The FormatVolume
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FormatVolume;
	/**
	 * The FormatDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FormatDate;
	/**
	 * The GradeBackground
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $GradeBackground;
	/**
	 * The GradeBackwall
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $GradeBackwall;
	/**
	 * The WaterMark
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WaterMark;
	/**
	 * The WaterMarkTopMargin
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $WaterMarkTopMargin;
	/**
	 * The WaterMarkLeftMargin
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $WaterMarkLeftMargin;
	/**
	 * The WaterMarkTransparency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $WaterMarkTransparency;
	/**
	 * The PointSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var float
	 */
	public $PointSize;
	/**
	 * The StackVariationLabels
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $StackVariationLabels;
	/**
	 * The ShowAxisLabelInLegend
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowAxisLabelInLegend;
	/**
	 * The LineWidth
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $LineWidth;
	/**
	 * The SplitPercent
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $SplitPercent;
	/**
	 * The ShowHigh
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowHigh;
	/**
	 * The ShowLow
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowLow;
	/**
	 * The ShowOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowOpen;
	/**
	 * The ShowClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowClose;
	/**
	 * The ShowVolume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowVolume;
	/**
	 * The ShowUpVariation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowUpVariation;
	/**
	 * The ShowDownVariation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowDownVariation;
	/**
	 * The ShowLegend
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowLegend;
	/**
	 * The VariationYear
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $VariationYear;
	/**
	 * The VolumeDivider
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $VolumeDivider;
	/**
	 * The VolumeTextOffset
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $VolumeTextOffset;
	/**
	 * The PriceTextOffset
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $PriceTextOffset;
	/**
	 * The FrameType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeImageFrameType
	 */
	public $FrameType;
	/**
	 * The Projection
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypePredefinedProjection
	 */
	public $Projection;
	/**
	 * The MarginTop
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MarginTop;
	/**
	 * The MarginBottom
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MarginBottom;
	/**
	 * The MarginLeft
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MarginLeft;
	/**
	 * The MarginRight
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MarginRight;
	/**
	 * The FontFamily
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FontFamily;
	/**
	 * The FontSizeHeader
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $FontSizeHeader;
	/**
	 * The FontSizeFooter
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $FontSizeFooter;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Height;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Width;
	/**
	 * The ZoomPercent
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ZoomPercent;
	/**
	 * The LegendBox
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $LegendBox;
	/**
	 * The ColorLegendBackground
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorLegendBackground;
	/**
	 * The ColorLegendBorder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColorLegendBorder;
	/**
	 * The LegendVerticalPosition
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $LegendVerticalPosition;
	/**
	 * The LegendHorizontalPosition
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $LegendHorizontalPosition;
	/**
	 * The Reload
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Reload;
	/**
	 * The ShowPriceChartLabels
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShowPriceChartLabels;
	/**
	 * The TickPrecision
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeTickPeriod
	 */
	public $TickPrecision;
	/**
	 * The TickPeriods
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TickPeriods;
	/**
	 * The WaterMarkHorizontalAlign
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeHorzAlign
	 */
	public $WaterMarkHorizontalAlign;
	/**
	 * The LightScheme
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypePredefinedLightModel
	 */
	public $LightScheme;
	/**
	 * The FontSizeLegend
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $FontSizeLegend;
	/**
	 * The FontSizeAxes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $FontSizeAxes;
	/**
	 * The FontSizeTitle
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $FontSizeTitle;
	/**
	 * The DaysForHourDisplay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DaysForHourDisplay;
	/**
	 * The DaysForDayDisplay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DaysForDayDisplay;
	/**
	 * The DaysForWeekDisplay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DaysForWeekDisplay;
	/**
	 * The DaysForBiWeeklyDisplay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DaysForBiWeeklyDisplay;
	/**
	 * The DaysForMonthDisplay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DaysForMonthDisplay;
	/**
	 * The DaysForQuarterDisplay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DaysForQuarterDisplay;
	/**
	 * The DaysForSemiAnnualDisplay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DaysForSemiAnnualDisplay;
	/**
	 * The DaysForAnnualDisplay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DaysForAnnualDisplay;
	/**
	 * The DaysForBiAnnualDisplay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DaysForBiAnnualDisplay;
	/**
	 * The DaysForPentaAnnualDisplay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DaysForPentaAnnualDisplay;
	/**
	 * Constructor
	 * @param boolean Secure
	 * @param string TextTitle
	 * @param string TextHeader
	 * @param string TextFooter
	 * @param string TextPriceLine
	 * @param string TextVolumeBar
	 * @param string TextHighest
	 * @param string TextLowest
	 * @param string TextOpen
	 * @param string TextClose
	 * @param string TextUp
	 * @param string TextDown
	 * @param string ColorBackground
	 * @param string ColorBackWall
	 * @param string ColorVolumeBackWall
	 * @param boolean ShowVolumeBackWall
	 * @param string ColorHighlight
	 * @param string ColorPriceLine
	 * @param string ColorVolumeBar
	 * @param string ColorVolumeBarFill
	 * @param string ColorHigh
	 * @param string ColorStickUp
	 * @param string ColorStickLow
	 * @param string ColorConstant
	 * @param string ColorLow
	 * @param string ColorPoint
	 * @param string ColorTitle
	 * @param string ColorFooter
	 * @param string ColorHeader
	 * @param string ColorAxis
	 * @param string ColorGrid
	 * @param string ColorFonts
	 * @param string ColorStripe
	 * @param string ColorOpen
	 * @param string ColorClose
	 * @param string ColorVerticalGrid
	 * @param string ColorHorizontalGrid
	 * @param string ColorUp
	 * @param string ColorDown
	 * @param string ColorHighLowLine
	 * @param string ColorCollection
	 * @param XiMetalsTypeLinePattern GridHorizontalStyle
	 * @param XiMetalsTypeLinePattern GridVerticalStyle
	 * @param int GridHorizontalWidth
	 * @param int GridVerticalWidth
	 * @param string ColorFrame
	 * @param string FrameBorder
	 * @param string FormatPriceLine
	 * @param string FormatVolume
	 * @param string FormatDate
	 * @param boolean GradeBackground
	 * @param boolean GradeBackwall
	 * @param string WaterMark
	 * @param int WaterMarkTopMargin
	 * @param int WaterMarkLeftMargin
	 * @param int WaterMarkTransparency
	 * @param float PointSize
	 * @param boolean StackVariationLabels
	 * @param boolean ShowAxisLabelInLegend
	 * @param int LineWidth
	 * @param int SplitPercent
	 * @param boolean ShowHigh
	 * @param boolean ShowLow
	 * @param boolean ShowOpen
	 * @param boolean ShowClose
	 * @param boolean ShowVolume
	 * @param boolean ShowUpVariation
	 * @param boolean ShowDownVariation
	 * @param boolean ShowLegend
	 * @param int VariationYear
	 * @param int VolumeDivider
	 * @param int VolumeTextOffset
	 * @param int PriceTextOffset
	 * @param XiMetalsTypeImageFrameType FrameType
	 * @param XiMetalsTypePredefinedProjection Projection
	 * @param int MarginTop
	 * @param int MarginBottom
	 * @param int MarginLeft
	 * @param int MarginRight
	 * @param string FontFamily
	 * @param int FontSizeHeader
	 * @param int FontSizeFooter
	 * @param double Height
	 * @param double Width
	 * @param int ZoomPercent
	 * @param boolean LegendBox
	 * @param string ColorLegendBackground
	 * @param string ColorLegendBorder
	 * @param int LegendVerticalPosition
	 * @param int LegendHorizontalPosition
	 * @param boolean Reload
	 * @param boolean ShowPriceChartLabels
	 * @param XiMetalsTypeTickPeriod TickPrecision
	 * @param int TickPeriods
	 * @param XiMetalsTypeHorzAlign WaterMarkHorizontalAlign
	 * @param XiMetalsTypePredefinedLightModel LightScheme
	 * @param int FontSizeLegend
	 * @param int FontSizeAxes
	 * @param int FontSizeTitle
	 * @param int DaysForHourDisplay
	 * @param int DaysForDayDisplay
	 * @param int DaysForWeekDisplay
	 * @param int DaysForBiWeeklyDisplay
	 * @param int DaysForMonthDisplay
	 * @param int DaysForQuarterDisplay
	 * @param int DaysForSemiAnnualDisplay
	 * @param int DaysForAnnualDisplay
	 * @param int DaysForBiAnnualDisplay
	 * @param int DaysForPentaAnnualDisplay
	 * @return XiMetalsTypeChartDesign
	 */
	public function __construct($_Secure,$_TextTitle = null,$_TextHeader = null,$_TextFooter = null,$_TextPriceLine = null,$_TextVolumeBar = null,$_TextHighest = null,$_TextLowest = null,$_TextOpen = null,$_TextClose = null,$_TextUp = null,$_TextDown = null,$_ColorBackground = null,$_ColorBackWall = null,$_ColorVolumeBackWall = null,$_ShowVolumeBackWall,$_ColorHighlight = null,$_ColorPriceLine = null,$_ColorVolumeBar = null,$_ColorVolumeBarFill = null,$_ColorHigh = null,$_ColorStickUp = null,$_ColorStickLow = null,$_ColorConstant = null,$_ColorLow = null,$_ColorPoint = null,$_ColorTitle = null,$_ColorFooter = null,$_ColorHeader = null,$_ColorAxis = null,$_ColorGrid = null,$_ColorFonts = null,$_ColorStripe = null,$_ColorOpen = null,$_ColorClose = null,$_ColorVerticalGrid = null,$_ColorHorizontalGrid = null,$_ColorUp = null,$_ColorDown = null,$_ColorHighLowLine = null,$_ColorCollection = null,$_GridHorizontalStyle,$_GridVerticalStyle,$_GridHorizontalWidth,$_GridVerticalWidth,$_ColorFrame = null,$_FrameBorder = null,$_FormatPriceLine = null,$_FormatVolume = null,$_FormatDate = null,$_GradeBackground,$_GradeBackwall,$_WaterMark = null,$_WaterMarkTopMargin,$_WaterMarkLeftMargin,$_WaterMarkTransparency,$_PointSize,$_StackVariationLabels,$_ShowAxisLabelInLegend,$_LineWidth,$_SplitPercent,$_ShowHigh,$_ShowLow,$_ShowOpen,$_ShowClose,$_ShowVolume,$_ShowUpVariation,$_ShowDownVariation,$_ShowLegend,$_VariationYear,$_VolumeDivider,$_VolumeTextOffset,$_PriceTextOffset,$_FrameType,$_Projection,$_MarginTop,$_MarginBottom,$_MarginLeft,$_MarginRight,$_FontFamily = null,$_FontSizeHeader,$_FontSizeFooter,$_Height,$_Width,$_ZoomPercent,$_LegendBox,$_ColorLegendBackground = null,$_ColorLegendBorder = null,$_LegendVerticalPosition,$_LegendHorizontalPosition,$_Reload,$_ShowPriceChartLabels,$_TickPrecision,$_TickPeriods,$_WaterMarkHorizontalAlign,$_LightScheme,$_FontSizeLegend,$_FontSizeAxes,$_FontSizeTitle,$_DaysForHourDisplay,$_DaysForDayDisplay,$_DaysForWeekDisplay,$_DaysForBiWeeklyDisplay,$_DaysForMonthDisplay,$_DaysForQuarterDisplay,$_DaysForSemiAnnualDisplay,$_DaysForAnnualDisplay,$_DaysForBiAnnualDisplay,$_DaysForPentaAnnualDisplay)
	{
		XiMetalsWsdlClass::__construct(array('Secure'=>$_Secure,'TextTitle'=>$_TextTitle,'TextHeader'=>$_TextHeader,'TextFooter'=>$_TextFooter,'TextPriceLine'=>$_TextPriceLine,'TextVolumeBar'=>$_TextVolumeBar,'TextHighest'=>$_TextHighest,'TextLowest'=>$_TextLowest,'TextOpen'=>$_TextOpen,'TextClose'=>$_TextClose,'TextUp'=>$_TextUp,'TextDown'=>$_TextDown,'ColorBackground'=>$_ColorBackground,'ColorBackWall'=>$_ColorBackWall,'ColorVolumeBackWall'=>$_ColorVolumeBackWall,'ShowVolumeBackWall'=>$_ShowVolumeBackWall,'ColorHighlight'=>$_ColorHighlight,'ColorPriceLine'=>$_ColorPriceLine,'ColorVolumeBar'=>$_ColorVolumeBar,'ColorVolumeBarFill'=>$_ColorVolumeBarFill,'ColorHigh'=>$_ColorHigh,'ColorStickUp'=>$_ColorStickUp,'ColorStickLow'=>$_ColorStickLow,'ColorConstant'=>$_ColorConstant,'ColorLow'=>$_ColorLow,'ColorPoint'=>$_ColorPoint,'ColorTitle'=>$_ColorTitle,'ColorFooter'=>$_ColorFooter,'ColorHeader'=>$_ColorHeader,'ColorAxis'=>$_ColorAxis,'ColorGrid'=>$_ColorGrid,'ColorFonts'=>$_ColorFonts,'ColorStripe'=>$_ColorStripe,'ColorOpen'=>$_ColorOpen,'ColorClose'=>$_ColorClose,'ColorVerticalGrid'=>$_ColorVerticalGrid,'ColorHorizontalGrid'=>$_ColorHorizontalGrid,'ColorUp'=>$_ColorUp,'ColorDown'=>$_ColorDown,'ColorHighLowLine'=>$_ColorHighLowLine,'ColorCollection'=>$_ColorCollection,'GridHorizontalStyle'=>$_GridHorizontalStyle,'GridVerticalStyle'=>$_GridVerticalStyle,'GridHorizontalWidth'=>$_GridHorizontalWidth,'GridVerticalWidth'=>$_GridVerticalWidth,'ColorFrame'=>$_ColorFrame,'FrameBorder'=>$_FrameBorder,'FormatPriceLine'=>$_FormatPriceLine,'FormatVolume'=>$_FormatVolume,'FormatDate'=>$_FormatDate,'GradeBackground'=>$_GradeBackground,'GradeBackwall'=>$_GradeBackwall,'WaterMark'=>$_WaterMark,'WaterMarkTopMargin'=>$_WaterMarkTopMargin,'WaterMarkLeftMargin'=>$_WaterMarkLeftMargin,'WaterMarkTransparency'=>$_WaterMarkTransparency,'PointSize'=>$_PointSize,'StackVariationLabels'=>$_StackVariationLabels,'ShowAxisLabelInLegend'=>$_ShowAxisLabelInLegend,'LineWidth'=>$_LineWidth,'SplitPercent'=>$_SplitPercent,'ShowHigh'=>$_ShowHigh,'ShowLow'=>$_ShowLow,'ShowOpen'=>$_ShowOpen,'ShowClose'=>$_ShowClose,'ShowVolume'=>$_ShowVolume,'ShowUpVariation'=>$_ShowUpVariation,'ShowDownVariation'=>$_ShowDownVariation,'ShowLegend'=>$_ShowLegend,'VariationYear'=>$_VariationYear,'VolumeDivider'=>$_VolumeDivider,'VolumeTextOffset'=>$_VolumeTextOffset,'PriceTextOffset'=>$_PriceTextOffset,'FrameType'=>$_FrameType,'Projection'=>$_Projection,'MarginTop'=>$_MarginTop,'MarginBottom'=>$_MarginBottom,'MarginLeft'=>$_MarginLeft,'MarginRight'=>$_MarginRight,'FontFamily'=>$_FontFamily,'FontSizeHeader'=>$_FontSizeHeader,'FontSizeFooter'=>$_FontSizeFooter,'Height'=>$_Height,'Width'=>$_Width,'ZoomPercent'=>$_ZoomPercent,'LegendBox'=>$_LegendBox,'ColorLegendBackground'=>$_ColorLegendBackground,'ColorLegendBorder'=>$_ColorLegendBorder,'LegendVerticalPosition'=>$_LegendVerticalPosition,'LegendHorizontalPosition'=>$_LegendHorizontalPosition,'Reload'=>$_Reload,'ShowPriceChartLabels'=>$_ShowPriceChartLabels,'TickPrecision'=>$_TickPrecision,'TickPeriods'=>$_TickPeriods,'WaterMarkHorizontalAlign'=>$_WaterMarkHorizontalAlign,'LightScheme'=>$_LightScheme,'FontSizeLegend'=>$_FontSizeLegend,'FontSizeAxes'=>$_FontSizeAxes,'FontSizeTitle'=>$_FontSizeTitle,'DaysForHourDisplay'=>$_DaysForHourDisplay,'DaysForDayDisplay'=>$_DaysForDayDisplay,'DaysForWeekDisplay'=>$_DaysForWeekDisplay,'DaysForBiWeeklyDisplay'=>$_DaysForBiWeeklyDisplay,'DaysForMonthDisplay'=>$_DaysForMonthDisplay,'DaysForQuarterDisplay'=>$_DaysForQuarterDisplay,'DaysForSemiAnnualDisplay'=>$_DaysForSemiAnnualDisplay,'DaysForAnnualDisplay'=>$_DaysForAnnualDisplay,'DaysForBiAnnualDisplay'=>$_DaysForBiAnnualDisplay,'DaysForPentaAnnualDisplay'=>$_DaysForPentaAnnualDisplay));
	}
	/**
	 * Set Secure
	 * @param boolean Secure
	 * @return boolean
	 */
	public function setSecure($_Secure)
	{
		return ($this->Secure = $_Secure);
	}
	/**
	 * Get Secure
	 * @return boolean
	 */
	public function getSecure()
	{
		return $this->Secure;
	}
	/**
	 * Set TextTitle
	 * @param string TextTitle
	 * @return string
	 */
	public function setTextTitle($_TextTitle)
	{
		return ($this->TextTitle = $_TextTitle);
	}
	/**
	 * Get TextTitle
	 * @return string
	 */
	public function getTextTitle()
	{
		return $this->TextTitle;
	}
	/**
	 * Set TextHeader
	 * @param string TextHeader
	 * @return string
	 */
	public function setTextHeader($_TextHeader)
	{
		return ($this->TextHeader = $_TextHeader);
	}
	/**
	 * Get TextHeader
	 * @return string
	 */
	public function getTextHeader()
	{
		return $this->TextHeader;
	}
	/**
	 * Set TextFooter
	 * @param string TextFooter
	 * @return string
	 */
	public function setTextFooter($_TextFooter)
	{
		return ($this->TextFooter = $_TextFooter);
	}
	/**
	 * Get TextFooter
	 * @return string
	 */
	public function getTextFooter()
	{
		return $this->TextFooter;
	}
	/**
	 * Set TextPriceLine
	 * @param string TextPriceLine
	 * @return string
	 */
	public function setTextPriceLine($_TextPriceLine)
	{
		return ($this->TextPriceLine = $_TextPriceLine);
	}
	/**
	 * Get TextPriceLine
	 * @return string
	 */
	public function getTextPriceLine()
	{
		return $this->TextPriceLine;
	}
	/**
	 * Set TextVolumeBar
	 * @param string TextVolumeBar
	 * @return string
	 */
	public function setTextVolumeBar($_TextVolumeBar)
	{
		return ($this->TextVolumeBar = $_TextVolumeBar);
	}
	/**
	 * Get TextVolumeBar
	 * @return string
	 */
	public function getTextVolumeBar()
	{
		return $this->TextVolumeBar;
	}
	/**
	 * Set TextHighest
	 * @param string TextHighest
	 * @return string
	 */
	public function setTextHighest($_TextHighest)
	{
		return ($this->TextHighest = $_TextHighest);
	}
	/**
	 * Get TextHighest
	 * @return string
	 */
	public function getTextHighest()
	{
		return $this->TextHighest;
	}
	/**
	 * Set TextLowest
	 * @param string TextLowest
	 * @return string
	 */
	public function setTextLowest($_TextLowest)
	{
		return ($this->TextLowest = $_TextLowest);
	}
	/**
	 * Get TextLowest
	 * @return string
	 */
	public function getTextLowest()
	{
		return $this->TextLowest;
	}
	/**
	 * Set TextOpen
	 * @param string TextOpen
	 * @return string
	 */
	public function setTextOpen($_TextOpen)
	{
		return ($this->TextOpen = $_TextOpen);
	}
	/**
	 * Get TextOpen
	 * @return string
	 */
	public function getTextOpen()
	{
		return $this->TextOpen;
	}
	/**
	 * Set TextClose
	 * @param string TextClose
	 * @return string
	 */
	public function setTextClose($_TextClose)
	{
		return ($this->TextClose = $_TextClose);
	}
	/**
	 * Get TextClose
	 * @return string
	 */
	public function getTextClose()
	{
		return $this->TextClose;
	}
	/**
	 * Set TextUp
	 * @param string TextUp
	 * @return string
	 */
	public function setTextUp($_TextUp)
	{
		return ($this->TextUp = $_TextUp);
	}
	/**
	 * Get TextUp
	 * @return string
	 */
	public function getTextUp()
	{
		return $this->TextUp;
	}
	/**
	 * Set TextDown
	 * @param string TextDown
	 * @return string
	 */
	public function setTextDown($_TextDown)
	{
		return ($this->TextDown = $_TextDown);
	}
	/**
	 * Get TextDown
	 * @return string
	 */
	public function getTextDown()
	{
		return $this->TextDown;
	}
	/**
	 * Set ColorBackground
	 * @param string ColorBackground
	 * @return string
	 */
	public function setColorBackground($_ColorBackground)
	{
		return ($this->ColorBackground = $_ColorBackground);
	}
	/**
	 * Get ColorBackground
	 * @return string
	 */
	public function getColorBackground()
	{
		return $this->ColorBackground;
	}
	/**
	 * Set ColorBackWall
	 * @param string ColorBackWall
	 * @return string
	 */
	public function setColorBackWall($_ColorBackWall)
	{
		return ($this->ColorBackWall = $_ColorBackWall);
	}
	/**
	 * Get ColorBackWall
	 * @return string
	 */
	public function getColorBackWall()
	{
		return $this->ColorBackWall;
	}
	/**
	 * Set ColorVolumeBackWall
	 * @param string ColorVolumeBackWall
	 * @return string
	 */
	public function setColorVolumeBackWall($_ColorVolumeBackWall)
	{
		return ($this->ColorVolumeBackWall = $_ColorVolumeBackWall);
	}
	/**
	 * Get ColorVolumeBackWall
	 * @return string
	 */
	public function getColorVolumeBackWall()
	{
		return $this->ColorVolumeBackWall;
	}
	/**
	 * Set ShowVolumeBackWall
	 * @param boolean ShowVolumeBackWall
	 * @return boolean
	 */
	public function setShowVolumeBackWall($_ShowVolumeBackWall)
	{
		return ($this->ShowVolumeBackWall = $_ShowVolumeBackWall);
	}
	/**
	 * Get ShowVolumeBackWall
	 * @return boolean
	 */
	public function getShowVolumeBackWall()
	{
		return $this->ShowVolumeBackWall;
	}
	/**
	 * Set ColorHighlight
	 * @param string ColorHighlight
	 * @return string
	 */
	public function setColorHighlight($_ColorHighlight)
	{
		return ($this->ColorHighlight = $_ColorHighlight);
	}
	/**
	 * Get ColorHighlight
	 * @return string
	 */
	public function getColorHighlight()
	{
		return $this->ColorHighlight;
	}
	/**
	 * Set ColorPriceLine
	 * @param string ColorPriceLine
	 * @return string
	 */
	public function setColorPriceLine($_ColorPriceLine)
	{
		return ($this->ColorPriceLine = $_ColorPriceLine);
	}
	/**
	 * Get ColorPriceLine
	 * @return string
	 */
	public function getColorPriceLine()
	{
		return $this->ColorPriceLine;
	}
	/**
	 * Set ColorVolumeBar
	 * @param string ColorVolumeBar
	 * @return string
	 */
	public function setColorVolumeBar($_ColorVolumeBar)
	{
		return ($this->ColorVolumeBar = $_ColorVolumeBar);
	}
	/**
	 * Get ColorVolumeBar
	 * @return string
	 */
	public function getColorVolumeBar()
	{
		return $this->ColorVolumeBar;
	}
	/**
	 * Set ColorVolumeBarFill
	 * @param string ColorVolumeBarFill
	 * @return string
	 */
	public function setColorVolumeBarFill($_ColorVolumeBarFill)
	{
		return ($this->ColorVolumeBarFill = $_ColorVolumeBarFill);
	}
	/**
	 * Get ColorVolumeBarFill
	 * @return string
	 */
	public function getColorVolumeBarFill()
	{
		return $this->ColorVolumeBarFill;
	}
	/**
	 * Set ColorHigh
	 * @param string ColorHigh
	 * @return string
	 */
	public function setColorHigh($_ColorHigh)
	{
		return ($this->ColorHigh = $_ColorHigh);
	}
	/**
	 * Get ColorHigh
	 * @return string
	 */
	public function getColorHigh()
	{
		return $this->ColorHigh;
	}
	/**
	 * Set ColorStickUp
	 * @param string ColorStickUp
	 * @return string
	 */
	public function setColorStickUp($_ColorStickUp)
	{
		return ($this->ColorStickUp = $_ColorStickUp);
	}
	/**
	 * Get ColorStickUp
	 * @return string
	 */
	public function getColorStickUp()
	{
		return $this->ColorStickUp;
	}
	/**
	 * Set ColorStickLow
	 * @param string ColorStickLow
	 * @return string
	 */
	public function setColorStickLow($_ColorStickLow)
	{
		return ($this->ColorStickLow = $_ColorStickLow);
	}
	/**
	 * Get ColorStickLow
	 * @return string
	 */
	public function getColorStickLow()
	{
		return $this->ColorStickLow;
	}
	/**
	 * Set ColorConstant
	 * @param string ColorConstant
	 * @return string
	 */
	public function setColorConstant($_ColorConstant)
	{
		return ($this->ColorConstant = $_ColorConstant);
	}
	/**
	 * Get ColorConstant
	 * @return string
	 */
	public function getColorConstant()
	{
		return $this->ColorConstant;
	}
	/**
	 * Set ColorLow
	 * @param string ColorLow
	 * @return string
	 */
	public function setColorLow($_ColorLow)
	{
		return ($this->ColorLow = $_ColorLow);
	}
	/**
	 * Get ColorLow
	 * @return string
	 */
	public function getColorLow()
	{
		return $this->ColorLow;
	}
	/**
	 * Set ColorPoint
	 * @param string ColorPoint
	 * @return string
	 */
	public function setColorPoint($_ColorPoint)
	{
		return ($this->ColorPoint = $_ColorPoint);
	}
	/**
	 * Get ColorPoint
	 * @return string
	 */
	public function getColorPoint()
	{
		return $this->ColorPoint;
	}
	/**
	 * Set ColorTitle
	 * @param string ColorTitle
	 * @return string
	 */
	public function setColorTitle($_ColorTitle)
	{
		return ($this->ColorTitle = $_ColorTitle);
	}
	/**
	 * Get ColorTitle
	 * @return string
	 */
	public function getColorTitle()
	{
		return $this->ColorTitle;
	}
	/**
	 * Set ColorFooter
	 * @param string ColorFooter
	 * @return string
	 */
	public function setColorFooter($_ColorFooter)
	{
		return ($this->ColorFooter = $_ColorFooter);
	}
	/**
	 * Get ColorFooter
	 * @return string
	 */
	public function getColorFooter()
	{
		return $this->ColorFooter;
	}
	/**
	 * Set ColorHeader
	 * @param string ColorHeader
	 * @return string
	 */
	public function setColorHeader($_ColorHeader)
	{
		return ($this->ColorHeader = $_ColorHeader);
	}
	/**
	 * Get ColorHeader
	 * @return string
	 */
	public function getColorHeader()
	{
		return $this->ColorHeader;
	}
	/**
	 * Set ColorAxis
	 * @param string ColorAxis
	 * @return string
	 */
	public function setColorAxis($_ColorAxis)
	{
		return ($this->ColorAxis = $_ColorAxis);
	}
	/**
	 * Get ColorAxis
	 * @return string
	 */
	public function getColorAxis()
	{
		return $this->ColorAxis;
	}
	/**
	 * Set ColorGrid
	 * @param string ColorGrid
	 * @return string
	 */
	public function setColorGrid($_ColorGrid)
	{
		return ($this->ColorGrid = $_ColorGrid);
	}
	/**
	 * Get ColorGrid
	 * @return string
	 */
	public function getColorGrid()
	{
		return $this->ColorGrid;
	}
	/**
	 * Set ColorFonts
	 * @param string ColorFonts
	 * @return string
	 */
	public function setColorFonts($_ColorFonts)
	{
		return ($this->ColorFonts = $_ColorFonts);
	}
	/**
	 * Get ColorFonts
	 * @return string
	 */
	public function getColorFonts()
	{
		return $this->ColorFonts;
	}
	/**
	 * Set ColorStripe
	 * @param string ColorStripe
	 * @return string
	 */
	public function setColorStripe($_ColorStripe)
	{
		return ($this->ColorStripe = $_ColorStripe);
	}
	/**
	 * Get ColorStripe
	 * @return string
	 */
	public function getColorStripe()
	{
		return $this->ColorStripe;
	}
	/**
	 * Set ColorOpen
	 * @param string ColorOpen
	 * @return string
	 */
	public function setColorOpen($_ColorOpen)
	{
		return ($this->ColorOpen = $_ColorOpen);
	}
	/**
	 * Get ColorOpen
	 * @return string
	 */
	public function getColorOpen()
	{
		return $this->ColorOpen;
	}
	/**
	 * Set ColorClose
	 * @param string ColorClose
	 * @return string
	 */
	public function setColorClose($_ColorClose)
	{
		return ($this->ColorClose = $_ColorClose);
	}
	/**
	 * Get ColorClose
	 * @return string
	 */
	public function getColorClose()
	{
		return $this->ColorClose;
	}
	/**
	 * Set ColorVerticalGrid
	 * @param string ColorVerticalGrid
	 * @return string
	 */
	public function setColorVerticalGrid($_ColorVerticalGrid)
	{
		return ($this->ColorVerticalGrid = $_ColorVerticalGrid);
	}
	/**
	 * Get ColorVerticalGrid
	 * @return string
	 */
	public function getColorVerticalGrid()
	{
		return $this->ColorVerticalGrid;
	}
	/**
	 * Set ColorHorizontalGrid
	 * @param string ColorHorizontalGrid
	 * @return string
	 */
	public function setColorHorizontalGrid($_ColorHorizontalGrid)
	{
		return ($this->ColorHorizontalGrid = $_ColorHorizontalGrid);
	}
	/**
	 * Get ColorHorizontalGrid
	 * @return string
	 */
	public function getColorHorizontalGrid()
	{
		return $this->ColorHorizontalGrid;
	}
	/**
	 * Set ColorUp
	 * @param string ColorUp
	 * @return string
	 */
	public function setColorUp($_ColorUp)
	{
		return ($this->ColorUp = $_ColorUp);
	}
	/**
	 * Get ColorUp
	 * @return string
	 */
	public function getColorUp()
	{
		return $this->ColorUp;
	}
	/**
	 * Set ColorDown
	 * @param string ColorDown
	 * @return string
	 */
	public function setColorDown($_ColorDown)
	{
		return ($this->ColorDown = $_ColorDown);
	}
	/**
	 * Get ColorDown
	 * @return string
	 */
	public function getColorDown()
	{
		return $this->ColorDown;
	}
	/**
	 * Set ColorHighLowLine
	 * @param string ColorHighLowLine
	 * @return string
	 */
	public function setColorHighLowLine($_ColorHighLowLine)
	{
		return ($this->ColorHighLowLine = $_ColorHighLowLine);
	}
	/**
	 * Get ColorHighLowLine
	 * @return string
	 */
	public function getColorHighLowLine()
	{
		return $this->ColorHighLowLine;
	}
	/**
	 * Set ColorCollection
	 * @param string ColorCollection
	 * @return string
	 */
	public function setColorCollection($_ColorCollection)
	{
		return ($this->ColorCollection = $_ColorCollection);
	}
	/**
	 * Get ColorCollection
	 * @return string
	 */
	public function getColorCollection()
	{
		return $this->ColorCollection;
	}
	/**
	 * Set GridHorizontalStyle
	 * @param LinePattern GridHorizontalStyle
	 * @return LinePattern
	 */
	public function setGridHorizontalStyle($_GridHorizontalStyle)
	{
		return ($this->GridHorizontalStyle = XiMetalsTypeLinePattern::valueIsValid($_GridHorizontalStyle)?$_GridHorizontalStyle:null);
	}
	/**
	 * Get GridHorizontalStyle
	 * @return XiMetalsTypeLinePattern
	 */
	public function getGridHorizontalStyle()
	{
		return $this->GridHorizontalStyle;
	}
	/**
	 * Set GridVerticalStyle
	 * @param LinePattern GridVerticalStyle
	 * @return LinePattern
	 */
	public function setGridVerticalStyle($_GridVerticalStyle)
	{
		return ($this->GridVerticalStyle = XiMetalsTypeLinePattern::valueIsValid($_GridVerticalStyle)?$_GridVerticalStyle:null);
	}
	/**
	 * Get GridVerticalStyle
	 * @return XiMetalsTypeLinePattern
	 */
	public function getGridVerticalStyle()
	{
		return $this->GridVerticalStyle;
	}
	/**
	 * Set GridHorizontalWidth
	 * @param int GridHorizontalWidth
	 * @return int
	 */
	public function setGridHorizontalWidth($_GridHorizontalWidth)
	{
		return ($this->GridHorizontalWidth = $_GridHorizontalWidth);
	}
	/**
	 * Get GridHorizontalWidth
	 * @return int
	 */
	public function getGridHorizontalWidth()
	{
		return $this->GridHorizontalWidth;
	}
	/**
	 * Set GridVerticalWidth
	 * @param int GridVerticalWidth
	 * @return int
	 */
	public function setGridVerticalWidth($_GridVerticalWidth)
	{
		return ($this->GridVerticalWidth = $_GridVerticalWidth);
	}
	/**
	 * Get GridVerticalWidth
	 * @return int
	 */
	public function getGridVerticalWidth()
	{
		return $this->GridVerticalWidth;
	}
	/**
	 * Set ColorFrame
	 * @param string ColorFrame
	 * @return string
	 */
	public function setColorFrame($_ColorFrame)
	{
		return ($this->ColorFrame = $_ColorFrame);
	}
	/**
	 * Get ColorFrame
	 * @return string
	 */
	public function getColorFrame()
	{
		return $this->ColorFrame;
	}
	/**
	 * Set FrameBorder
	 * @param string FrameBorder
	 * @return string
	 */
	public function setFrameBorder($_FrameBorder)
	{
		return ($this->FrameBorder = $_FrameBorder);
	}
	/**
	 * Get FrameBorder
	 * @return string
	 */
	public function getFrameBorder()
	{
		return $this->FrameBorder;
	}
	/**
	 * Set FormatPriceLine
	 * @param string FormatPriceLine
	 * @return string
	 */
	public function setFormatPriceLine($_FormatPriceLine)
	{
		return ($this->FormatPriceLine = $_FormatPriceLine);
	}
	/**
	 * Get FormatPriceLine
	 * @return string
	 */
	public function getFormatPriceLine()
	{
		return $this->FormatPriceLine;
	}
	/**
	 * Set FormatVolume
	 * @param string FormatVolume
	 * @return string
	 */
	public function setFormatVolume($_FormatVolume)
	{
		return ($this->FormatVolume = $_FormatVolume);
	}
	/**
	 * Get FormatVolume
	 * @return string
	 */
	public function getFormatVolume()
	{
		return $this->FormatVolume;
	}
	/**
	 * Set FormatDate
	 * @param string FormatDate
	 * @return string
	 */
	public function setFormatDate($_FormatDate)
	{
		return ($this->FormatDate = $_FormatDate);
	}
	/**
	 * Get FormatDate
	 * @return string
	 */
	public function getFormatDate()
	{
		return $this->FormatDate;
	}
	/**
	 * Set GradeBackground
	 * @param boolean GradeBackground
	 * @return boolean
	 */
	public function setGradeBackground($_GradeBackground)
	{
		return ($this->GradeBackground = $_GradeBackground);
	}
	/**
	 * Get GradeBackground
	 * @return boolean
	 */
	public function getGradeBackground()
	{
		return $this->GradeBackground;
	}
	/**
	 * Set GradeBackwall
	 * @param boolean GradeBackwall
	 * @return boolean
	 */
	public function setGradeBackwall($_GradeBackwall)
	{
		return ($this->GradeBackwall = $_GradeBackwall);
	}
	/**
	 * Get GradeBackwall
	 * @return boolean
	 */
	public function getGradeBackwall()
	{
		return $this->GradeBackwall;
	}
	/**
	 * Set WaterMark
	 * @param string WaterMark
	 * @return string
	 */
	public function setWaterMark($_WaterMark)
	{
		return ($this->WaterMark = $_WaterMark);
	}
	/**
	 * Get WaterMark
	 * @return string
	 */
	public function getWaterMark()
	{
		return $this->WaterMark;
	}
	/**
	 * Set WaterMarkTopMargin
	 * @param int WaterMarkTopMargin
	 * @return int
	 */
	public function setWaterMarkTopMargin($_WaterMarkTopMargin)
	{
		return ($this->WaterMarkTopMargin = $_WaterMarkTopMargin);
	}
	/**
	 * Get WaterMarkTopMargin
	 * @return int
	 */
	public function getWaterMarkTopMargin()
	{
		return $this->WaterMarkTopMargin;
	}
	/**
	 * Set WaterMarkLeftMargin
	 * @param int WaterMarkLeftMargin
	 * @return int
	 */
	public function setWaterMarkLeftMargin($_WaterMarkLeftMargin)
	{
		return ($this->WaterMarkLeftMargin = $_WaterMarkLeftMargin);
	}
	/**
	 * Get WaterMarkLeftMargin
	 * @return int
	 */
	public function getWaterMarkLeftMargin()
	{
		return $this->WaterMarkLeftMargin;
	}
	/**
	 * Set WaterMarkTransparency
	 * @param int WaterMarkTransparency
	 * @return int
	 */
	public function setWaterMarkTransparency($_WaterMarkTransparency)
	{
		return ($this->WaterMarkTransparency = $_WaterMarkTransparency);
	}
	/**
	 * Get WaterMarkTransparency
	 * @return int
	 */
	public function getWaterMarkTransparency()
	{
		return $this->WaterMarkTransparency;
	}
	/**
	 * Set PointSize
	 * @param float PointSize
	 * @return float
	 */
	public function setPointSize($_PointSize)
	{
		return ($this->PointSize = $_PointSize);
	}
	/**
	 * Get PointSize
	 * @return float
	 */
	public function getPointSize()
	{
		return $this->PointSize;
	}
	/**
	 * Set StackVariationLabels
	 * @param boolean StackVariationLabels
	 * @return boolean
	 */
	public function setStackVariationLabels($_StackVariationLabels)
	{
		return ($this->StackVariationLabels = $_StackVariationLabels);
	}
	/**
	 * Get StackVariationLabels
	 * @return boolean
	 */
	public function getStackVariationLabels()
	{
		return $this->StackVariationLabels;
	}
	/**
	 * Set ShowAxisLabelInLegend
	 * @param boolean ShowAxisLabelInLegend
	 * @return boolean
	 */
	public function setShowAxisLabelInLegend($_ShowAxisLabelInLegend)
	{
		return ($this->ShowAxisLabelInLegend = $_ShowAxisLabelInLegend);
	}
	/**
	 * Get ShowAxisLabelInLegend
	 * @return boolean
	 */
	public function getShowAxisLabelInLegend()
	{
		return $this->ShowAxisLabelInLegend;
	}
	/**
	 * Set LineWidth
	 * @param int LineWidth
	 * @return int
	 */
	public function setLineWidth($_LineWidth)
	{
		return ($this->LineWidth = $_LineWidth);
	}
	/**
	 * Get LineWidth
	 * @return int
	 */
	public function getLineWidth()
	{
		return $this->LineWidth;
	}
	/**
	 * Set SplitPercent
	 * @param int SplitPercent
	 * @return int
	 */
	public function setSplitPercent($_SplitPercent)
	{
		return ($this->SplitPercent = $_SplitPercent);
	}
	/**
	 * Get SplitPercent
	 * @return int
	 */
	public function getSplitPercent()
	{
		return $this->SplitPercent;
	}
	/**
	 * Set ShowHigh
	 * @param boolean ShowHigh
	 * @return boolean
	 */
	public function setShowHigh($_ShowHigh)
	{
		return ($this->ShowHigh = $_ShowHigh);
	}
	/**
	 * Get ShowHigh
	 * @return boolean
	 */
	public function getShowHigh()
	{
		return $this->ShowHigh;
	}
	/**
	 * Set ShowLow
	 * @param boolean ShowLow
	 * @return boolean
	 */
	public function setShowLow($_ShowLow)
	{
		return ($this->ShowLow = $_ShowLow);
	}
	/**
	 * Get ShowLow
	 * @return boolean
	 */
	public function getShowLow()
	{
		return $this->ShowLow;
	}
	/**
	 * Set ShowOpen
	 * @param boolean ShowOpen
	 * @return boolean
	 */
	public function setShowOpen($_ShowOpen)
	{
		return ($this->ShowOpen = $_ShowOpen);
	}
	/**
	 * Get ShowOpen
	 * @return boolean
	 */
	public function getShowOpen()
	{
		return $this->ShowOpen;
	}
	/**
	 * Set ShowClose
	 * @param boolean ShowClose
	 * @return boolean
	 */
	public function setShowClose($_ShowClose)
	{
		return ($this->ShowClose = $_ShowClose);
	}
	/**
	 * Get ShowClose
	 * @return boolean
	 */
	public function getShowClose()
	{
		return $this->ShowClose;
	}
	/**
	 * Set ShowVolume
	 * @param boolean ShowVolume
	 * @return boolean
	 */
	public function setShowVolume($_ShowVolume)
	{
		return ($this->ShowVolume = $_ShowVolume);
	}
	/**
	 * Get ShowVolume
	 * @return boolean
	 */
	public function getShowVolume()
	{
		return $this->ShowVolume;
	}
	/**
	 * Set ShowUpVariation
	 * @param boolean ShowUpVariation
	 * @return boolean
	 */
	public function setShowUpVariation($_ShowUpVariation)
	{
		return ($this->ShowUpVariation = $_ShowUpVariation);
	}
	/**
	 * Get ShowUpVariation
	 * @return boolean
	 */
	public function getShowUpVariation()
	{
		return $this->ShowUpVariation;
	}
	/**
	 * Set ShowDownVariation
	 * @param boolean ShowDownVariation
	 * @return boolean
	 */
	public function setShowDownVariation($_ShowDownVariation)
	{
		return ($this->ShowDownVariation = $_ShowDownVariation);
	}
	/**
	 * Get ShowDownVariation
	 * @return boolean
	 */
	public function getShowDownVariation()
	{
		return $this->ShowDownVariation;
	}
	/**
	 * Set ShowLegend
	 * @param boolean ShowLegend
	 * @return boolean
	 */
	public function setShowLegend($_ShowLegend)
	{
		return ($this->ShowLegend = $_ShowLegend);
	}
	/**
	 * Get ShowLegend
	 * @return boolean
	 */
	public function getShowLegend()
	{
		return $this->ShowLegend;
	}
	/**
	 * Set VariationYear
	 * @param int VariationYear
	 * @return int
	 */
	public function setVariationYear($_VariationYear)
	{
		return ($this->VariationYear = $_VariationYear);
	}
	/**
	 * Get VariationYear
	 * @return int
	 */
	public function getVariationYear()
	{
		return $this->VariationYear;
	}
	/**
	 * Set VolumeDivider
	 * @param int VolumeDivider
	 * @return int
	 */
	public function setVolumeDivider($_VolumeDivider)
	{
		return ($this->VolumeDivider = $_VolumeDivider);
	}
	/**
	 * Get VolumeDivider
	 * @return int
	 */
	public function getVolumeDivider()
	{
		return $this->VolumeDivider;
	}
	/**
	 * Set VolumeTextOffset
	 * @param int VolumeTextOffset
	 * @return int
	 */
	public function setVolumeTextOffset($_VolumeTextOffset)
	{
		return ($this->VolumeTextOffset = $_VolumeTextOffset);
	}
	/**
	 * Get VolumeTextOffset
	 * @return int
	 */
	public function getVolumeTextOffset()
	{
		return $this->VolumeTextOffset;
	}
	/**
	 * Set PriceTextOffset
	 * @param int PriceTextOffset
	 * @return int
	 */
	public function setPriceTextOffset($_PriceTextOffset)
	{
		return ($this->PriceTextOffset = $_PriceTextOffset);
	}
	/**
	 * Get PriceTextOffset
	 * @return int
	 */
	public function getPriceTextOffset()
	{
		return $this->PriceTextOffset;
	}
	/**
	 * Set FrameType
	 * @param ImageFrameType FrameType
	 * @return ImageFrameType
	 */
	public function setFrameType($_FrameType)
	{
		return ($this->FrameType = XiMetalsTypeImageFrameType::valueIsValid($_FrameType)?$_FrameType:null);
	}
	/**
	 * Get FrameType
	 * @return XiMetalsTypeImageFrameType
	 */
	public function getFrameType()
	{
		return $this->FrameType;
	}
	/**
	 * Set Projection
	 * @param PredefinedProjection Projection
	 * @return PredefinedProjection
	 */
	public function setProjection($_Projection)
	{
		return ($this->Projection = XiMetalsTypePredefinedProjection::valueIsValid($_Projection)?$_Projection:null);
	}
	/**
	 * Get Projection
	 * @return XiMetalsTypePredefinedProjection
	 */
	public function getProjection()
	{
		return $this->Projection;
	}
	/**
	 * Set MarginTop
	 * @param int MarginTop
	 * @return int
	 */
	public function setMarginTop($_MarginTop)
	{
		return ($this->MarginTop = $_MarginTop);
	}
	/**
	 * Get MarginTop
	 * @return int
	 */
	public function getMarginTop()
	{
		return $this->MarginTop;
	}
	/**
	 * Set MarginBottom
	 * @param int MarginBottom
	 * @return int
	 */
	public function setMarginBottom($_MarginBottom)
	{
		return ($this->MarginBottom = $_MarginBottom);
	}
	/**
	 * Get MarginBottom
	 * @return int
	 */
	public function getMarginBottom()
	{
		return $this->MarginBottom;
	}
	/**
	 * Set MarginLeft
	 * @param int MarginLeft
	 * @return int
	 */
	public function setMarginLeft($_MarginLeft)
	{
		return ($this->MarginLeft = $_MarginLeft);
	}
	/**
	 * Get MarginLeft
	 * @return int
	 */
	public function getMarginLeft()
	{
		return $this->MarginLeft;
	}
	/**
	 * Set MarginRight
	 * @param int MarginRight
	 * @return int
	 */
	public function setMarginRight($_MarginRight)
	{
		return ($this->MarginRight = $_MarginRight);
	}
	/**
	 * Get MarginRight
	 * @return int
	 */
	public function getMarginRight()
	{
		return $this->MarginRight;
	}
	/**
	 * Set FontFamily
	 * @param string FontFamily
	 * @return string
	 */
	public function setFontFamily($_FontFamily)
	{
		return ($this->FontFamily = $_FontFamily);
	}
	/**
	 * Get FontFamily
	 * @return string
	 */
	public function getFontFamily()
	{
		return $this->FontFamily;
	}
	/**
	 * Set FontSizeHeader
	 * @param int FontSizeHeader
	 * @return int
	 */
	public function setFontSizeHeader($_FontSizeHeader)
	{
		return ($this->FontSizeHeader = $_FontSizeHeader);
	}
	/**
	 * Get FontSizeHeader
	 * @return int
	 */
	public function getFontSizeHeader()
	{
		return $this->FontSizeHeader;
	}
	/**
	 * Set FontSizeFooter
	 * @param int FontSizeFooter
	 * @return int
	 */
	public function setFontSizeFooter($_FontSizeFooter)
	{
		return ($this->FontSizeFooter = $_FontSizeFooter);
	}
	/**
	 * Get FontSizeFooter
	 * @return int
	 */
	public function getFontSizeFooter()
	{
		return $this->FontSizeFooter;
	}
	/**
	 * Set Height
	 * @param double Height
	 * @return double
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return double
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set Width
	 * @param double Width
	 * @return double
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return double
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set ZoomPercent
	 * @param int ZoomPercent
	 * @return int
	 */
	public function setZoomPercent($_ZoomPercent)
	{
		return ($this->ZoomPercent = $_ZoomPercent);
	}
	/**
	 * Get ZoomPercent
	 * @return int
	 */
	public function getZoomPercent()
	{
		return $this->ZoomPercent;
	}
	/**
	 * Set LegendBox
	 * @param boolean LegendBox
	 * @return boolean
	 */
	public function setLegendBox($_LegendBox)
	{
		return ($this->LegendBox = $_LegendBox);
	}
	/**
	 * Get LegendBox
	 * @return boolean
	 */
	public function getLegendBox()
	{
		return $this->LegendBox;
	}
	/**
	 * Set ColorLegendBackground
	 * @param string ColorLegendBackground
	 * @return string
	 */
	public function setColorLegendBackground($_ColorLegendBackground)
	{
		return ($this->ColorLegendBackground = $_ColorLegendBackground);
	}
	/**
	 * Get ColorLegendBackground
	 * @return string
	 */
	public function getColorLegendBackground()
	{
		return $this->ColorLegendBackground;
	}
	/**
	 * Set ColorLegendBorder
	 * @param string ColorLegendBorder
	 * @return string
	 */
	public function setColorLegendBorder($_ColorLegendBorder)
	{
		return ($this->ColorLegendBorder = $_ColorLegendBorder);
	}
	/**
	 * Get ColorLegendBorder
	 * @return string
	 */
	public function getColorLegendBorder()
	{
		return $this->ColorLegendBorder;
	}
	/**
	 * Set LegendVerticalPosition
	 * @param int LegendVerticalPosition
	 * @return int
	 */
	public function setLegendVerticalPosition($_LegendVerticalPosition)
	{
		return ($this->LegendVerticalPosition = $_LegendVerticalPosition);
	}
	/**
	 * Get LegendVerticalPosition
	 * @return int
	 */
	public function getLegendVerticalPosition()
	{
		return $this->LegendVerticalPosition;
	}
	/**
	 * Set LegendHorizontalPosition
	 * @param int LegendHorizontalPosition
	 * @return int
	 */
	public function setLegendHorizontalPosition($_LegendHorizontalPosition)
	{
		return ($this->LegendHorizontalPosition = $_LegendHorizontalPosition);
	}
	/**
	 * Get LegendHorizontalPosition
	 * @return int
	 */
	public function getLegendHorizontalPosition()
	{
		return $this->LegendHorizontalPosition;
	}
	/**
	 * Set Reload
	 * @param boolean Reload
	 * @return boolean
	 */
	public function setReload($_Reload)
	{
		return ($this->Reload = $_Reload);
	}
	/**
	 * Get Reload
	 * @return boolean
	 */
	public function getReload()
	{
		return $this->Reload;
	}
	/**
	 * Set ShowPriceChartLabels
	 * @param boolean ShowPriceChartLabels
	 * @return boolean
	 */
	public function setShowPriceChartLabels($_ShowPriceChartLabels)
	{
		return ($this->ShowPriceChartLabels = $_ShowPriceChartLabels);
	}
	/**
	 * Get ShowPriceChartLabels
	 * @return boolean
	 */
	public function getShowPriceChartLabels()
	{
		return $this->ShowPriceChartLabels;
	}
	/**
	 * Set TickPrecision
	 * @param TickPeriod TickPrecision
	 * @return TickPeriod
	 */
	public function setTickPrecision($_TickPrecision)
	{
		return ($this->TickPrecision = XiMetalsTypeTickPeriod::valueIsValid($_TickPrecision)?$_TickPrecision:null);
	}
	/**
	 * Get TickPrecision
	 * @return XiMetalsTypeTickPeriod
	 */
	public function getTickPrecision()
	{
		return $this->TickPrecision;
	}
	/**
	 * Set TickPeriods
	 * @param int TickPeriods
	 * @return int
	 */
	public function setTickPeriods($_TickPeriods)
	{
		return ($this->TickPeriods = $_TickPeriods);
	}
	/**
	 * Get TickPeriods
	 * @return int
	 */
	public function getTickPeriods()
	{
		return $this->TickPeriods;
	}
	/**
	 * Set WaterMarkHorizontalAlign
	 * @param HorzAlign WaterMarkHorizontalAlign
	 * @return HorzAlign
	 */
	public function setWaterMarkHorizontalAlign($_WaterMarkHorizontalAlign)
	{
		return ($this->WaterMarkHorizontalAlign = XiMetalsTypeHorzAlign::valueIsValid($_WaterMarkHorizontalAlign)?$_WaterMarkHorizontalAlign:null);
	}
	/**
	 * Get WaterMarkHorizontalAlign
	 * @return XiMetalsTypeHorzAlign
	 */
	public function getWaterMarkHorizontalAlign()
	{
		return $this->WaterMarkHorizontalAlign;
	}
	/**
	 * Set LightScheme
	 * @param PredefinedLightModel LightScheme
	 * @return PredefinedLightModel
	 */
	public function setLightScheme($_LightScheme)
	{
		return ($this->LightScheme = XiMetalsTypePredefinedLightModel::valueIsValid($_LightScheme)?$_LightScheme:null);
	}
	/**
	 * Get LightScheme
	 * @return XiMetalsTypePredefinedLightModel
	 */
	public function getLightScheme()
	{
		return $this->LightScheme;
	}
	/**
	 * Set FontSizeLegend
	 * @param int FontSizeLegend
	 * @return int
	 */
	public function setFontSizeLegend($_FontSizeLegend)
	{
		return ($this->FontSizeLegend = $_FontSizeLegend);
	}
	/**
	 * Get FontSizeLegend
	 * @return int
	 */
	public function getFontSizeLegend()
	{
		return $this->FontSizeLegend;
	}
	/**
	 * Set FontSizeAxes
	 * @param int FontSizeAxes
	 * @return int
	 */
	public function setFontSizeAxes($_FontSizeAxes)
	{
		return ($this->FontSizeAxes = $_FontSizeAxes);
	}
	/**
	 * Get FontSizeAxes
	 * @return int
	 */
	public function getFontSizeAxes()
	{
		return $this->FontSizeAxes;
	}
	/**
	 * Set FontSizeTitle
	 * @param int FontSizeTitle
	 * @return int
	 */
	public function setFontSizeTitle($_FontSizeTitle)
	{
		return ($this->FontSizeTitle = $_FontSizeTitle);
	}
	/**
	 * Get FontSizeTitle
	 * @return int
	 */
	public function getFontSizeTitle()
	{
		return $this->FontSizeTitle;
	}
	/**
	 * Set DaysForHourDisplay
	 * @param int DaysForHourDisplay
	 * @return int
	 */
	public function setDaysForHourDisplay($_DaysForHourDisplay)
	{
		return ($this->DaysForHourDisplay = $_DaysForHourDisplay);
	}
	/**
	 * Get DaysForHourDisplay
	 * @return int
	 */
	public function getDaysForHourDisplay()
	{
		return $this->DaysForHourDisplay;
	}
	/**
	 * Set DaysForDayDisplay
	 * @param int DaysForDayDisplay
	 * @return int
	 */
	public function setDaysForDayDisplay($_DaysForDayDisplay)
	{
		return ($this->DaysForDayDisplay = $_DaysForDayDisplay);
	}
	/**
	 * Get DaysForDayDisplay
	 * @return int
	 */
	public function getDaysForDayDisplay()
	{
		return $this->DaysForDayDisplay;
	}
	/**
	 * Set DaysForWeekDisplay
	 * @param int DaysForWeekDisplay
	 * @return int
	 */
	public function setDaysForWeekDisplay($_DaysForWeekDisplay)
	{
		return ($this->DaysForWeekDisplay = $_DaysForWeekDisplay);
	}
	/**
	 * Get DaysForWeekDisplay
	 * @return int
	 */
	public function getDaysForWeekDisplay()
	{
		return $this->DaysForWeekDisplay;
	}
	/**
	 * Set DaysForBiWeeklyDisplay
	 * @param int DaysForBiWeeklyDisplay
	 * @return int
	 */
	public function setDaysForBiWeeklyDisplay($_DaysForBiWeeklyDisplay)
	{
		return ($this->DaysForBiWeeklyDisplay = $_DaysForBiWeeklyDisplay);
	}
	/**
	 * Get DaysForBiWeeklyDisplay
	 * @return int
	 */
	public function getDaysForBiWeeklyDisplay()
	{
		return $this->DaysForBiWeeklyDisplay;
	}
	/**
	 * Set DaysForMonthDisplay
	 * @param int DaysForMonthDisplay
	 * @return int
	 */
	public function setDaysForMonthDisplay($_DaysForMonthDisplay)
	{
		return ($this->DaysForMonthDisplay = $_DaysForMonthDisplay);
	}
	/**
	 * Get DaysForMonthDisplay
	 * @return int
	 */
	public function getDaysForMonthDisplay()
	{
		return $this->DaysForMonthDisplay;
	}
	/**
	 * Set DaysForQuarterDisplay
	 * @param int DaysForQuarterDisplay
	 * @return int
	 */
	public function setDaysForQuarterDisplay($_DaysForQuarterDisplay)
	{
		return ($this->DaysForQuarterDisplay = $_DaysForQuarterDisplay);
	}
	/**
	 * Get DaysForQuarterDisplay
	 * @return int
	 */
	public function getDaysForQuarterDisplay()
	{
		return $this->DaysForQuarterDisplay;
	}
	/**
	 * Set DaysForSemiAnnualDisplay
	 * @param int DaysForSemiAnnualDisplay
	 * @return int
	 */
	public function setDaysForSemiAnnualDisplay($_DaysForSemiAnnualDisplay)
	{
		return ($this->DaysForSemiAnnualDisplay = $_DaysForSemiAnnualDisplay);
	}
	/**
	 * Get DaysForSemiAnnualDisplay
	 * @return int
	 */
	public function getDaysForSemiAnnualDisplay()
	{
		return $this->DaysForSemiAnnualDisplay;
	}
	/**
	 * Set DaysForAnnualDisplay
	 * @param int DaysForAnnualDisplay
	 * @return int
	 */
	public function setDaysForAnnualDisplay($_DaysForAnnualDisplay)
	{
		return ($this->DaysForAnnualDisplay = $_DaysForAnnualDisplay);
	}
	/**
	 * Get DaysForAnnualDisplay
	 * @return int
	 */
	public function getDaysForAnnualDisplay()
	{
		return $this->DaysForAnnualDisplay;
	}
	/**
	 * Set DaysForBiAnnualDisplay
	 * @param int DaysForBiAnnualDisplay
	 * @return int
	 */
	public function setDaysForBiAnnualDisplay($_DaysForBiAnnualDisplay)
	{
		return ($this->DaysForBiAnnualDisplay = $_DaysForBiAnnualDisplay);
	}
	/**
	 * Get DaysForBiAnnualDisplay
	 * @return int
	 */
	public function getDaysForBiAnnualDisplay()
	{
		return $this->DaysForBiAnnualDisplay;
	}
	/**
	 * Set DaysForPentaAnnualDisplay
	 * @param int DaysForPentaAnnualDisplay
	 * @return int
	 */
	public function setDaysForPentaAnnualDisplay($_DaysForPentaAnnualDisplay)
	{
		return ($this->DaysForPentaAnnualDisplay = $_DaysForPentaAnnualDisplay);
	}
	/**
	 * Get DaysForPentaAnnualDisplay
	 * @return int
	 */
	public function getDaysForPentaAnnualDisplay()
	{
		return $this->DaysForPentaAnnualDisplay;
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