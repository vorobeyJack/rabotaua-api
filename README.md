# rabota.ua api library

## Installation

The recommended way to install this library is via [Composer](https://getcomposer.org). 

```
composer require vrba/rabotaua-api
```

## Run

```php

require '../vendor/autoload.php';

use vrba\rabotaApi\Service;

```
Token parameter is optional for some resources, but for most - required
 ```php
$api = Service::run('Token');
```

## API Resources

### Companies
Get one by id:
```php
$company = $api->company->getCurrent($id);
```
Get current company vacancies 
```php
$vacancies = $api->company->getVacancies($id);
```
Get current company custom design
```php
$design = $api->company->getCustomDesign($id);
```

### Vacancies
Get one by id:
```php
$vacancy = $api->vacancy->getCurrent($id);
```
Get questions according to current vacancy
```php
$vacancy = $api->vacancy->getQuestions($id);
```

### Dictionary
Education types:
```php
$result = $api->dictionary->getEducationList();
```
Schedule types:
```php
$result = $api->dictionary->getScheduleList();
```
Cities list:
```php
$result = $api->dictionary->getCityList();
```
The same form of getYourSubResourceList for the following subresources:

```
      /resource      
      /language
      /experience
      /currency
      /statusapplication/experience
      /statusapplication/salary
      /additional
      /vacancystate
      /rubric
      /subrubric
      /gender
      /branch
      /zapros
      /ativitylevel
```

### Resume
Get resume by id:
```php
$result = $api->resume->getCurrent($id);
```
Get auth user resume:
```php
$result = $api->resume->getCurrentUserResume();
```
Get state of current resume:
```php
$result = $api->resume->getState($id);
```
Create resume with personal data:
```php
$result = $api->resume->createWithPersonalData($data);
```
```
 data - all fields are required
      {
       "name": "string",
       "middleName" : "string",
       "surName" : "string",
       "dateBirth": "2018-04-23T15:50:30.736Z",
       "gender": 0
       "cityId": 0,
       "moving": [
            0
       ],
     
       "resumeId": 0
      }
     
```
### Account
Login:
```php
$result = $api->account->login();
```
Get feedback by reply id
```php
$feedback = $api->account->getFeedback($id);
```
Get account photo
```php
$feedback = $api->account->getPhoto($id);
```



