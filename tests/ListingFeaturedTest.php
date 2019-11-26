<?php
/**
 * Created by PhpStorm.
 * User: alena
 * Date: 2019-02-01
 * Time: 14:17
 */
require_once __DIR__ .'/../inc/config.php';
//  require_once __DIR__ .'/../classes/ListingBasic.php';
// require_once __DIR__ .'/../classes/ListingPremium.php';
// require_once __DIR__ .'/../classes/ListingFeatured.php';

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    /** @test */
    public function getStatusReturnsFeaturedByDefault()
    {
        $data = [
            'title' => 'New Title',
            'id' => 0
        ];
        $listing = new ListingFeatured($data);
        $this->assertEquals('featured', $listing->getStatus());
    }

    /** @test */
    public function getCocReturnsTheExpectedResults()
    {
        $data = [
            'title' => 'New Title',
            'id' => 0,
            'coc' => '<h1><strong>Hello World</strong></h1>'
        ];
        $listing = new ListingFeatured($data);
        $this->assertEquals('<strong>Hello World</strong>', $listing->getCoc());
    }
}