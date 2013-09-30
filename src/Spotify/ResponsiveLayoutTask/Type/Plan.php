<?php 

namespace Spotify\ResponsiveLayoutTask\Type;

/**
 * Defines a Spotify plan
 */
class Plan
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var string
     */
    private $description;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $cssClass;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $imageAltText;

    /**
     * @var string
     */
    private $buttonText;

    /**
     * @var string
     */
    private $isHighlighted = false;

    /**
     * @var bool
     */
    private $hasTrialPeriod = false;

    /**
     * @var string
     */
    private $trialPeriodText;

    /**
     * @param string $buttonText
     * @return Plan
     */
    public function setButtonText($buttonText)
    {
        $this->buttonText = $buttonText;
        return $this;
    }

    /**
     * @return string
     */
    public function getButtonText()
    {
        return $this->buttonText;
    }

    /**
     * @param string $cssClass
     * @return Plan
     */
    public function setCssClass($cssClass)
    {
        $this->cssClass = $cssClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getCssClass()
    {
        return $this->cssClass;
    }

    /**
     * @param string $description
     * @return Plan
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param boolean $hasTrialPeriod
     * @return Plan
     */
    public function setHasTrialPeriod($hasTrialPeriod)
    {
        $this->hasTrialPeriod = $hasTrialPeriod;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasTrialPeriod()
    {
        return $this->hasTrialPeriod;
    }

    /**
     * @param string $image
     * @return Plan
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $imageAltText
     * @return Plan
     */
    public function setImageAltText($imageAltText)
    {
        $this->imageAltText = $imageAltText;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageAltText()
    {
        return $this->imageAltText;
    }

    /**
     * @param string $isHighlited
     * @return Plan
     */
    public function setIsHighlighted($isHighlited)
    {
        $this->isHighlighted = $isHighlited;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsHighlighted()
    {
        return $this->isHighlighted;
    }

    /**
     * @param string $name
     * @return Plan
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param float $price
     * @return Plan
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $summary
     * @return Plan
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $trialPeriodText
     * @return Plan
     */
    public function setTrialPeriodText($trialPeriodText)
    {
        $this->trialPeriodText = $trialPeriodText;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrialPeriodText()
    {
        return $this->trialPeriodText;
    }
}