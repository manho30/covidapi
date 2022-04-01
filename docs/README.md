# covidapi

The PHP script for tracking the COVID-19 epidemic and vaccination data in Malaysia

Coverage percentage: ![coverage](https://img.shields.io/badge/coverage-42%25-green)


## Build


### Requirment
- PHP environment installed
- PHP verison 7.4 and above
- Able to access internet

### Clone the project

```bash
$ git clone https://github.com/manho30/covidapi.git
$ cd /covidapi
```

### Run the server

``` bash
$ php -S 127.0.0.1:8084
```
The server should be start now.

## Usage

**Accepting all request method.**

- No extra headers, without query string.

For example to get vaccination data by state,

`get` http://127.0.0.1:8084/vax/state


## Credit
Open data: Ministry of Health Malaysia and CITF Malaysia
