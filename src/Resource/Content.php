<?php

namespace Richardhj\ContaoApiBundle\Resource;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Contao\Model;

/**
 * @ApiResource()
 */
class Content implements ResourceInterface
{
    private Model $model;

    /**
     * @ApiProperty(identifier=true)
     */
    public int     $id;
    public int     $pid;
    public string  $ptable;
    public int     $sorting;
    public int     $tstamp;
    public string  $type;
    public string  $headline;
    public string  $text;
    public bool    $addImage;
    public string  $singleSRC;
    public string  $alt;
    public string  $title;
    public string  $size;
    public string  $imagemargin;
    public string  $imageUrl;
    public bool    $fullsize;
    public string  $caption;
    public string  $floating;
    public string  $html;
    public string  $listtype;
    public string  $listitems;
    public string  $tableitems;
    public string  $summary;
    public bool    $thead;
    public bool    $tfoot;
    public bool    $tleft;
    public bool    $sortable;
    public int     $sortIndex;
    public string  $sortOrder;
    public string  $mooHeadline;
    public string  $mooStyle;
    public string  $mooClasses;
    public string  $highlight;
    public string  $shClass;
    public string  $code;
    public string  $url;
    public bool    $target;
    public string  $titleText;
    public string  $linkTitle;
    public string  $embed;
    public string  $rel;
    public bool    $useImage;
    public string  $multiSRC;
    public string  $orderSRC;
    public bool    $useHomeDir;
    public int     $perRow;
    public int     $perPage;
    public int     $numberOfItems;
    public string  $sortBy;
    public bool    $metaIgnore;
    public string  $galleryTpl;
    public string  $customTpl;
    public string  $playerSRC;
    public string  $youtube;
    public string  $posterSRC;
    public string  $playerSize;
    public string  $playerOptions;
    public int     $playerStart;
    public int     $playerStop;
    public string  $playerCaption;
    public string  $playerAspect;
    public bool    $splashImage;
    public string  $playerPreload;
    public string  $playerColor;
    public string  $youtubeOptions;
    public string  $vimeoOptions;
    public int     $sliderDelay;
    public int     $sliderSpeed;
    public int     $sliderStartSlide;
    public bool    $sliderContinuous;
    public int     $cteAlias;
    public int     $articleAlias;
    public int     $article;
    public int     $form;
    public int     $module;
    public bool    $protected;
    public string  $groups;
    public bool    $guests;
    public string  $cssID;
    public bool    $invisible;
    public string  $start;
    public string  $stop;
    public string  $com_order;
    public int     $com_perPage;
    public bool    $com_moderate;
    public bool    $com_bbcode;
    public bool    $com_disableCaptcha;
    public bool    $com_requireLogin;
    public string  $com_template;
    public string  $typePrefix;
    public array   $classes;
    public int     $origId;

}
