This is development project based on **Symfony 4** used to test and develop bundles.


**Creating new entities**

You need to provide absolute namespace starting like: 
\App\Core\Entity\Media



**Updating bundle:**

- go to bundle repo 
- make changes on `master` 
- commit 
- go back to this repo
- run `composer require vatri/google-drive-bundle:"@dev" --prefer-source`

**Testing bundles**

You can test bundles in `HomeController`

For development of bundle, see above point.