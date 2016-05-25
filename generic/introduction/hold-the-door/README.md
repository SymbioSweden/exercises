<img src="http://i.imgur.com/6KzlfYj.jpg" alt="Hodor" class="blog-search">

# Hold The Door

> Prevent brute force attacks from white walkers using Hodor

## Your mission

In this introductory assignment; we want you to build a little extra security around WordPress. We want you to help us prevent brute force attacks from white walkers, should they try to log in to our website **The cave of the three-eyed raven**. 

To do that, we want to have an extra `text field` of security to the login form when logging in or registering. This field should simply ask `Are you Hodor?`, upon which the user to input text `3 times`. The first input is to be `Hold the door` (shouldn't matter if it's uppercase or lowercase), the second time `Hold door` and the final time `Hodor`. When that is validated, the user is to be able to log in/register. ([The form should look something like this](http://i.imgur.com/WEIoKhf.png))

## What tools do I got?

To help you get started and to get a grip on how we run things here at King's Landing… I mean, Symbio. We have some step by step setup that could be of use to you.

### First: *The base*

Go ahead and fork our [docker-wordpress](http://github.com/SymbioSweden/docker-wordpress)-repository. (You will be given access to this one). The repository includes a `Docker image` setup with `PHP 7.0.4`, `MariaDB, latest version` and `WordPress 4.4.2` (You may update WordPress upon first installation).

The project structure is also based upon [Bedrock](https://github.com/roots/bedrock), which let's us maintain WordPress projects in a clean and structured way.

It also includes a copy of the theme [Sage](https://github.com/roots/sage) within the `www/web/app/themes`-folder. But for this purpose, it shouldn't bother you more than a Cersei-haircut!

#### Good to know

At Symbio, we've sworn an oath that as often as possible, we should use [Docker](http://docker.io/) as CI for most of our projects. So for your own good, go ahead and read their documentation so you too also become some sort of *Maester Luwin of Docker*!

### Second *The plugin*

Now. When you feel that your massive weirwood tree (website) has set its roots; then it's time to setup our `Hodor`-plugin. Go ahead and clone our [WordPress Plugin Boilerplate](https://github.com/SymbioSweden/wp-plugin-boilerplate-psr/tree/hodor) into your `www/web/app/plugins`-folder. The link leads to a `hodor`-branch which is the version you want to use. 

Now the fun begins! Don't worry, it's nothing like the red wedding.

Go to the WordPress admin and activate your plugin. It should say `"Hodor"`.

#### Good to know

At Symbio, we want to treat our codebase with respect and nothing like the little twat Ramsay. Which leads us to `PSR-2` and `PSR-4` that this plugin is based upon. These are some really good `Coding Style Guide`- and `Autoloader`-standards for PHP. So please take some day to read about [PSR-2](http://www.php-fig.org/psr/psr-2/) and [PSR-4](http://www.php-fig.org/psr/psr-4/) before you start stabbing into your code.

### Third: *The JavaScript* – Bonus

This is only voluntary – but since we love to stay hungry with the latest technology. We also want you to start writing you Javascript in [ES2015 syntax](https://github.com/DrkSephy/es6-cheatsheet). To do that, we obviously need to use [Babel](https://babeljs.io/). You can go ahead and use only their compiler with `npm` for this purpose. Otherwise, if you want to dig deeper – then you should have a look at [Webpack](https://webpack.github.io/) which let's you bundle your resources.

Either way, you probably want some JavaScript to prevent the user from submitting the form before supplying the necessary data. You should iterate through three text fields, storing those three values within an array and the submit that array in the form.

### Utils

We have created some util files and helpers within this folder to help you forward. "Good to know"-filters and actions.

* [Filter and Actions](filters-and-actions.php)

---

## How about when I'm done?

First of all, this is not a real test. If you have any questions what so ever. Don't hesitate to [contact me](mailto:johnie.hjelm@symbio.com) and I will help you, guide you and answer your questions in the best way possible.

But when you're done, upload it somewhere where it can be viewable by the world and send it to <carolina.emanuelson@symbio.com> or <johnie.hjelm@symbio.com>

*Have fun!*

---

### Disclaimer

*No direwolfs should be harmed when making this – we only got two left*

## Copyright

© 2016 Symbio Sweden | Licence [MIT](/LICENCE) | Author: A boy has no name <johnie.hjelm@symbio.com>

<img src="http://symbiosweden.eu/app/themes/careers/dist/images/logo_new_dark.svg" alt="Symbio Sweden" width="150px" height="auto">
