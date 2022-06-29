##SPSS Landing page update 2014

hfghfhdhfshjyogugo3562<F8>306248346908469406860
### What is it?
The landing page template is an awesome framework for creating new landing pages in a jiffy! It comes with many standard style of blocks, all of which are responsive.


### What comes in the box?
There is a TON of features built in to the template, a large majority of the features are dynamic and scalable so event tracking and google analytics always works properly. There is already a 'premade' template that you can use, and just delete any SASS or PHP blocks you do not require.

Features:

- Scrolling event tracking for all blocks, no matter the length of the landing page
- Automatic detection of where the landing page is being hosted which sends the analytics to the proper accounts
- Customizable imports of specific SASS files for the blocks you need
- Global settings, so changing names for event tracking or block names only needs to be changed in one place


### Requirements to edit 
- Local server, such as **XAMPP** or WAMP
- Koala SASS precompiler (found at [http://koala-app.com/](http://koala-app.com/ "Koala GUI"))
- A totally whicked text editor (Sublime Text or GitHub atom are the best)

## Getting started
This template comes with pre-made blocks that reflect common layouts and features found in many popular landing pages. You can choose to use the included ones, or make a new ones.


### Step 1: Determine blocks used
First you must determine the blocks you want to use, and then include them in the `index.php` like so:

    <?php  
         include 'content-insert-block-name.php';
         $counter++;
    ?>

Then, ensure the corresponding SASS file is imported in `main.scss` 

`@import 'content-insert-block-name';`


### Step 2: Enter general landing page information
Once you have included your blocks, now enter the 

