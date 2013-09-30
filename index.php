<?php

// Autoloader
require __DIR__ . '/vendor/autoload.php';

// Definitions
$isDebug = true;

// Twig
$loader = new \Twig_Loader_Filesystem(__DIR__ . '/views');
$cache = $isDebug ? [] : ['cache' => __DIR__ . '/cache'];
$twig = new \Twig_Environment($loader, $cache);

// Plans
$unlimitedPlan = new \Spotify\ResponsiveLayoutTask\Type\Plan();
$unlimitedPlan
    ->setName('Unlimited')
    ->setSummary('Unlimited, uninterrupted music.')
    ->setDescription('Listen on your desktop &amp; laptop <br> Millions of songs - just hit play <br> No ads &amp; no commitment')
    ->setPrice(4.99)
    ->setCssClass('unlimited')
    ->setImage('desktop.png')
    ->setImageAltText('Listen on your desktop &amp; laptop')
    ->setButtonText('Get Unlimited')
    ->setIsHighlighted(false)
    ->setHasTrialPeriod(false)
    ->setTrialPeriodText(null)
;

$premiumPlan = new \Spotify\ResponsiveLayoutTask\Type\Plan();
$premiumPlan
    ->setName('Premium')
    ->setSummary('Your music is everywhere.')
    ->setDescription('Listen on all your devices <br> Download music &amp; listen offline <br> No ads &amp; no commitment')
    ->setPrice(9.99)
    ->setCssClass('premium')
    ->setImage('all-devices.png')
    ->setImageAltText('Listen on all your devices')
    ->setButtonText('Try Premium')
    ->setIsHighlighted(true)
    ->setHasTrialPeriod(true)
    ->setTrialPeriodText('30 Day Free Trial')
;

$plans = [
    $unlimitedPlan,
    $premiumPlan
];

// Rendering view
echo $twig->render('index.html.twig', compact('plans'));