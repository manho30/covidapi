# covidapi

The PHP script for tracking the COVID-19 epidemic and vaccination data in Malaysia

Coverage percentage: ![coverage](https://img.shields.io/badge/coverage-42%25-green)


## Build

### Project Structure
```
.
├───assest
├───docs
├───epidemic
│   ├───case
│   │   ├───age
│   │   ├───malaysia
│   │   └───state
│   ├───cluster
│   ├───death
│   │   ├───age
│   │   ├───malaysia
│   │   └───state
│   ├───hospital
│   ├───icu
│   ├───pkrc
│   └───test
│       ├───malaysia
│       └───state
├───mysejahtera
│   ├───checkin
│   │   ├───malaysia
│   │   ├───state
│   │   └───time
│   └───trace
├───path
├───registration
│   ├───state
│   └───vax
├───static
├───vax
│   ├───malaysia
│   ├───school
│   └───state
└───vendor
    └───composer
```

### Requirment
- PHP environment installed
- PHP verison 7.4 and above
- Able to access internet

### Clone the project

```bash
$ git clone https://github.com/manho30/covidapi.git
$ cd covidapi
```

### Run the server

``` bash
$ php -S 127.0.0.1:8084
```
The server should be start now.


### Deploy to Heroku
You may also deploy this project to heroku to make it your self and make it available to the public.

To be cotinue, make sure to have the following requirements:
- Able to access internet
- Heroku account to be created
- Node.js environment and NPM to be installed
- Git to be installed
- Heroku CLI to be installed
- A new project to be created on Heroku



If you are not installed git, you can install it by following the instructions on [GitHub](https://help.github.com/en/articles/set-up-git-on-windows-mac-and-linux-with-git-for-windows).


#### Install Heroku CLI
If you are already installed, skip this part.

First, running the bloody following command in the terminal.

```bash
$ npm install -g heroku-cli
```

Checking the installation

```bash
$ heroku --versiom
```
It shuold be `heroku/7.60.2 win32-x64 node-v16.14.2` in your ouput means the installation is successful.


After the installation, you can run the following command to login to heroku, following the prompt.


```bash
$ heroku login
```


#### Deploy your changes

``` bash
$ git add .
$ git commit -am "initial commit"
$ git push heroku
```
So far the project is deployed to heroku.

Don't understand?
open your bloody browser and go search the tutorial on [Heroku](https://devcenter.heroku.com/articles/getting-started-with-nodejs)



## Usage

Here is showing to get vaccination data by state:



Accoring to the project structure, you may reqauest to the correct path. Otherwise you will get a 404 error.

``` text
├── vax
|   ├── malaysia
|   │   └── index.php
|   ├── school
|   │   └── index.php
|   └── state
|       └── index.php
```
Hence, you need to request to the correct path with 
``` http
GET http://127.0.0.1:8084/vax/state
```



Or if you are using my puiblic interface, it shuold be
``` http
GET http://mycovidapi2.herokuapp.com/vax/state
```

## Credit
Open data: Ministry of Health Malaysia and CITF Malaysia
