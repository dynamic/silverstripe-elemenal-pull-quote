<?php

namespace Dynamic\Elements\PullQuote\Elements;

use DNADesign\Elemental\Models\BaseElement;
use phpDocumentor\Reflection\DocBlock\Tags\Link;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\FieldType\DBField;
use SilverStripe\ORM\FieldType\DBHTMLText;

class ElementPullQuote extends BaseElement
{
    /**
     * @var array
     */
    private static $db = [
        'Job Title' => 'Varchar(255)',
        'Content' => 'HTMLText',
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'Image' => Image::class,
    ];

    /**
     * @var array
     */
    private static $owns = [
        'Image',
    ];

    /**
     * @var string
     */
    private static $table_name = 'ElementPullQuote';

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function (FieldList $fields) {
            $fields->insertBefore(
                'Content',
                $fields->dataFieldByName('Image')
                    ->setFolderName('Uploads/Elements/PullQuote')
                    ->getIsMultiUpload(false)
                    ->setAllowedFileCategories('image')
            );
            $fields->dataFieldByName('Content')
                ->setTitle('Quote')
                ->setRows(5);
        });

        return parent::getCMSFields();
    }

    /**
     * @return DBHTMLText
     */
    public function getSummary()
    {
        if ($this->Content) {
            return DBField::create_field('HTMLText', $this->Content)->Summary(20);
        }
    }

    /**
     * @return array
     */
    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema['content'] = $this->getSummary();
        return $blockSchema;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__.'.BlockType', 'Pull Quote');
    }
}
