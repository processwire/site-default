# ProcessWire 3.x Default Site Profile

## Delayed output / intermediate version

The intermediate version of the default site profile is identical in function 
to the beginner version, except that it uses a different output strategy. 
Rather than splitting the markup into _head.php and _foot.php files, all the 
markup is instead contained in a _main.php file, which represents an entire 
HTML document.

- [Introduction to the Default site profile](https://processwire.com/docs/tutorials/default-site-profile/)
- [About the delayed output / intermediate version](https://processwire.com/docs/tutorials/default-site-profile/#intermediate-delayed-output-version)

## To install

Depending on your version of ProcessWire, you may already have this site profile
included with the core, in which case you do not need to download it. If you find
that you do not already have it, follow the instructions below: 

- To use this site profile, you must first have a copy of ProcessWire that has 
  not yet gone through the installation process. 

- Copy the files from this repository into a `/site-default/` directory in your
  web root (or wherever ProcessWire’s `install.php` file is located). 

- Open the URL where you've copied ProcessWire's files to in your web browser. 
  The installer should start, and when it asks you what site profile you want to
  install, you should see this profile there. Select it and continue installation.


