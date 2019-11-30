# treehouse-techdegree-project-6
 
 The goal of this project is to add unit tests to an existing application, a directory of PHP Conferences.

## How to install 

Clone the git repository in the folder of your choice:
```
git clone https://github.com/m-onofri/treehouse-techdegree-project-6.git
```

Install the packages:
```
cd treehouse-techdegree-project-6
composer install
```

Run the server to give a look to the project
```
php -S localhost:4000
```

In your browser, go to http://localhost:4000/ and see the app.

To run the tests, run in your terminal
```
./vendor/bin/phpunit tests
```
You can check the test results in your terminal or in your browser at the following page: http://localhost:4000/tests/logs/testdox.html

 ## Main features

* test the functionality of the **ListingBasic**, **ListingPremium** and **ListingFeatured** classes;
* extend the application by adding a new feature, a listing image, in the **ListingBasic** class, as defined in the included **ListingImageTest** class.

## Code organization

* In the **'root'** folder you can find:
    - the index.php file;
    - the phpunit.xml file with unit test configuration;
* The **classes** folder contains all the classes tested in this project.
* in the **'tests'** folder you can find:
    - the subfolder logs containing the formatted results of the tests;
    - the **ListingBasicTest**, **ListingPremiumTest**, **ListingFeaturedTest** and **ListingImageTest** classes, containing all the test assertions.

