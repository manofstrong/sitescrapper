<?php 
namespace Manofstrong;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;
use PHPUnit\Framework\Error\Notice;
use Manofstrong\SiteScrapper;

class SiteScrapperTest extends TestCase
{

	public function testSetUserAgentAndGetUserAgent(){

        $expectedResult = 'The New Bot';
		
		$SiteScrapper = new SiteScrapper();
		
		$SiteScrapper->setUserAgent('The New Bot');
		
		$result = $SiteScrapper->getUserAgent();
		
		$this->assertEquals($expectedResult, $result);
	}

	public function testDatabaseCredentials(){
		
		$SiteScrapper = new SiteScrapper();
		
		$result = $SiteScrapper->databaseCredentials('database','host','username','password');
		
		$this->assertTrue($result);
	}

	public function testSingleSiteMap(){
		
		$this->expectException(Error::class);		
		$this->expectExceptionMessage('You need to provide database credentials through method databaseCredentials().');
		
		$badUrl = 'gugugaga.gugu/gaga.gugugaga';
		
		$SiteScrapper = new SiteScrapper();
		$result = $SiteScrapper -> singleSiteMap($badUrl);
		
		$this->expectException(Notice::class);
		
	}	
	
	public function testShowContentSiteMap(){
		
		$this->expectException(Error::class);
		$this->expectExceptionMessage('Function showContentSiteMap() requires the second value to be an interger.');
		
		$url = 'gugugaga.gugu/gaga.gugugaga';
		
		$numberOfPages = "3";
		
		$SiteScrapper = new SiteScrapper();
		$result = $SiteScrapper -> showContentSiteMap($url, $numberOfPages);
		
	}	
	
	public function testSiteMapsArray(){
		
		$this->expectException(Error::class);
		$this->expectExceptionMessage('Function siteMapsArray() can only take an array');
		
		$notArray = 'this is most certainly not an array';
		
		$SiteScrapper = new SiteScrapper();
		$result = $SiteScrapper -> siteMapsArray($notArray);		
	}	
	
	public function testSiteMapFile(){
		
		$this->expectException(Error::class);				
		
		$notFile = 'this is most certainly not a file';
		
		$SiteScrapper = new SiteScrapper();
		$result = $SiteScrapper -> siteMapFile($notFile);		
	}
}