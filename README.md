# Bearer Onboarding PHP

This sample application allows you to try out [Bearer](https://bearer.sh) before installing it in your application. To get started, you will need:

- An account on Bearer ([Sign up here](http://app.bearer.sh/signup))
- Your Bearer App Key, found [here in the settings](https://app.bearer.sh/settings/general).
- PHP 5.6+
- Composer

In addition, you will need following PHP extensions:
- [cURL](https://www.php.net/manual/en/book.curl.php)
- [JSON](https://www.php.net/book.json)
- [Stream](https://www.php.net/manual/en/intro.stream.php)

## Installation

First, clone this repo.

```shell
# Clone the app
git clone https://github.com/Bearer/onboarding-php.git
```

Next, navigate to the newly created directory.

```shell
# Change directory
cd onboarding-php
```

Finally, run `composer` to install the dependencies.

```bash
composer install
```

## Running the application

To start the application, run the following command and replace the `XXXX` with your Bearer App Key.

```bash
BEARER_SECRET_KEY='XXXX' php main.php
```

## Viewing the results

Once the application has finished running, you can view the results by visiting the [dashboard](https://app.bearer.sh).

To get started with Bearer in your own application, check our or [Go Agent Documentation](https://go.docs.bearer.sh/).

If you need any help along the way, you can get support at our [Help Center](https://support.bearer.sh) or by clicking the Intercom button directly in the dashboard.
