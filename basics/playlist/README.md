# Playlist

This is an app to help people keep track of their songs. It stores a song name and a star rating our of 5. A user inputs a song and a star rating, the data gets stored to a database and presented in a web app. The app is half built, but needs to be finished. Here's the current setup:

* index.php contains all of the html and php that is used to render the front page.
* database.php contains all of the code for connecting and communicating with the database. Currently there is a function for `getSongs` and `postSong` so you won't need to write any new functions in database.php.
* setup.sql contains all of the sql needed to setup a new instance of the database on a development server.

## Setup

> * Inside your VM, setup the database by running the `setup.sql` file. 

You should now be able to see 4 songs and a form

![unstyled](https://github.com/sam-meech-ward-bcit/Playlist_mideterm/blob/master/images/unstyled.png)

This step isn't worth any points, but it will help you test that all other features are working.

## Styles and Stars 40%

> * Use PHP to present the number of stars and ⭐ emojis. So instead of displaying the number 5, you would display ⭐⭐⭐⭐⭐
> * Use bootstrap and scss to make it look like this:

![styled](https://github.com/sam-meech-ward-bcit/Playlist_mideterm/blob/master/images/styled.png)

## POST 40%

When the user submits the form, make a post request back to index.php and do the following:

> * Check if the current request is a post request
> * Check that `title` and a `number_of_stars` have been set in the `$_POST` superglobal
> * Only if both of those are true, call the postSong function in database.php

## SQL INjection 20%

The postSong function is vulnerable to SQL Injection.

> *  Use parameterized queries to guard against sql injection.

---

## Rubric

Criteria | Perfect | Almost There | Halfway There | Kind of attempted | Incomplete
---|---|---|---|---|---
Convert number of stars to ⭐ | 15 | _ |  _ |  _ | 0
Use boostrap correctly | 15 | _ |  _ |  _ | 0
Use sass correctly | 10 | _ |  _ |  _ | 0
Correctly checks for POST request and parameters | 20 | _ |  _ |  _ | 0
Save the song to the database | 20 | _ |  _ |  _ | 0
Convert to parameterized query  | 20 | _ |  _ |  _ | 0
