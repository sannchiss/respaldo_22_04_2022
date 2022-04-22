<?php

namespace FedExVendor\FedEx\RateService\ComplexType;

use FedExVendor\FedEx\AbstractComplexType;
/**
 * Image to be included from printer's memory, or from a local file for offline clients.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property CustomLabelPosition $Position
 * @property string $PrinterGraphicId
 * @property string $FileGraphicFullName
 */
class CustomLabelGraphicEntry extends \FedExVendor\FedEx\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomLabelGraphicEntry';
    /**
     * Set Position
     *
     * @param CustomLabelPosition $position
     * @return $this
     */
    public function setPosition(\FedExVendor\FedEx\RateService\ComplexType\CustomLabelPosition $position)
    {
        $this->values['Position'] = $position;
        return $this;
    }
    /**
     * Printer-specific index of graphic image to be printed.
     *
     * @param string $printerGraphicId
     * @return $this
     */
    public function setPrinterGraphicId($printerGraphicId)
    {
        $this->values['PrinterGraphicId'] = $printerGraphicId;
        return $this;
    }
    /**
     * Fully-qualified path and file name for graphic image to be printed.
     *
     * @param string $fileGraphicFullName
     * @return $this
     */
    public function setFileGraphicFullName($fileGraphicFullName)
    {
        $this->values['FileGraphicFullName'] = $fileGraphicFullName;
        return $this;
    }
}