<?php
/**
 * Created by PhpStorm.
 * User: alena
 * Date: 2019-02-01
 * Time: 14:17
 */

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    public function listingBasicMustBeInstantiateWithValidData()
    {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
        $listing = new ListingBasic();
    }

    /** @test */
    function setValuesMustReceiveDataWithId()
    {
        $data = ['title' => 'New Title'];
        
        $this->expectExceptionMessage('Unable to create a listing, invalid id');
        $recipe = new ListingBasic($data);
    }

    /** @test */
    function setValuesMustReceiveDataWithTitle()
    {
        $data = ['id' => 0];
        
        $this->expectExceptionMessage('Unable to create a listing, invalid title');
        $recipe = new ListingBasic($data);
    }

    /** @test */
    public function listingBasicInstantiateAnObject()
    {
        $data = [
            'title' => 'New Title',
            'id' => 0
        ];
        $this->assertIsObject(new ListingBasic($data));
    }

    /** @test */
    public function getStatusReturnsBasicByDefault()
    {
        $data = [
            'title' => 'New Title',
            'id' => 0
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('basic', $listing->getStatus());
    }

    /** @test */
    public function getMethodsReturnTheExpectedResults()
    {
        $data = [
            'title' => 'New Title',
            'id' => 0,
            'website' => 'mywebsite.com',
            'email' => 'myemail@mail.com',
            'twitter' => '@example'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals(0, $listing->getId(), 'getId doesn\'t return the expected value');
        $this->assertEquals("New Title", $listing->getTitle(), 'getTitle doesn\'t return the expected value');
        $this->assertEquals("http://mywebsite.com", $listing->getWebsite(), 'getWebsite doesn\'t return the expected value');
        $this->assertEquals("myemail@mail.com", $listing->getEmail(), 'getEmail doesn\'t return the expected value');
        $this->assertEquals('example', $listing->getTwitter(), 'getTwitter doesn\'t return the expected value');
    }

    /** @test */
    public function toArrayReturnsArrayWithExpectedResults()
    {
        $data = [
            'title' => 'New Title',
            'id' => 0,
            'website' => 'mywebsite.com',
            'email' => 'myemail@mail.com',
            'twitter' => '@example'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data = [
                                'title' => 'New Title',
                                'id' => 0,
                                'website' => 'http://mywebsite.com',
                                'email' => 'myemail@mail.com',
                                'twitter' => 'example',
                                'status' => 'basic',
                                'image' => null
                            ], $listing->toArray());
    }

    
}


