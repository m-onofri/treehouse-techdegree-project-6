<?php
/**
 * Created by PhpStorm.
 * User: alena
 * Date: 2019-02-01
 * Time: 14:17
 */
require_once __DIR__ .'/../classes/ListingPremium.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    /** @test */
    public function getStatusReturnsPremiumByDefault()
    {
        $data = [
            'title' => 'New Title',
            'id' => 0
        ];
        $listing = new ListingPremium($data);
        $this->assertEquals('premium', $listing->getStatus());
    }

    /** @test */
    public function getDescriptionReturnsTheExpectedResults()
    {
        $data = [
            'title' => 'New Title',
            'id' => 0,
            'description' => '<h1><strong>Hello World</strong></h1>'
        ];
        $listing = new ListingPremium($data);
        $this->assertEquals('<strong>Hello World</strong>', $listing->getDescription());
    }
}