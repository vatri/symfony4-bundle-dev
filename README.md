This is development project based on **Symfony 4** used to test and develop bundles.


**Updating bundle:**

- go to bundle repo 
- make changes on `master` 
- commit 
- go back to this repo
- run `composer require [namespace]/[package]:"@dev" --prefer-source`

See this article + comments: https://medium.com/pvtl/local-composer-package-development-47ac5c0e5bb4 

**Testing bundles**

You can test bundles in `HomeController`

For development of bundle, see above point.