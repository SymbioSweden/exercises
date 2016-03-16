# Order form

**[Download template ▸](index.html)**

----

# Credit card validation

## The problem

Our shopping website has customers abandoning their purchase in the order form. 
Our research shows that they drop out because they make typos in their credit 
card numbers. We can do something about this.

## Solution

Implement validation for the credit card number to catch our users mistakes, and 
provide them helpful feedback.

 * It should tell me the credit card type (Mastercard / Visa / American Express) 
  as soon as it knows it.
 * It should show a green check mark as soon as the valid.
 * If the card type isn't known, show a question mark.

## Your mission

 * Fork this repo and get [index.html](index.html) and work on it in your machine.
 * Use whatever tool or library you want. (jQuery, Angular, React, etc)
 * Keep the code clean and reviewable.
 * Use whatever tool you'd like to build the scripts and minify them into one file (Webpack, Gulp, Grunt, etc)
 * When you're done, upload it somewhere where it can be viewable by the world and send it to [carolina.emanuelson@symbio.com](mailto:carolina.emanuelson@symbio.com).
 * Have fun!

## How?

 - *Visa* cards start with `4`.
 - *Mastercard* cards start with `5`.
 - *American Express* cards start with `3`. The 2nd digit is either `4` or `7`.

Also:

 - *Visa* cards are valid if they have 13 to 16 digits.
 - *Mastercard* cards are valid if it has 16 digits.
 - *American Express* cards are valid if it has 15 digits.

----

## Bonus round

There's a published algorithm used to check the validity of credit card numbers.
Find out what it is and implement it.

Also, show an `✕ Invalid` message for credit card numbers that match the correct 
length of digits, but fails validation.

Add a mask to the input field to make the numbers more readable.

Setup a server (Node.js, Python, WordPress, etc) and post the actual form to the server.
The server should return a response message with success or error.

### Licence

MIT © Symbio Sweden
